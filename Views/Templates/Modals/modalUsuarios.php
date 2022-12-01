<!-- Modal -->
<div class="modal fade" id="modalFormUsuario" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form action="" id="formUsuario" name="formUsuario" class="form-horizontal">
                <div class="modal-header headerRegister">
                    <h5 class="modal-title" id="titleModal">Nuevo Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="idUsuario" name="idUsuario" value="">
                    <div class="form-group">
                        <label for="txtIdentificacion">Identificación:</label>
                        <input type="text" class="form-control" id="txtIdentificacion" name="txtIdentificacion" placeholder="Nro. de Identificación" require>
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
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="listRolid">Tipo de Usuario</label>
                            <select id="listRolid" name="listRolid" data-live-search="true" class="form-control" require>
                                <!-- <option></option>
                                <option></option> -->
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="listStatus">Status</label>
                            <select id="listStatus" name="listStatus" class="form-control selectpicker" require>
                                <option value="1">Activo</option>
                                <option value="2">Inactivo</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="txtPassword">Contraseña:</label>
                            <input type="password" class="form-control" id="txtPassword" name="txtPassword">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
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

<!-- Modal -->
<div class="modal fade" id="modalViewUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header header-primary">
                <h5 class="modal-title" id="exampleModalLabel">Datos del Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-hover table-dark">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Ítem 1</th>
                            <th scope="col">Ítem 2</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Identificación:</td>
                            <td id="celIdentificacion">47161063</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Nombres:</td>
                            <td id="celNombre">47161063</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Apellidos:</td>
                            <td id="celApellido">47161063</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Teléfono:</td>
                            <td id="celTelefono">47161063</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Email (Usuario):</td>
                            <td id="celEmail">47161063</td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>Tipo Usuario:</td>
                            <td id="celTipoUsuario">47161063</td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td>Estado:</td>
                            <td id="celEstado">47161063</td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td>Fecha Registro:</td>
                            <td id="celFechaRegistro">47161063</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>