<?php 

namespace Dao\Clases;

use Dao\Table;

class Demo extends Table{
    public static function getAResponse(){
        return self::obtenerUnRegistro('Select 1 as response', array());
    }
}

?>