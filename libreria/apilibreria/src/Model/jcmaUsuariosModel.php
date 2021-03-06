<?php 
namespace App\Model;
use App\Config\DB;
use Exception;


class jcmaUsuariosModel {
    private static $table = 'usuarios';
    private static $DB; 

    public static function conexionDB(){
        jcmaUsuariosModel::$DB = new DB();
    }

    public static function jcmanew($param){

       try{
            jcmaUsuariosModel::conexionDB();
            $sql = "insert into usuarios (usuarioid, nombre, apellidos, direccion, ciudad, anioNac) 
                    values (?, ?, ?, ?, ?, ?)";
            $data = jcmaUsuariosModel::$DB->run($sql, $param);
            return "Usuario ". $param[1] . " insertado correctamente ";
       } catch(Exception $e){
          return $e->getMessage();
       }
    }

}