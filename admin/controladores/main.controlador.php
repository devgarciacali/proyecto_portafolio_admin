<?php

class ControladorMain
{
    /**
     * MOSTRAR CABEZERA
     */
    static public function ctrMostrarMain($item, $campo)
    {
        $tabla = 'main';

        $respuesta = ModeloMain::mdlMostrarMain($tabla, $item, $campo);
        return $respuesta;
    }
    /**
     * CREAR MAIN
     */
    static public function ctrCrearMain()
    {
        
                
        if (isset($_POST["nombre"])) {
            if (
                !empty($_POST['nombre']) && !empty($_POST['especialidad'])
                && !empty($_POST['descripcion']) && !empty($_FILES['linkfoto']['tmp_name'])
            ) {

                $directorio = 'vistas/img/perfil';
                $nuevoalto =478;
                $nuevoancho =382;
                
                $logo = ControladorMain::guardarimagen($_FILES['linkfoto'],$directorio,$nuevoancho,$nuevoalto);
               
                $tabla = 'main';                
                $parametros = [
                    'nombre' => $_POST['nombre'],
                    'especialidad' => $_POST['especialidad'],
                    'descripcion' => $_POST['descripcion'],
                    'linkfoto' => $logo,                    
                ];
                var_dump($parametros);
                
                $respuesta = ModeloMain::mdIgresarMain($tabla, $parametros);
                if ($respuesta == "ok") {
                    echo '<script>
                    swal({
                        type: "success",
                        title: "Main Guardado correctamente",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                        }).then(function(result){
                            if(result.value){
                                window.location ="?ruta=main";
                             }                        
                        });
                    </script>';
                } else {
                    echo '<script>
                    swal({
                        type: "error",
                        title: "Main no se guardo",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                        }).then(function(result){
                            if(result.value){
                                window.location ="?ruta=main";
                             }                        
                        });
                    </script>';
                }

            } else {
                echo '<script>
                    swal({
                        type: "error",
                        title: "No deben quedar Campos Vacios",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                        }).then(function(result){
                            if(result.value){
                                window.location ="?ruta=main";
                             }                        
                        });
                    </script>';
            }
        }
    }


    /**
     * ===========================================
     * EDITAR CABEZERA
     * ===========================================
     */

    static public function ctrEditarMain()
    {       
        if (isset($_POST["editarnombre"])) {           
            
                  $logo = $_POST["fotoactual"]; 
                if (isset($_FILES['editarnuevaFoto']['tmp_name']) && !empty($_FILES['editarnuevaFoto'])) {
                    $directorio = 'vistas/img/perfil';
                   
                    $nuevoancho = 382;
                    $nuevoalto = 478;

                    $nuevaRuta = ControladorMain::guardarimagen($_FILES['editarnuevaFoto'],$directorio,$nuevoancho,$nuevoalto);
                    if ($nuevaRuta) {
                        $logo = $nuevaRuta;
                    }

                }
               
                $tabla = 'main';
                $id = $_POST['editarid'];              
                $parametros = [
                    'nombre' => $_POST['editarnombre'],
                    'especialidad' => $_POST['editarespecialidad'],
                    'descripcion' => $_POST['editardescripcion'],
                    'linkfoto' => $logo,                    
                ];
               
                $respuesta =  ModeloMain::mdIEditarMain($tabla, $parametros, $id);
                if ($respuesta == "ok") {
                    echo '<script>
                    swal({
                        type: "success",
                        title: "Main Guardado correctamente",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                        }).then(function(result){
                            if(result.value){
                                window.location ="?ruta=main";
                             }                        
                        });
                    </script>';
                } else {
                    echo '<script>
                    swal({
                        type: "error",
                        title: "Usuario no se guardo",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                        }).then(function(result){
                            if(result.value){
                                window.location ="?ruta=main";
                             }                        
                        });
                    </script>';
                }
           
        }
    }

    /***=================================================
     * 
     * FUNCION PARA PROCESAR Y GUARDAR IMAGENES
     *
      ===========================================================*/

    public static function guardarimagen($imagen, $directorio, $nuevoancho, $nuevoalto)
    {
        if (!isset($imagen) || !isset($imagen["tmp_name"]) || empty($imagen["tmp_name"]) || !file_exists($imagen["tmp_name"])) {
            return false;
        }

        list($ancho, $alto) = getimagesize($imagen["tmp_name"]);

        /*
        ==============================================================
        creamos el directorio donde vamos a guardar la foto de usuario
        ==============================================================
        */
        if (!file_exists($directorio)) {
            mkdir($directorio, 0755);
        }


        /**
         * de acuerdo al tipo de imagen, recortamos
         */
        if ($imagen['type'] == 'image/jpeg') {
            /**
             * Guardamos la imagen en el directorio
             */

            $aleatorio = mt_rand(100, 999);
            $ruta = $directorio . '/' . $aleatorio . '.jpg';

            $origen = imagecreatefromjpeg($imagen['tmp_name']);
            $destino = imagecreatetruecolor($nuevoancho, $nuevoalto);

            imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoancho, $nuevoalto, $ancho, $alto);
            imagejpeg($destino, $ruta);
        }
        if ($imagen['type'] == 'image/png') {
            /**
             * Guardamos la imagen en el directorio
             */

            $aleatorio = mt_rand(100, 999);
            $ruta = $directorio . '/' . $aleatorio . '.png';

            $origen = imagecreatefrompng($imagen['tmp_name']);
            $destino = imagecreatetruecolor($nuevoancho, $nuevoalto);

            imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoancho, $nuevoalto, $ancho, $alto);
            imagepng($destino, $ruta);
        }
        return $ruta;
    }
}
