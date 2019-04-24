<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
              <h2 class="fuentetitulo">ENCARGADOS <small>LISTADO</small></h2>
              <div class="clearfix"></div>
          </div>
          <div class="x_content">
            
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
               
                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modal-edificio" ><span class="fa fa-plus"></span> Agregar Encargado</button> 
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
                      <th>NOMBRE</th>
                      <th>APELLIDO</th>
                      <th>CORREO</th>
                      <th>DUI</th>
                      <th>TELEFONO</th>
                      <th>CELULAR</th>
                      <th>LABORATORIO</th>
                      <th><div class="botonesList">ACCIONES</div></th>
                    </tr>
                  </thead>
              
                    <tbody>          
                        <tr>
                            <td>1</td>
                            <td>Jorge Alberto</td>
                            <td>Acevedo</td>
                            <td>jorge.acevedo@mail.utec.edu.sv</td>
                            <td>03445125-9</td>
                            <td>2250-4444</td>
                            <td>7512-4589</td>
                            <td>Lab. 2</td>
                            <td>
                            <div class="botonesList">
                  
                              <button class="btn btn-sm btn-warning" type="button" data-toggle="modal" data-target="#modal-edificio" ><span class="fa fa-pencil"></span></button> 
                              <button class="btn btn-sm btn-danger" type="button"><span class="fa fa-remove"></span></button> 
                            </div>              
                            </td>
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
                    <h4 class="modal-title">FORMULARIO DE ENCARGADO</h4>
                </div>
                <div class="modal-body">            
                <form name="frm" action="" method="POST">
                      <div class="form-row">
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                          <label>NOMBRE</label>
                          <input type="text" class="form-control col-md-7 col-xs-12" name="codigo" placeholder="Ingresar Nombre" required="">
                        </div>

                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                          <label>APELLIDOS</label>
                          <input type="text" class="form-control col-md-7 col-xs-12" name="nombre" placeholder="Ingresar Apellidos" required="">
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                          <label>CORREO</label>
                          <input type="text" class="form-control col-md-7 col-xs-12" name="descripcion" placeholder="Ingresar Correo" required="">
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                          <label>DUI</label>
                          <input type="text" class="form-control col-md-7 col-xs-12" name="descripcion" placeholder="Ingresar DUI" required="">
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                          <label>TELEFONO</label>
                          <input type="text" class="form-control col-md-7 col-xs-12" name="descripcion" placeholder="Ingresar Telefono" required="">
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                          <label>CELULAR</label>
                          <input type="text" class="form-control col-md-7 col-xs-12" name="descripcion" placeholder="Ingresar Celular" required="">
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                          <label>LABORATORIO</label>
                          <input type="text" class="form-control col-md-7 col-xs-12" name="descripcion" placeholder="Ingresar Laboratorio" required="">
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


