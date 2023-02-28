<?php 
namespace Controllers\nw2023;

use Controllers\PublicController;
use Views\Renderer;

class FichaIntegrantes extends PublicController{
    public function run():void{
        $viewData = array(
            "integrante6" => "Fernando Mendoza",
            "integrante6Cuenta" => "0321200200561",

            "integrante2" => "Selvin Mejia",
            "integrante2Cuenta" => "0306200100233",

            "integrante3" => "Angelica Ramos",
            "integrante3Cuenta" => "0318200401014",

            "integrante4" => "Yonadad Martinez",
            "integrante4Cuenta" => "0301200201172",

            "integrante5" => "Carlos Dominguez",
            "integrante5Cuenta" => "0318200300339",

            "integrante1" => "Jefry Peña",
            "integrante1Cuenta" => "0801200208208",

            "integrante7" => "Fernando Lagos",
            "integrante7Cuenta" => "0704200000948",
        );
        Renderer::render('nw2023/fichaIntegrantes', $viewData);
    }
}

?>