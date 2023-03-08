<?php 

namespace Controllers\Mnt;
use Controllers\PublicController;
use Views\Renderer;

class categorias extends PublicController{
    public function run(): void{
        $viewData = array();
        $viewData["categorias"] = \Dao\Mnt\Categorias::findAll();
        Renderer::render('mnt/categorias', $viewData);
    }

}

?>

