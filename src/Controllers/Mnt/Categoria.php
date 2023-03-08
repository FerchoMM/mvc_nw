<?php

namespace Controllers\Mnt;

use Controllers\PublicController;
use Exception;

class Categoria extends PublicController
{
    private $viewData = array(
        "mode" => "DSP",
        "modedsc" => "",
        "catid" => 0,
        "catnom" => "",
        "catest" => "ACT",
        "catest_ACT" => "selected",
        "catest_INA" => ""
    );

    private $modes = array(
        "DSP" => "Detalles de %s (%s)",
        "INS" => "Nueva Categoría",
        "UPD" => "Editar %s (%s)",
        "DEL" => "Eliminar %s (%s)",
    );

    public function run(): void
    {
        try {
            $this->page_loaded();
        } catch (Exception $err) {
            error_log(sprintf("Controllers/Mnt/Categoria ERROR: %s", $err));
            \Utilities\Site::redirectToWithMsg(
                "index.php?page=Mnt-Categorias",
                "Algo Inesperado Sucedió. Intente de Nuevo"
            );
        }

        /*
        1) Determinamos el método POST y GET
        2) Captura de QueryParams -> Parámetros de Query ? 
            https://ax.ex.com/index.php?page=abs&mode=UPD&id=1029
        3) Procesar la Entrada
            3.1) Si es POST
            3.2) Captura y Valida Datos del Formulario
            3.3) Según el modo a realizar la acción solicitada
            3.4) Notificar Error si hay
            3.5) Redirigir a la Lista
            4.1) Si es GET
            4.2 Obtener valores de la BD si no es INS
            4.3) Mostrar Valores
        4) Renderizar

        */
    }

    private function page_loaded()
    {
        if (isset($_GET['mode'])) {
            if (isset($this->modes[$_GET['mode']])) {
                $this->viewData["mode"] = $_GET['mode'];
            } else {
                //throw "Mode Not Available";
            }
        } else {
            //throw "Mode not defined on Query Params";
        }

        if (isset($_GET['catid'])) {
            $this->viewData["catid"] = $_GET['catid'];
        } else {
            //throw "Id not found on Query Params";
        }
    }
}
