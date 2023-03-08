<?php

namespace Dao\Mnt;

use Dao\Table;

class Categorias extends Table
{
    public static function insert()
    {
    }
    public static function update(string $catnom, string $catest = "ACT")
    {
        $sqlstr = "INSERT INTO categorias VALUES (:catnom, :catest);";
        $rowInserted = self::executeNonQuery(
            $sqlstr, 
            array("catnom" => $catnom, "catest" => $catest));
        return $rowInserted;
    }

    public static function delete()
    {
    }

    public static function findAll(){
        $sqlstr = "SELECT * from categorias;";
        return self::obtenerRegistros($sqlstr, array());
    }

    public static function findById()
    {
    }
    
    public static function findByFilter()
    {
    }
}
