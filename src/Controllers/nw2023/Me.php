<?php 
namespace Controllers\nw2023;

use Controllers\PublicController;
use Views\Renderer;
Use Dao\Clases\Demo;

class Me extends PublicController{
    public function run():void{
        $viewData = array();
        $responseDao = Demo::getAResponse()["response"];
        $viewData["response"] = $responseDao;
        Renderer::render('nw2023/me', $viewData);
    }
}

?>