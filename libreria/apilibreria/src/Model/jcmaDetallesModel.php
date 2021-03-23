<?php 
namespace App\Model;
use App\Config\DB;
use Exception;


class jcmaDetallesModel {
    private static $table = 'detallepedidos';
    private static $DB; 

    public static function conexionDB(){
        jcmaDetallesModel::$DB = new DB();
    }

    public static function jcmanew($param){

        jcmaDetallesModel::conexionDB();
        $sql = "INSERT INTO detallepedidos (CodigoLibro, CodigoUsuario, Cantidad, descuento, fecha) 
        values (?, ?, ?, ?, CURRENT_DATE)";
        $data = jcmaDetallesModel::$DB->run($sql, $param);
        return "EL usuario con id: ". $param[1] ." compra ".$param[2] ." ejemplares del libro cuya id es ". $param[0] ." con un descuento del ". $param[4] ." ,en el dia de hoy.";
    }
    
}