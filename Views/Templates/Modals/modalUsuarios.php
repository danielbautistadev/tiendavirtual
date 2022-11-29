<!-- Modal -->
<div class="modal fade" id="modalFormUsuarios" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form action="" id="formUsuarios" name="formUsuarios" class="form-horizontal">
                <div class="modal-header headerRegister">
                    <h5 class="modal-title" id="titleModal">Nuevo Rol</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="idUsuario" name="idUsuario" value="">
                    <div class="form-group">
                        <label for="txtIdentificaion">Identificación:</label>
                        <input type="text" class="form-control" id="txtIdentificaion" name="txtIdentificaion" placeholder="Nro. de Identificación" require>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="txtNombre">Nombre:</label>
                            <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="Nombre Completo" require>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="txtApellido">Apellidos:</label>
                            <input type="text" class="form-control" id="txtApellido" name="txtApellido" placeholder="Apellidos Completo" require>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="txtTelefono">Celular:</label>
                            <input type="text" class="form-control" id="txtTelefono" name="txtTelefono" placeholder="Número de Teléfono" require>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="txtEmail">Correo:</label>
                            <input type="email" class="form-control" id="txtEmail" name="txtEmail" placeholder="Escribe tu correo" require>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="listRolid">Tipo de Usuario</label>
                            <select id="listRolid" name="listRolid" class="form-control" require>
                                <!-- <option></option>
                                <option></option> -->
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="listStatus">Status</label>
                            <select id="listStatus" name="listStatus" class="form-control" require>
                                <option value="1">Activo</option>
                                <option value="2">Inactivo</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="txtPassword">Contraseña:</label>
                            <input type="password" class="form-control" id="txtPassword" name="txtPassword">
                        </div>
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