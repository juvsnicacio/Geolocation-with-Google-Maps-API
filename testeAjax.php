<!DOCTYPE html>
<html>
<head>

  <script src="main.js"></script>
</head>
<body>
<?php
$teste = "<script>localizarUsuario()</script>";
echo ($teste);
?>
<button onClick="localizarUsuario()">Minha Localização</button> <br>


<script>

function localizarUsuario(){
  if (window.navigator && window.navigator.geolocation) {
   var geolocation = window.navigator.geolocation;
   geolocation.getCurrentPosition(sucesso, erro);
  } else {
     alert('Geolocalização não suportada em seu navegador.')
  }
  function sucesso(posicao){
    console.log(posicao);
    var latitude = posicao.coords.latitude;
    var longitude = posicao.coords.longitude;
    //alert('Sua latitude estimada é: ' + latitude + ' e longitude: ' + longitude );
    document.write(latitude);
  }
  function erro(error){
    console.log(error)
  }
}

</script>

</body>
</html>