<?php 
namespace Controllers\nw2023;

use Controllers\PublicController;
use Views\Renderer;

class Me extends PublicController{
    public function run():void{
        $viewData = array();
        Renderer::render('nw2023/me', $viewData);
    }
}

?>