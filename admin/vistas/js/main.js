$(".nuevoLogo").change(function(){
    let imagen = this.files[0];
    /**========================
     * validamos el formato en jpg, png
     ========================*/
     if(imagen["type"] != "image/jpeg" && imagen["type"] != "image/png"){
        $(".nuevoLogo").val("");
        swal({
            title: "Error al subir la imagen",
            text: "La imagen debe estar en formato JPG o PNG",
            type: "error",
            confirmButtonText: "Cerrar"
        })
     }else if(imagen["size"]>2000000){
        $(".nuevoLogo").val("");
        swal({
            title: "Error al subir la imagen",
            text: "La imagen no debe pesar mas de 2MB",
            type: "error",
            confirmButtonText: "Cerrar"
        });
     }else{
        let datosImagen = new FileReader;
        datosImagen.readAsDataURL(imagen);

        $(datosImagen).on("load", function(event){
            let rutaImagen = event.target.result;
            $(".previsualizar").attr("src", rutaImagen);
        });
     }
});

/**==================================================================
 * EDITAR USUARIO
 ===================================================================*/

 $(document).on("click", ".btnEditarMain", function(){
    let idMain = $(this).attr("idMain");
    console.log(idMain);
    let datos = new FormData();
    //le estoy pasando un identificador y un valor
    datos.append("idMain", idMain);

    $.ajax({
      url:"ajax/main.ajax.php", 
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType: "json",
      success: function(respuesta){
       $("#editarnombre").val(respuesta['nombre']);
        $("#editarespecialidad").val(respuesta['especialidad']);
        $("#editardescripcion").val(respuesta['descripcion']);
        $('#fotoactual').val(respuesta['linkfoto']);
        $('.previsualizar').attr('src', respuesta['linkfoto']);
        $('#editarid').val(respuesta['id']);
        
      }
    });
 });

 