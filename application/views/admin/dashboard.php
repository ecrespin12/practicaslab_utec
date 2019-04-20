        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3 class="fuentetitulo">DASHBOARD</h3>
              </div>


            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                  
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <div class="row top_tiles">
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-users"></i></div>
                  <div class="count">0</div>
                  <h3>Clientes</h3>
                 <p> <a href="" class="small-box-footer">Ver Clientes <i class="fa fa-arrow-circle-right"></i></a></p>

                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-cubes"></i></div>
                  <div class="count">0</div>
                  <h3>Productos</h3>
                  <p> <a href="" class="small-box-footer">Ver Productos <i class="fa fa-arrow-circle-right"></i></a></p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-list-alt"></i></div>
                  <div class="count">0</div>
                  <h3>Inventario</h3>
                  <p> <a href="" class="small-box-footer">Ver Inventario <i class="fa fa-arrow-circle-right"></i></a></p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-pie-chart"></i></div>
                  <div class="count">0</div>
                  <h3>Ventas</h3>
                  <p> <a href="" class="small-box-footer">Ver Ventas <i class="fa fa-arrow-circle-right"></i></a></p>
                </div>
              </div>
            </div>

                      <?php 
                      $nick = "ede";
                      echo "
                      <td width='53'>
                       
                         <a href= 'javascript:abrirventana('".$nick."')'>
                            
                           <img src='images/lupa.jpg' border='0' width='23'>
                         
                         </a>
                      </td>";
                      
                      ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <script type="text/javascript">

function abrirVentana(nickj)
{ 
window.open("dashboard.php?var="+nickj,"nuevaVen tana","width=600, height=200")
}

</script>