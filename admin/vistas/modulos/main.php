<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Administrar Main</h1>
    <!-- <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#modalAgregarMain">
        Agregar Main
    </button> -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Editar Main</h6>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>nombre</th>
                            <th>especialidad</th>
                            <th>descripcion</th>
                            <th>linkfoto</th>
                            <th>Editar</th>

                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>id</th>
                            <th>nombre</th>
                            <th>especialidad</th>
                            <th>descripcion</th>
                            <th>linkfoto</th>
                            <th>Editar</th>

                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $item = null;
                        $campo = null;

                        $campos = ControladorMain::ctrMostrarMain($item, $campo);
                        foreach ($campos as $campo):
                            ?>
                            <tr>
                                <td><?= $campo->id ?></td>
                                <td><?= $campo->nombre ?></td>
                                <td><?= $campo->especialidad ?></td>
                                <td><?= $campo->descripcion ?></td>
                                <td><img src="<?= $campo->linkfoto ?>" width="50px"></td>
                                <td><button class="btn btn-warning btnEditarMain" idMain="<?= $campo->id ?>"
                                        data-toggle="modal" data-target="#modalEditarMain">
                                        Editar
                                    </button></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->


<!-- INICIAN LOS MODALES -->

<!-- MODAL AGREGAR CABEZARA -->

<div class="modal fade" id="modalAgregarMain" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form class="user" method="post" enctype="multipart/form-data">
                <!-- CABEZA MODAL -->
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Main</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <!-- TERMINA CABEZA MODAL -->

                <!-- CUERPO MODAL -->
                <div class="modal-body">
                    <div class="form-group row">
                        <!-- ENTRADA DEL NOMBRE -->
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" name="nombre"
                                placeholder="Nombre">
                        </div>
                        <!-- ENTRADA ESPECIALIDAD -->
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-user" name="especialidad"
                                placeholder="Especialidad">
                        </div>
                        <!-- ENTRADA DESCRIPCION -->
                        <div class="col-sm-6 py-3">
                            <input type="text" class="form-control form-control-user" name="descripcion"
                                placeholder="Descripcion">
                        </div>
                        <!-- ENTRADA FOTO -->
                        <div class="col-sm-6 py-3">
                            <input type="file" class="nuevoLogo form-control form-control-user" name="linkfoto"
                                placeholder="Sube el logo">
                            <p>Peso maximo de la foto 2MB</p>
                            <img src="vistas/img/usuarios/default/anonimo.png" class="img-thumbail previsualizar"
                                width="100px">
                        </div>
                    </div>
                </div>
                <!-- TERMINA CUERPO DEL MODAL -->

                <!-- PIE DEL MODAL -->
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Salir</button>
                    <button class="btn btn-success" type="submit">Guardar Cabezera</button>
                </div>
                <!-- TERMINA PIE DEL MODAL -->
            </form>
            <?php
            $crearMain = new ControladorMain();
            $crearMain->ctrCrearMain();
            ?>
        </div>
    </div>
</div>
<!-- TEMINA MODAL AGREGAR cabezera -->

<!-- MODAL EDITAR CABEZERA -->
<div class="modal fade" id="modalEditarMain" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form class="user" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Main</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="small font-weight-bold">Nombre</label>
                                <input type="text" class="form-control" name="editarnombre" id="editarnombre" placeholder="Nombre completo">
                                <input type="hidden" name="editarid" id="editarid" value="">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="small font-weight-bold">Especialidad</label>
                                <input type="text" class="form-control" name="editarespecialidad" id="editarespecialidad" placeholder="Ej. Ing. de Software">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="small font-weight-bold">Descripción</label>
                            <textarea class="form-control" name="editardescripcion" id="editardescripcion" rows="4" placeholder="Breve descripción sobre el perfil..."></textarea>
                        </div>

                        <div class="form-row align-items-center">
                            <div class="form-group col-md-6">
                                <label class="small font-weight-bold">Foto (opcional)</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="editarnuevaFoto" name="editarnuevaFoto">
                                    <label class="custom-file-label" for="editarnuevaFoto">Seleccionar archivo</label>
                                </div>
                                <small class="form-text text-muted">Peso máximo 2MB. Formato JPG o PNG.</small>
                                <input type="hidden" name="fotoactual" id="fotoactual">
                            </div>
                            <div class="form-group col-md-6 text-center">
                                <label class="small font-weight-bold d-block">Previsualización</label>
                                <div class="border rounded d-inline-block p-2 bg-white">
                                    <img src="vistas/img/usuarios/default/anonimo.png" class="img-fluid previsualizar" style="max-height:160px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Salir</button>
                    <button class="btn btn-success" type="submit">Guardar Cambios</button>
                </div>

                <?php
                    $editarMain = new ControladorMain();
                    $editarMain->ctrEditarMain();
                ?>
            </form>
        </div>
    </div>
</div>
<!-- TEMINA MODAL EDITAR USUARIO -->