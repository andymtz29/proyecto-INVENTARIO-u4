<?php
    if(!isset($_SESSION['usuario'])){
        header("location:login");
        exit();
    }
?>

<div class="container mt-5">
    <div class="row justify-content-center p-4 rounded shadow-lg" style="background-color: rgba(255, 255, 255, 0.5);">
        

        <div class="col-12 text-center mt-4 mb-4">
            <h2>Lista de Productos</h2>
        </div>
        <div class="col-12 text-end mb-3">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#agregarModal">
                <i class="fa fa-plus-circle"></i> Añadir Producto
            </button>
        </div>
        <div class="col-12">
            <table id="myTable" class="table table-striped table-hover text-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Producto</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody id="contenido_producto">
                </tbody>
            </table>
        </div>
        <div class="col-12 text-center mt-3">
            <hr class="text-primary">
            <p class="lead">Andrea</p>
        </div>
    </div>
</div>

<!-- Modal para Agregar Producto -->


<div class="modal fade" id="agregarModal" tabindex="-1" aria-labelledby="agregarModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title" id="agregarModalLabel"><i class="fas fa-plus-circle"></i> Agregar Producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="form_agregar">
                    <div class="mb-3">
                        <label for="producto" class="form-label">Producto</label>
                        <input type="text" class="form-control" id="producto" name="producto" placeholder="Ingrese el nombre del producto" required>
                    </div>
                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio</label>
                        <input type="text" class="form-control" id="precio" name="precio" placeholder="Ingrese el precio" required>
                    </div>
                    <div class="mb-3">
                        <label for="unidades" class="form-label">Unidades</label>
                        <input type="number" class="form-control" id="unidades" name="unidades" placeholder="Ingrese la cantidad" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-times-circle"></i> Cerrar</button>
                <button type="button" class="btn btn-success" id="btn_agregar"><i class="fas fa-plus"></i> Añadir Producto</button>
            </div>
        </div>
    </div>
</div>



<!-- Modal para Editar Producto -->
<div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="editarModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="editarModalLabel">Actualizar Producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="form_editar">
                    <input type="hidden" id="id_producto_act">
                    <div class="mb-3">
                        <label for="edit_producto" class="form-label">Producto</label>
                        <input type="text" class="form-control" id="edit_producto" name="edit_producto" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit_precio" class="form-label">Precio</label>
                        <input type="text" class="form-control" id="edit_precio" name="edit_precio" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit_unidades" class="form-label">Unidades</label>
                        <input type="number" class="form-control" id="edit_unidades" name="edit_unidades" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-success" id="btn_actualizar">Actualizar Producto</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


