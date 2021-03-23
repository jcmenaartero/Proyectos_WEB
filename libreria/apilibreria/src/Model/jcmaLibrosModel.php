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

    /*public static function getAll(){
        LibrosModel::conexionDB();
        $sql = "Select * from libros";
        $data = LibrosModel::$DB->run($sql, []);
        return $data->fetchAll();
    }
    public static function show($param){
        LibrosModel::conexionDB();
        $sql = 'SELECT * from libros where libro_id = ?';
        $data = LibrosModel::$DB->run($sql, $param);
        return $data->fetch();
    }
    public static function getLiEd(){
        LibrosModel::conexionDB();
        $sql = "SELECT nombre_libro,nombre_editorial,precio,stock FROM libros NATURAL JOIN editores";
        $data = LibrosModel::$DB->run($sql, []);
        return $data->fetchAll();
    }*/
}