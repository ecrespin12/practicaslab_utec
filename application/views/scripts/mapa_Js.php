<script>
 // falta el id para hacer consulta para traer los datos del laboratorio y mandarlos como parametros para el mapa
  var Latitud = "10.305385";
  var Longitud = "77.923029";
  var frameMapa ="";
  frameMapa += '<iframe src = "https://maps.google.com/maps?q='+Latitud+' ,'+Longitud+'&hl=es;z=14&amp;output=embed" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>';
  console.log(frameMapa);
  $(".mapa_content").append(frameMapa);

</script>