<div class="right_col" role="main">

    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2 class="fuentetitulo">PROGRAMAR PRACTICA <small>LISTADO</small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="content">
                    <?php $days = cal_days_in_month(CAL_GREGORIAN, (int)date('m'), (int)date('Y'));
                    $dias = array('Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado');
                    $meses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
                    ?>
                    <div class="x_panel">
                        <div class="x_title">
                            <h5 class="panel-title">FILTROS</h5>
                        </div>
                        <form id="frmFiltro" action="<?php echo base_url('Admin/ControlLaboratorio/filtrar/') ?>" method="post">
                            <div class="x_content">
                                <div class="form-row">
                                    <div class="form-group col-sm-3">
                                        <label for="ddlLabFil" class="control-label">Mes</label>
                                        <select name="ddlLabFil" id="ddlLabFil" class="form-control ddlLabFil" style="width:100%;">
                                            <option value="">(Todos)</option>
                                            <option value="1">Lab-1</option>
                                            <option value="2">Lab-2</option>
                                            <option value="3">Lab-3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="txtAnio" class="control-label">Año</label>
                                    <?php if ($anio) {
                                        if ($anio <> 0) { ?>
                                            <input type="Number" name="txtAnio" id="txtAnio" class="form-control txtAnio" value="<?php echo $anio; ?>" step="1" min="0" placeholder="<?php echo date('Y'); ?>">
                                        <?php } else { ?>
                                            <input type="Number" name="txtAnio" id="txtAnio" class="form-control txtAnio" value="" step="1" min="0" placeholder="<?php echo date('Y'); ?>">
                                        <?php }
                                } ?>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-sm-3">
                                        <label for="ddlMes" class="control-label">Mes</label>
                                        <select name="ddlMes" id="ddlMes" class="form-control ddlMes" style="width:100%;">
                                            <option value="1">Enero</option>
                                            <option value="2">Febreo</option>
                                            <option value="3">Marzo</option>
                                            <option value="4">Abril</option>
                                            <option value="5">Mayo</option>
                                            <option value="6">Junio</option>
                                            <option value="7">Julio</option>
                                            <option value="8">Agosto</option>
                                            <option value="9">Septiembre</option>
                                            <option value="10">Octubre</option>
                                            <option value="11">Noviembre</option>
                                            <option value="12">Diciembre</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="pull-right text-center">
                                <div class="btn btn-group">
                                    <span id="btnNuevo" class="btn btn-primary" data-toggle="modal" data-target="#modal-programacion"><span class="fa fa-plus">&nbsp;</span>Agregar</span>
                                    <span id="btnNuevo" class="btn btn-danger" data-toggle="modal" data-target="#modal-avanzadas"><span class="fa fa-minus">&nbsp;</span>Borrar <small>(Avanzado)</small></span>
                                    <button type="submit" id="btnBuscar" class="btn btn-success btnBuscar"><span class="fa fa-search"></span>&nbsp;Buscar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="x_panel">
                        <div class="x_content">
                            <div class="row">
                                <div class="col-sm-4 col-xs-4 text-center">
                                    <a class="fa fa-arrow-left fa-3x rowchange" chn="0"></a>
                                </div>
                                <div class="col-sm-4 col-xs-4 text-center">
                                    <h2 class="">
                                        <?php echo $meses[$mes - 1] ?>
                                    </h2>
                                </div>
                                <div class="col-sm-4 col-xs-4 text-center">
                                    <a class="fa fa-arrow-right fa-3x rowchange" chn="1"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="x_panel">
                        <div class="x_content dataTables_wrapper">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table table-striped table-responsive">
                                        <thead>
                                            <tr>
                                                <?php foreach ($dias as $dia) { ?>
                                                    <th class="text-center">
                                                        <?php echo $dia; ?>
                                                    </th>
                                                <?php } ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for ($c = 1; $c <= $days; $c++) { ?>
                                                <tr>
                                                    <?php for ($i = 0; $i <= 6; $i++) {
                                                        $val = date('w', mktime(0, 0, 0, $mes, $c, $anio)); ?>
                                                        <?php if ($val == $i) { ?>
                                                            <td>
                                                                <a class="lstFech lstFech_<?php echo $c ?>" data-toggle="modal" data-target="#modal-lista">
                                                                    <div class="x_panel" style="position:relative;width:100%;height:100%;">
                                                                        <div class="x_content text-center">
                                                                            <span class="fa fa-stack fa-2x">
                                                                                <span class="fa fa-circle-o-notch fa-stack-2x"></span>
                                                                                <span class="fa-stack-1x" id="#dia">
                                                                                    <?php echo $c; ?>
                                                                                </span>
                                                                            </span>
                                                                            <div>
                                                                                <?php if ($c == 12 || $c == 21 || $c == 17) {  ?>
                                                                                    <br>
                                                                                    <div class="bg-green"></div>
                                                                                <?php } else { ?>
                                                                                    <br>
                                                                                    <div class=" bg-red"></div>
                                                                                <?php } ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <?php if ($i < 6) $c++;
                                                            if ($c > $days) break;
                                                        } else { ?>
                                                            <td>
                                                            </td>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- MODAL PARA INSERTS Y EDITS -->

<!-- modal form -->
<div class="modal fade" id="modal-programacion">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">PROGRAMACION DE PRACTICAS</h4>
            </div>
            <div class="modal-body">
                <form name="frmAddEdit" action="" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <label>Laboratorio</label>
                            <select name="ddlLab" id="ddlLab" class="form-control ddlLab" required="required" multiple="multiple" style="width:100%;">
                                <option value="1">Lab-1</option>
                                <option value="2">Lab-2</option>
                                <option value="3">Lab-3</option>
                            </select>
                        </div>
                        <div class="form-group col-md-8 col-sm-8 col-xs-12">
                            <label>Fecha</label>
                            <input type="Date" class="form-control col-md-7 col-xs-12 txtFecha" name="txtFecha" id="txtFecha" placeholder="Fecha" required="required">
                        </div>
                        <div class="form-group col-md-4 col-sm-4 col-xs-12">
                            <label>Día</label><br>
                            <h4><label class="label label-primary lblDia" style="width:100%;"></label></h4>
                        </div>
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <label>Hora inicia</label>
                            <input type="Time" class="form-control col-md-7 col-xs-12" name="txtHini" id="txtHini" placeholder="Inicia" required="required">
                        </div>
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <label>Hora Finaliza</label>
                            <input type="Time" class="form-control col-md-7 col-xs-12" name="txtHfin" id="txtHfin" placeholder="Finaliza" required="required">
                        </div>
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <label>Máximo de Cupos</label>
                            <input type="Number" class="form-control col-md-7 col-xs-12" name="txtCupos" id="txtCupos" placeholder="Disponibilidad" required="required" step="1" min="0">
                        </div>
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <label>Rango de Programación</label>
                            <select name="ddlRango" id="ddlRango" class="form-control ddlRango" required="required">
                                <option value="U">Fecha Única</option>
                                <option value="M">Todo el Mes</option>
                                <option value="C">Todo el Ciclo</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <div class="ln_solid"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- MODAL PARA LA PROGRAMACION DE LOS LABORATORIOS -->

<!-- modal form -->
<div class="modal fade" id="modal-lista">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">LISTA PRACTICAS PROGRAMADAS</h4>
            </div>
            <div class="modal-body">
                <form name="frmList" action="" method="POST">
                    <div class="form-row">
                        <div class="col-sm-12 table-responsive">
                            <table class="table table-striped table-hover dtable" id="tabla">
                                <thead>
                                    <tr>
                                        <th>Lab</th>
                                        <th>Fecha</th>
                                        <th>Inicia</th>
                                        <th>Termina</th>
                                        <th>Cupos</th>
                                        <th>
                                            <div class="botonesList">Acciones</div>
                                        </th>
                                    </tr>
                                </thead>
                                <form action="" method="post" id="frmDel">
                                    <tbody id="tableLista">
                                    </tbody>
                                </form>
                            </table>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <div class="ln_solid"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- Modal Para opciones avanzadas -->
<!-- modal form -->
<div class="modal fade" id="modal-avanzadas">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">ELIMINAR PROGRAMACION&nbsp;<small>(AVANZADA)</small></h4>
            </div>
            <div class="modal-body">
                <form name="frmavan" action="" method="POST">
                    <div class="form-row">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <select name="ddlLabDel" id="ddlLabDel" class="form-control ddlLabDel" multiple="multiple" style="width:100%;">
                                    <option value="1">Lab-1</option>
                                    <option value="2">Lab-2</option>
                                    <option value="3">Lab-3</option>
                                </select>
                            </div>
                            <div class="col-sm-12 col-xs-12">
                                <label>Días</label>
                                <table class="table table-striped text-center">
                                    <thead>
                                        <tr>
                                            <td><b>D</b></td>
                                            <td><b>L</b></td>
                                            <td><b>M</b></td>
                                            <td><b>M</b></td>
                                            <td><b>J</b></td>
                                            <td><b>V</b></td>
                                            <td><b>S</b></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="checkbox" id="D"></td>
                                            <td><input type="checkbox" id="L"></td>
                                            <td><input type="checkbox" id="M"></td>
                                            <td><input type="checkbox" id="M"></td>
                                            <td><input type="checkbox" id="J"></td>
                                            <td><input type="checkbox" id="V"></td>
                                            <td><input type="checkbox" id="S"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <label for="">Inicia</label>
                                <input type="time" id="txtIni" class="form-control txtIni" min="0" max="12" title="Vacío: Toma como valor 00:00">
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <label for="">Fin</label>
                                <input type="time" id="txtFin" class="form-control txtFin" min="13" max="23" title="Vacío: Toma como valor 23:59">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <div class="ln_solid"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <button type="submit" class="btn btn-danger" onclick="javascript: return confirm('¿Seguro desea eliminar las programaciones filtradas? \n Nota: Las programaciones que se encuentren dentro de los para metros de filtro pero que ya estén finalizadas no serán afectadas');">Borrar</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->