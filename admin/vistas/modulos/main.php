<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Administrar Main</h1>
    <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#modalAgregarMain">
        Agregar Main
    </button>
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
                                <td><?= $campo->linkfoto ?></td>

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

<div class="modal fade" id="modalEditarMain" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form class="user" method="post" enctype="multipart/form-data">
                <!-- CABEZA MODAL -->
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Main</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">❌</span>
                    </button>
                </div>
                <!-- TERMINA CABEZA MODAL -->

                <!-- CUERPO MODAL -->
                <div class="modal-body">
                    <div class="form-group row">

                        <!-- ENTRADA nombre -->
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-user" name="editarnombre"
                                id="editarnombre" value="">
                            <input type="hidden" name="editarid" id="editarid" value="">
                        </div>
                        <!-- ENTRADA ESPECIALIDAD   -->
                        <div class="col-sm-6 py-3">
                            <input type="text" class="form-control form-control-user" name="editarespecialidad"
                                id="editarespecialidad" value="">
                        </div>
                        <!-- ENTRADA DESCRIPCION -->
                        <div class="col-sm-6 py-3">
                            <input type="text" class="form-control form-control-user" name="editardescripcion"
                                id="editardescripcion" value="">
                        </div>
                        <!-- ENTRADA FOTO -->

                        <div class="col-sm-6 py-3">
                            <input type="file" class="nuevaFoto form-control form-control-user" name="editarnuevaFoto">
                            <p>Peso maximo de la foto 2MB</p>
                            <img src="vistas/img/usuarios/default/anonimo.png" class="img-thumbail previsualizar"
                                width="100px">
                            <input type="hidden" name="fotoactual" id="fotoactual">
                        </div>
                    </div>
                </div>
                <!-- TERMINA CUERPO DEL MODAL -->

                <!-- PIE DEL MODAL -->
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Salir</button>
                    <button class="btn btn-success" type="submit">Guardar Cambios</button>
                </div>
                <!-- TERMINA PIE DEL MODAL -->
                <?php
                $editarMain = new ControladorMain();
                $editarMain->ctrEditarMain();
                ?>
            </form>
            <?php

            ?>
        </div>
    </div>
</div>
<!-- TEMINA MODAL EDITAR USUARIO -->