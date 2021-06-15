<?php
namespace App\Model;
use App\Config\DB;


class heroesModel {
    private static $table = 'heroes';
    private static $DB;

    public static function conexionDB(){
        heroesModel::$DB = new DB();
    }

    public static function getAll(){
        heroesModel::conexionDB();
        $sql = "Select * from heroes";
        $data = heroesModel::$DB->run($sql, []);
        return $data->fetchAll();
    }

    public static function getHero($id){
        heroesModel::conexionDB();
        $sql = 'SELECT * FROM heroes WHERE ID = ? ';
        $data = heroesModel::$DB->run($sql, $id);
        return $data->fetchAll();
    }
}