<?= $this->extend('main_layout') ?>

<?= $this->section('contenido_index') ?>

<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-xl-12">
                <div class="row page-titles">
                    <div class=" col-12 d-flex align-items-center">
                        <h2 class="heading">Productos</h2>  
                            <button type="button" class="btn btn-primary ms-auto" data-bs-toggle="modal" data-bs-target="#modal-producto" onclick="limpiar()">
                                Añadir Producto
                            </button>                
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="tablaListado" class="table display">
                                <thead>
                                    <th>Nombre</th>
                                    <th>Estado</th>
                                    <th>Opciones</th>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--**********************************
            Content body end
        ***********************************-->
<!-- Large modal -->

<div id="modal-producto" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Añadir/Editar Producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-body">
                <form id="anadirfrm">
                    <input type="hidden" id="idproducto" name="idproducto">
                    <div class="row">
                        <div class="mb-3 col-12">
                            <label class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre">
                        </div>                 
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Cancelar</button>
                <button id="btnguardar" type="button" class="btn btn-primary" onclick="guardar()">Guardar</button>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('scripts_personalizados') ?>
<script src="<?= base_url('public/assets/js/productos.js') ?>"></script>
<?= $this->endSection() ?>