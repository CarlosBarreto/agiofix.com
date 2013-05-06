$(function() {
	$('#banda-email').click(function(){			
			$('#globo-form-email').toggle();
			$('.form-true').hide();			
			return false;
		});	
	$('#marca_producto').change(function () {
					$('#marca_producto').val($('#marca_producto option:selected').val());
				});

	$('#select_producto').change(function () {
	    if($(this).val() != '0'){
	    	if($(this).val() == 'Componente'){
	    		$('#select_tipo .t_pro').hide();
	    		$('#select_tipo .t_com').show();

	    	}
	    	else if($(this).val() == 'Equipo'){
	    		$('#select_tipo .t_com').hide();
	    		$('#select_tipo .t_pro').show();

	    	}

	    	$('#select_tipo').removeAttr('disabled')
	    	 //$(this).addClass('empty');
	 	}
	    //else $(this).removeClass('empty')
	});

	$('form#form_contacto'),$('form.form_contacto').submit(function(){
				var $form = $(this);				
				var fname=$form.find( 'input[name="nombre"]' ).val();
				var fempresa=$form.find( 'input[name="empresa"]' ).val();
				var ftelefono=$form.find( 'input[name="telefono"]' ).val();
				var femail=$form.find( 'input[name="email"]' ).val();
				var fasunto=$form.find( 'textarea[name="asunto"]' ).val();				

				if(($.trim(femail).length<1)||($.trim(fasunto).length<1)){
					alert("Los campos EMAIL y ASUNTO son requeridos");
					return false;
				}
				$.ajax({
					type: "POST",
					url: "send_contacto.php",
					dataType : 'json',
					data: {
						nombre: fname,
						email: femail,
					    empresa:fempresa, 
					    telefono: ftelefono, 
					    asunto: fasunto},
					success: function($request){
						if($request.success){
							$('.form-true').fadeIn(1000);
							$('.form-true').fadeOut(1000);
							$('#globo-form-email').hide('slow');
							$('form.form_contacto input').val('');
							$form.find( 'textarea[name="asunto"]' ).val('');
						}
					},
					error:function(){
									alert("Error! Ocurrio un error al enviar el formulario de contacto, intentelo mas tarde.");
									}
					});
					return false;
	});
	
	//Upd Carlos Barreto 2013.04.02 -- Begin
	// --- Submit del formulario en formato Json
	$('#form_levantar_orden').submit(function(){
			var $form = $(this);
			var values = $(this).serialize();
			if(valid_forms($(this))){
			$.ajax({
				type: "POST",
				url: "send_orden.php",
				dataType : 'json',
				data: values ,
				success: function($request){			
					if($request.success){
						$('.form-true').fadeIn(1000);
						$('.form-true').fadeOut(1000);	
						//Limpieza de formulario							
						$('#form_levantar_orden input').val('');
						$('#form_levantar_orden textarea').val('');						
						
					  	alert($request["msg"]);
					}
				},
				error:function($request){	
					alert('Error! Ocurrio un error al enviar el formulario.');
					alert($request["msg"]);
					if(!$request.success){						
					  	alert($request["msg"]);
					}
				}
			});
		}
		
		return false;
	});
		
		
	function valid_email(dom){
		var emailregex = /(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/;
		    			//'		
	    if(!emailregex.test($(dom).val())){		        
	        $(dom).after('<span class="form_error">Introduce una dirección de correo electrónico</span>');                    
	        return false;
	    }else
	    return true; 		 
	}

	function valid_forms(form){
        var form_error = true;                
        $(form).children().children('span.form_error').remove();
        $(form).children('div').children().each(function(){
             if($(this).is('[required]')){
                 if($.trim($(this).val()).length==0 || $(this).attr('placeholder')==$(this).val()){
                    form_error = false;                    
                    if($(this).is('[type="email"]')){		                
		                form_error = valid_email($(this));
		            }else
                    	$(this).after($('<span class="form_error">Completa este campo</span>'));
                }else if($(this).is(':checkbox') && !this.checked){
                    form_error = false;                    
                    $(this).after($('<span class="form_error">Selecciona esta casilla de verificación si quieres continuar</span>'));
                }
            }else{
        	    if($(this).is('[type="email"]')){
        	    	form_error = valid_email($(this));
        	    }   
            }
        });	
		return form_error;
	}
});