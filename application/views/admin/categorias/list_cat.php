<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
              <h2 class="fuentetitulo">CATEGORIAS <small>LISTADO</small></h2>
              <div class="clearfix"></div>
          </div>
          <div class="x_content">
            
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <a href="<?php echo base_url();?>productos/categorias/registrar" class="btn btn-primary "><span class="fa fa-plus"> Agregar Catetoria</span></a>
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
                      <th>Nombre</th>
                      <th>Descripcion</th>
                      <th><div class="botonesList">Acciones</div></th>
                    </tr>
                  </thead>
              
                    <tbody>   
                    <?php if(!empty($listadoCategorias)):?>
                    <?php foreach($listadoCategorias as $categoria):?>
                        <tr id="<?php echo $categoria->categoriaID;?>">
                              <td><?php echo $categoria->categoriaID;?></td>
                              <td><?php echo $categoria->cat_nombre;?></td>
                              <td><?php echo $categoria->cat_descripcion;?></td>
                              <td>
                              <div class="botonesList">
                                  <!-- <button type="button" class="btn btn-sm btn-info btn-view" data-toggle="modal" data-target="#modal-categoria" value="<?php echo $categoria->categoriaID;?>">
                                        <span class="fa fa-eye"></span>
                                  </button> -->
                            
                                <a href="<?php echo base_url()?>productos/categorias/editar/<?php echo $categoria->categoriaID; ?>" class="btn  btn-sm btn-warning"> <span class="fa fa-pencil"></span> </a>
                                <a href="<?php echo base_url()?>productos/categorias/eliminar/<?php echo $categoria->categoriaID; ?>" class="btn btn-sm btn-danger alert-delete"> <span class="fa fa-remove"></span> </a>
                             
                              </div>
              
                              </td>
                        </tr>
                        <?php endforeach;?>
                    <?php endif;?>
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


