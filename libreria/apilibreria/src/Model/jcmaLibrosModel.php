<?php
namespace App\Model;
use App\Config\DB;

//definimos LibrosModel como una clase estática:
//no se puede hacer un new, no hay $this, no hay método __contruct()
class jcmaLibrosModel {
    private static $table = 'libros';
    private static $DB;

    public static function conexionDB(){
        jcmaLibrosModel::$DB = new DB();
    }
    public static function jcmagetFilter($param){
        jcmaLibrosModel::conexionDB();
        $sql = 'SELECT * FROM libros NATURAL JOIN categorias WHERE precio > ? AND nombre_categoria = ?';
        $data = jcmaLibrosModel::$DB->run($sql, $param);
        return $data->fetchAll();
    }

    public static function jcmaUpdate($param){
        jcmaLibrosModel::conexionDB();
        $sql = 'UPDATE libros SET stock=stock+ ? ,precio=precio+ ? WHERE editorid = ?';
        $data = jcmaLibrosModel::$DB->run($sql, $param);
        return "Los libros de la eidtorial ". $param[2] ." han aumentado su stock en ".$param[0] ." y su precio en ". $param[1] ." mas.";
    }
    public static function jcmagetComprados($param){
        jcmaLibrosModel::conexionDB();
        $sql = 'SELECT * FROM libros WHERE libro_id IN (SELECT CodigoLibro FROM detallepedidos WHERE CodigoUsuario= ?)';
        $data = jcmaLibrosModel::$DB->run($sql, $param);
        return $data->fetchAll();
    }
}