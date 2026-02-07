<?php 
require_once "../controladores/main.controlador.php";
require_once "../modelos/main.modelo.php";

class AjaxMain{
    /**========================
     * EDITAR USUARIO
     =========================*/

     public $idMain;
     public function ajaxEditarMain(){
        $campo = 'id';
        $item = $this->idMain; 
    

        $respuesta = ControladorMain::ctrMostrarMain($item, $campo);
        echo json_encode($respuesta);
     }

     public function ajaxEliminarMain(){
        $campo = 'id';
        $item = $this->idMain; 
        $tabla= 'main';
        $respuesta = ModeloMain::MdlEliminarMain($item, $campo, $tabla);
        return $respuesta;
     }
}

if(isset($_POST['idMain'])){
    $editar = new AjaxMain();
    $editar-> idMain = $_POST['idMain'];
    $editar->ajaxEditarMain();
}

if(isset($_POST['eliminarMain'])){
    $eliminarMain = new AjaxMain();
    $eliminarMain-> idMain = $_POST['eliminarMain'];
    $eliminarMain->ajaxEliminarMain();
}

