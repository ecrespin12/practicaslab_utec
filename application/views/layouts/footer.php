<!-- footer content -->
<footer>
  <div class="pull-right">
    Desarrollado 2019 <a href=""></a>
  </div>
  <div class="clearfix"></div>
</footer>
<!-- /footer content -->
</div>
</div>



<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/template/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url(); ?>assets/template/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/template/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="<?php echo base_url(); ?>assets/template/nprogress/nprogress.js"></script>

<!-- bootstrap-datetimepicker -->
<script src="<?php echo base_url(); ?>assets/template/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

<!-- bootstrap-progressbar -->
<script src="<?php echo base_url(); ?>assets/template/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url(); ?>assets/template/iCheck/icheck.min.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="<?php echo base_url(); ?>assets/template/moment/min/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/template/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap-wysiwyg -->
<script src="<?php echo base_url(); ?>assets/template/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
<script src="<?php echo base_url(); ?>assets/template/jquery.hotkeys/jquery.hotkeys.js"></script>
<script src="<?php echo base_url(); ?>assets/template/google-code-prettify/src/prettify.js"></script>
<!-- jQuery Tags Input -->
<script src="<?php echo base_url(); ?>assets/template/jquery.tagsinput/src/jquery.tagsinput.js"></script>
<!-- Switchery -->
<script src="<?php echo base_url(); ?>assets/template/switchery/dist/switchery.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url(); ?>assets/template/select2/dist/js/select2.full.min.js"></script>
<!-- Parsley -->
<script src="<?php echo base_url(); ?>assets/template/parsleyjs/dist/parsley.min.js"></script>
<!-- Autosize -->
<script src="<?php echo base_url(); ?>assets/template/autosize/dist/autosize.min.js"></script>
<!-- jQuery autocomplete -->
<script src="<?php echo base_url(); ?>assets/template/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
<!-- starrr -->
<script src="<?php echo base_url(); ?>assets/template/starrr/dist/starrr.js"></script>


<!-- SweetAlert -->

<!-- <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script> -->

<script src="<?php echo base_url(); ?>assets/template/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/template/datatables/dataTables.bootstrap.min.js"></script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script> -->
<script src="<?php echo base_url(); ?>assets/template/sweetAlert/sweetalert.js"></script>
<!-- Custom Theme Scripts -->
<script>
  $(document).ready(function() {
    let dat = '';
    $('#tabla').DataTable({
      "language": {
        "lengthMenu": "Mostrar _MENU_ registros por pagina",
        "zeroRecords": "No se encontraron resultados en su busqueda",
        "searchPlaceholder": "Buscar registros",
        "info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
        "infoEmpty": "No existen registros",
        "infoFiltered": "(filtrado de un total de _MAX_ registros)",
        "search": "Buscar:",
        "paginate": {
          "first": "Primero",
          "last": "Último",
          "next": "Siguiente",
          "previous": "Anterior"
        },
      },
      ajax: {        
        // $.ajax({
        data: function(d){
          d.fecha = '21/04/2019';
        },
        url: "<?php echo base_url('Admin/ControlLaboratorio/getListaPrac/') ?>",
        type: 'post',
        dataType: 'json',
        success: function(json) {
          var strhtml = "";
          $.each(json, function(i, itm) {
            strhtml += "<tr><td>" + itm.lab + "</td>" + "<td>" + itm.fec + "</td>" + "<td>" + itm.ini + "</td>" +
              "<td>" + itm.fin + "</td>" + "<td>" + itm.cup + "</td><td><div class='botonesList'>" +              
              "<button type='button' class='btn btn-danger btn-sm'><span class='fa fa-times'></span></button></div></td></tr>";
              // "<button type='button' class='btn btn-info btn-sm'><span class='fa fa-edit'></span></button>" +
          });
          $("#tableLista").empty().append(strhtml);
        },
        error: function(jqxhr, status, exception) {
          alert('Exception: ' + exception + ' ' + jqxhr);
        }
        // });
      }
    });

    $(".ddlMes").val(<?php echo $mes ?>);

    $(".lstFech").click(function() {
      var d = $(".x_panel .x_content .fa-stack .fa-stack-1x", this).text();
      dat = '' + d.trim().toString() + '<?php echo '/' . date('m') . '/' . date('Y') ?>';
      var tab = $('#tabla').DataTable();
      tab.ajax.reload();
    });

    $(".rowchange").click(function() {
      var chn = parseFloat($(this).attr('chn'));
      var sel = parseFloat($(".ddlMes").val());
      var ani = parseFloat($(".txtAnio").val());
      if (chn) {
        if (sel < 12) {
          $(".ddlMes").val(sel + 1);
        } else {
          $(".txtAnio").val(ani + 1);
          $(".ddlMes").val(1);
        }
        $(".btnBuscar").trigger("click");
      } else {
        if (sel > 1) {
          $(".ddlMes").val(sel - 1);
        } else {
          $(".txtAnio").val(ani - 1);
          $(".ddlMes").val(12);
        }
        $(".btnBuscar").trigger("click");
      }
    });

    $(".ddlLab").select2({
    });

    $(".ddlLabDel").select2({
    });

    $(".txtFecha").change(function(){
      var days = ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];
      var strf = $(this).val().split("-");
      var f = new Date(strf[0], strf[1] - 1, strf[2])
      var d = f.getDay();
      $(".lblDia").text(days[d]);
    });

  });
</script>


<!-- <script src="<?php echo base_url(); ?>assets/build/js/custom.min.js"></script> -->
</body>

</html>