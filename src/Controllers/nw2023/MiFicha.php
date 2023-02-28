<?php 
namespace Controllers\nw2023;

use Controllers\PublicController;
use Views\Renderer;

class MiFicha extends PublicController{
    public function run():void{
        $viewData = array(
            "nombre" => "Fernando Mendoza",
            "email" => "fy_mendozam@unicah.edu",
            "title" => "Estudiante"
        );
        Renderer::render('nw2023/miFicha', $viewData);
    }
}

?>