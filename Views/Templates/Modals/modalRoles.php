
<!-- Modal -->
<div class="modal fade" id="modalFormRol" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="" id="formRol" name="formRol">
                <div class="modal-header headerRegister">
                    <h5 class="modal-title" id="titleModal">Nuevo Rol</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="idRol" name="idRol" value="">
                    <div class="form-group">
                        <label for="txtNombre">Nombre</label>
                        <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="Nombre del Rol">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="txtDescripcion">Descrición</label>
                        <input type="text" class="form-control" id="txtDescripcion" name="txtDescripcion" placeholder="Descripción del Rol">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="listStatus">Estado</label>
                        <select class="form-control" id="listStatus" name="listStatus">
                            <option value="1">Activo</option>
                            <option value="2">Inactivo</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" id="btnActionForm" class="btn btn-primary"><span id="btnText">Guardar Cambios</span></button>
                </div>
            </form>
        </div>
    </div>
</div>

