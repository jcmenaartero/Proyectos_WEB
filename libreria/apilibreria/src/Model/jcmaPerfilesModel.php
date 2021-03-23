<?php 
namespace App\Model;
use App\Config\DB;
use Exception;


class jcmaPerfilesModel {
    private static $table = 'perfiles';
    private static $DB; 

    public static function conexionDB(){
        jcmaPerfilesModel::$DB = new DB();
    }

    public static function jcmanew($param){

       try{
            jcmaPerfilesModel::conexionDB();
            $sql = "INSERT INTO perfiles (perfilid, email, facebook, instagram, foto, rol, userid) 
                    values (?, ?, ?, ?, ?, 'usuario', ?)";
            $data = jcmaPerfilesModel::$DB->run($sql, $param);
            return "Perfil de usuario: ". $param[6] . " insertado correctamente ";
       } catch(Exception $e){
          return $e->getMessage();
       }
    }
}