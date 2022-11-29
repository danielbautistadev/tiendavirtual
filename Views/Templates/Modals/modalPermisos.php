<!-- Modal -->
<div class="modal fade modalPermisos" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form action="" id="formPermisos" name="formPermisos">
                <input type="hidden" id="idrol" name="idrol" value="<?= $data['idrol']; ?>" required="">
                <div class="modal-header">
                    <h5 class="modal-title">Permisos Roles de Usuarios</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                    <div class="col-md-12">
                        <div class="tile">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Módulo</th>
                                            <th>Ver</th>
                                            <th>Crear</th>
                                            <th>Actualizar</th>
                                            <th>Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $no = 1;
                                        $modulos = $data['modulos'];
                                        for ($i = 0; $i < count($modulos); $i++) { 
                                            $permisos = $modulos[$i]['permisos'];
                                            $rCheck = $permisos['r'] == 1 ? " checked " : "";
                                            $wCheck = $permisos['w'] == 1 ? " checked " : "";
                                            $uCheck = $permisos['u'] == 1 ? " checked " : "";
                                            $dCheck = $permisos['d'] == 1 ? " checked " : "";

                                            $idmod = $modulos[$i]['idmodulo'];
                                    ?>
                                        <tr>
                                            <td>
                                                <?= $no; ?>
                                                <input type="hidden" name="modulos[<?= $i; ?>][idmodulo]" value="<?= $idmod ?>" required >
                                            </td>
                                            <td>
                                                <?= $modulos[$i]['titulo']; ?>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="modulos[<?= $i; ?>][r]" <?= $rCheck ?>>
                                                    <label class="form-check-label">
                                                        Habilitar
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" name="modulos[<?= $i; ?>][w]" <?= $wCheck ?>>
                                                    <label class="form-check-label">
                                                        Habilitar
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" name="modulos[<?= $i; ?>][u]" <?= $uCheck ?>>
                                                    <label class="form-check-label">
                                                        Habilitar
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" name="modulos[<?= $i; ?>][d]" <?= $dCheck ?>>
                                                    <label class="form-check-label">
                                                        Habilitar
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php 
                                            $no++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary"><span id="btnText">Guardar Cambios</span></button>
                </div>
            </form>
        </div>
    </div>
</div>