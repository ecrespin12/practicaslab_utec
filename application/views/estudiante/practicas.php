<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
              <h2 class="fuentetitulo">PRACTICAS <small>LISTADO</small></h2>
              <div class="clearfix"></div>
          </div>
          <div class="x_content">
            
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <table class="table table-striped table-hover">
                  <tr>
                    <td><label>Edificios</label></td>
                    <td><label>Laboratorio</label></td>
                    <td><label>Fecha</label></td>
                    <td><label>Hora Inicio</label></td>
                    <td><label>Hora Fin</label></td>
                  </tr>
                  <tr>
                    <td><select name = "dropdown1">
                  <option value = "Edificios" selected>Edificios</option>
                  <option value = "FM">FM</option>
                  <option value = "BJ">BJ</option>
                  <option value = "GG">GG</option>
                </select></td>
                    <td><select name = "dropdown2">
                  <option value = "Laboratorios" selected>Laboratorios</option>
                  <option value = "Lab1">Lab1</option>
                  <option value = "Lab2">Lab2</option>
                  <option value = "Lab3">Lab3</option>
                </select></td>
                <td><input type="date" name="fecha"></td>
                <td><input type="input" name="horaI"></td>
                <td><input type="input" name="horaF"></td>
                  </tr>
                  <tr>
                    <td><button class="btn btn-primary" type="button" >Consultar</button></td>
                  </tr>
                </table>
              </div>
            </div>
            <hr>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-hover"  id="tabla" >

                  <thead>
                    <tr>
                      <th>#</th>
                      <th>LABORATORIO</th>
                      <th>EDIFICIO</th>
                      <th>RANGO/HORA</th>
                      <th>CUPO</th>
                      <th>MAPA</th>
                    </tr>
                  </thead>
              
                    <tbody>          
                        <tr>
                            <td>1</td>
                            <td>LAB1</td>
                            <td>Bj</td>
                            <td>10/04/19 10:00 - 12:00</td>
                            <td>50</td>
                            <td>---------</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>LAB2</td>
                            <td>FM</td>
                            <td>10/04/20 17:00 - 18:40</td>
                            <td>30</td>
                            <td>---------</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>LAB3</td>
                            <td>FM</td>
                            <td>10/04/21 18:40 - 20:00</td>
                            <td>50</td>
                            <td>---------</td>
                        </tr>
                 
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

<!-- /page content -->


        <!-- modal form -->
        <div class="modal fade" id="modal-edificio">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">FORMULARIO DE EDIFICIO</h4>
                </div>
                <div class="modal-body">            
                <form name="frm" action="" method="POST">
                      <div class="form-row">

                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                          <label>Codigo</label>
                          <input type="text" class="form-control col-md-7 col-xs-12" name="codigo" placeholder="Ingresar Codigo" required="">
                        </div>

                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                          <label>Nombre</label>
                          <input type="text" class="form-control col-md-7 col-xs-12" name="nombre" placeholder="Ingresar Nombre" required="">
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                          <label>Descripcion</label>
                          <input type="text" class="form-control col-md-7 col-xs-12" name="descripcion" placeholder="Ingresar Descripcion" required="">
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                          <label>Estado </label><br/>
                          <label>
                            <input type="checkbox" class="js-switch" checked name="estado" /> Activo
                          </label>
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


