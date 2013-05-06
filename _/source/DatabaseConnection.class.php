<?php
//include('_config/config.php');
class DatabaseConnection{

    private static $conn;

    public function __construct(){
        //$config = new Config();
        $config['host'] = "localhost";
        $config['dbname'] = "agiotech_apanel";
        $config['username'] = "agiotech_integra";
        $config['password'] = "RR,h&icyg5?~";
        try {
            self::$conn = new PDO('mysql:host='.$config['host'].';dbname='.$config['dbname'], $config['username'], $config['password'],array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") );
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

    public static function alter($query){
        try{
            $stmt = self::$conn->prepare($query);
            $stmt->execute();
            return true;
        }catch(PDOException $e){
            echo 'Error: '.$e->getMessage();
        }
    }
    public static function orderMultiDimensionalArray ($toOrderArray, $field, $inverse = false) {
        $position = array();
        $newRow = array();
        foreach ($toOrderArray as $key => $row) {
                $position[$key]  = $row[$field];
                $newRow[$key] = $row;
        }
        if ($inverse) {
            arsort($position);
        }
        else {
            asort($position);
        }
        $returnArray = array();
        foreach ($position as $key => $pos) {
            $returnArray[] = $newRow[$key];
        }
        return $returnArray;
    }
    public static function selectAll($dbtable,$campos=null,$orderby='',$order=false){
        try{
            $lista=array();
            if($campos!=null){
                $query = "SELECT ";
                $cnt=1;
                foreach ($campos as $campo) {
                    if($cnt==1)
                        $query .=$campo;
                    else
                        $query .=",".$campo;
                    $cnt++;
                }
                $query .=" FROM $dbtable";
            }else{
                $query="SELECT * from $dbtable";
            }

            if(!empty($orderby))
                $query .=" order by ".$orderby;
            if($order)
                $query .=" DESC";

            $stmt = self::$conn->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchAll();

            if(count($result)){

                foreach ($result as $i=> $row) {
                    $namesRows=array_keys($row);
                    $cnt= count($namesRows);

                    foreach ($namesRows as $key => $nameField) {
                        if(!is_numeric($nameField))
                            $lista[$i][''.$nameField.'']=$row[''.$nameField.''];
                    }
                }
            }
            return $lista;
        }catch(PDOException $e){
            echo 'Error: '.$e->getMessage();
        }
    }

    public static function insertInto($dbtable,$campos=array(),$utf8_decode=false){
        try{
            $query="INSERT INTO $dbtable values(:id";
            $valores = array(':id'=>'null');
            foreach ($campos as $key => $campo) {
                    $query.=",:".$key;
                    if($utf8_decode)
                        $valores[$key]=utf8_decode($campo);
                    else
                        $valores[$key]=$campo;

            }
            $query .=")";
            $stmt=self::$conn->prepare($query);
            $stmt->execute($valores);
            return true;
        }catch(PDOException $e){
            echo 'Error: '.$e->getMessage();
            return false;
        }

    }

    public static function selectInner($dbtable1,$dbtable2,$onT1,$onT2,$whereField,$whereValue,$orderby='',$order=false){

        try{
            $lista=array();
            $query="SELECT t1.*,t2.* from $dbtable1 as t1 inner join $dbtable2 as t2 on t1.$onT1=t2.$onT2 WHERE $whereField=:$whereField";
            if(!empty($orderby))
                $query .=" order by ".$orderby;
            if($order)
                $query .=" DESC";


            $stmt = self::$conn->prepare($query);
            $stmt->execute(array($whereField=>$whereValue));
            $result = $stmt->fetchAll();

            if(count($result)){

                foreach ($result as $i=> $row) {
                    $namesRows=array_keys($row);
                    $cnt= count($namesRows);

                    foreach ($namesRows as $key => $nameField) {
                        if(!is_numeric($nameField))
                            $lista[$i][''.$nameField.'']=$row[''.$nameField.''];
                    }
                }
            }
            return $lista;
        }catch(PDOException $e){
            echo 'Error: '.$e->getMessage();
        }

    }

    public static function selectWhere($dbtable,$whereField,$whereValue,$orderby='',$order=false, $andField='',$andValue=''){

        try{
            $lista=array();
            $query="SELECT t.* from $dbtable as t WHERE $whereField=:$whereField";
            if(!empty($andField))
                $query .=" AND $andField=:$andField";

            if(!empty($orderby))
                $query .=" order by ".$orderby;
            if($order)
                $query .=" DESC";

            $query .=" LIMIT 1";

            $stmt = self::$conn->prepare($query);

            if(!empty($andField))
                $stmt->execute(array($whereField=>$whereValue,$andField=>$andValue));
            else
                $stmt->execute(array($whereField=>$whereValue));

            $result = $stmt->fetchAll();

            if(count($result)){

                foreach ($result as $i=> $row) {
                    $namesRows=array_keys($row);
                    $cnt= count($namesRows);

                    foreach ($namesRows as $key => $nameField) {
                        if(!is_numeric($nameField))
                            $lista[$i][''.$nameField.'']=self::stringToHtml($row[''.$nameField.'']);
                    }
                }
            }
            return $lista;
        }catch(PDOException $e){
            echo 'Error: '.$e->getMessage();
        }

    }

    public static function deleteWhere($dbtable,$whereField,$whereValue){
        try {
            $query= "DELETE FROM $dbtable WHERE $whereField=:$whereField";
            $stmt=self::$conn->prepare($query);
            $stmt->execute(array($whereField=>$whereValue));
            return true;
        } catch (PDOException $e) {
         echo 'Error: '.$e->getMessage();
         return false;
        }
    }

     public static function update($dbtable,$campos=array(),$whereField,$whereValue,$utf8_decode=false)
    {
        try{
            $query="UPDATE $dbtable SET ";
            $valores = array();
            $cnt=1;
            foreach ($campos as $key => $campo) {
                    if($cnt==1)
                        $query.=$key."=:".$key;
                    else
                        $query.=",".$key."=:".$key;

                    if($utf8_decode)
                        $valores[$key]=utf8_decode($campo);
                    else
                        $valores[$key]=$campo;
                    $cnt++;
            }
            $query .= " WHERE ".$whereField."=".$whereValue;
            $stmt=self::$conn->prepare($query);
            $stmt->execute($valores);
            return true;
        }catch(PDOException $e){
            echo 'Error: '.$e->getMessage();
            return false;
        }

    }
    public static function stringToHtml($cadena){
        $tablaCaracteres= array("–"=>"&#150;","Ω"=>"&Omega;","´"=>"&#180","'"=>"&#39;","°"=>"&deg","ú"=>"&#250","Ú"=>"&#218","ñ"=>"&#241;","o"=>"&#243;","a"=>"&#225;","e"=>"&#233;","i"=>"&#237;","ü"=>"&#241","¼"=>"&#188;","½"=>"&#189;","¾"=>"&#190;","®"=>"&#174;","©"=>"&#169;",
            "Ñ"=>"&#209;","o"=>"&#211;","a"=>"&#193;","e"=>"&#201;","i"=>"&#205;","Ü"=>"&#220"
            );

        foreach ($tablaCaracteres as $key => $value) {

           $cadena= str_replace(utf8_decode($key), $value, $cadena);
        }
        return $cadena;
    }
}
?>
