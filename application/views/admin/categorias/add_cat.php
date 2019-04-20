
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2 class="fuentetitulo">CATEGORIAS <small>NUEVO</small></h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form name="frm" action="<?php echo base_url();?>producto/Categoria/addCategoria" method="POST">
                      <div class="form-row">

                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                          <label>Nombre</label>
                          <input type="text" class="form-control col-md-7 col-xs-12" name="nombre" placeholder="Ingresar nombre" required="">
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
                            <a href="<?php echo base_url();?>productos/categorias"><button class="btn btn-dark" type="button">Cancelar</button></a>
                          </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>

        <!-- /page content -->
