<?php
include 'recorre_images.php';
if (isset($_GET['id'])) {
  $var=$_GET['id'];
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Productos</title>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <!-- Estilos css propios-->
    <link rel="stylesheet" type="text/css" href="css/Styles.css">
    <link rel="stylesheet" type="text/css" href="css/StyleBook.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome/css/all.css">
  <!-- Fin estilos css propios-->
  <!-- Estilos bootstrap-->
  <link rel="stylesheet" href="img/open-iconic/font/css/open-iconic-bootstrap.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <!-- Fin estilos Bootstrap-->

</head>
<body onload="getUrlVarSub()">
 <!-- header-->
 <div class="header">
   <div class="top-header">
  <!-- Nav 1 -->
  <?php include 'plantillas/navbar1.php'; ?>
  <!-- Fin Nav 1 -->
</div>
<!-- fin top-header-->

<!-- container header-->
<div class="container">

<!-- Logo principal -->
 <div class="logo-principal">
      <div class="container">
        <img class="img-responsive" src="img/logo.jpg" alt="Chiguiro Tienda Deportiva" width="350px" height="108.2px">
      </div>
<!-- Fin Logo principal -->
<!-- Nav 2 -->
   <?php include 'plantillas/navbar2.php'?>
<!-- Fin Nav2-->
<!-- mapa del sitio-->
<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Tienda / <a href="#" onclick="all_onclick('H1')">Hombre</a></li>
        </ol>
      </nav>
<!-- fin mapa-->
 </div>

 </div>
<!-- fin container header-->

 </div>
<!-- fin header-->

 <!-- main-->
 <div class="main">

   <div class="container">
  <div class="row">
    <div class="col-3">
      <!--categorias-->

  <button type="button" class="list-group-item list-group-item-action active">
    CATEGORIA
  </button>
  <!--Latinoamerica-->
  <button type="button" class="list-group-item list-group-item-action" id="Boca">BOCA JUNIORS</button>
  <button type="button" class="list-group-item list-group-item-action" id="River">RIVER PLATE</button>
  <button type="button" class="list-group-item list-group-item-action" id="Independiente">INDEPENDIENTE</button>
  <button type="button" class="list-group-item list-group-item-action" id="Rosario">ROSARIO</button>
  <button type="button" class="list-group-item list-group-item-action" id="Racing">RACING</button>
  <button type="button" class="list-group-item list-group-item-action" id="Sanlorenzo">SAN LORENZO</button>
  <button type="button" class="list-group-item list-group-item-action" id="Saopaulo">SAO PAULO</button>
  <button type="button" class="list-group-item list-group-item-action" id="Flamengo">FLAMENGO</button>
  <button type="button" class="list-group-item list-group-item-action" id="Palmeiras">PALMEIRAS</button>
  <button type="button" class="list-group-item list-group-item-action" id="Corinthians">CORINTHIANS</button>
  <button type="button" class="list-group-item list-group-item-action" id="Colocolo">COLO COLO</button>
  <button type="button" class="list-group-item list-group-item-action" id="Penarol">PEÑAROL</button>
  <!--Fin latinoamerica-->
  <!--Norte y centro america-->
  <button type="button" class="list-group-item list-group-item-action" id="Monterrey">MONTERREY</button>
  <button type="button" class="list-group-item list-group-item-action" id="Vancouver">VANCOUVER</button>
  <button type="button" class="list-group-item list-group-item-action" id="Seatle">SEATTLE SOUNDERS</button>
  <!--Fin Norte y centro america-->
  <!--Europa-->
  <button type="button" class="list-group-item list-group-item-action" id="Liverpool">LIVERPOOL</button>
  <button type="button" class="list-group-item list-group-item-action" id="Arsenal">ARSENAL</button>
  <button type="button" class="list-group-item list-group-item-action" id="Chelsea">CHELSEA</button>
  <button type="button" class="list-group-item list-group-item-action" id="ManchesterU">MANCHESTER UNITED</button>
  <button type="button" class="list-group-item list-group-item-action" id="ManchesterC">MANCHESTER CITY</button>
  <button type="button" class="list-group-item list-group-item-action" id="CrystalP">CRYSTAL PALACE</button>
  <button type="button" class="list-group-item list-group-item-action" id="Wolverh">WOLVERHAMPTON</button>
  <button type="button" class="list-group-item list-group-item-action" id="LeedsU">LEEDS UNITED</button>
  <button type="button" class="list-group-item list-group-item-action" id="Tottem">TOTTENHAM</button>
  <button type="button" class="list-group-item list-group-item-action" id="Everton">EVERTON</button>
  <button type="button" class="list-group-item list-group-item-action" id="Barcelona">BARCELONA</button>
  <button type="button" class="list-group-item list-group-item-action" id="RealMa">REAL MADRID</button>
  <button type="button" class="list-group-item list-group-item-action" id="RealBe">REAL BETIS</button>
  <button type="button" class="list-group-item list-group-item-action" id="Atletico">ATLETICO MADRID</button>
  <button type="button" class="list-group-item list-group-item-action" id="Valencia">VALENCIA</button>
  <button type="button" class="list-group-item list-group-item-action" id="Olympique">OLYMPIQUE MARSELLA</button>
  <button type="button" class="list-group-item list-group-item-action" id="OlympiqLY">OLYMPIQUE LYONNAIS</button>
  <button type="button" class="list-group-item list-group-item-action" id="ParisSaint">PARIS SAINT-GERMAIN</button>
  <button type="button" class="list-group-item list-group-item-action" id="Juventus">JUVENTUS</button>
  <button type="button" class="list-group-item list-group-item-action" id="Napoli">NAPOLI</button>
  <button type="button" class="list-group-item list-group-item-action" id="Milann">MILAN</button>
  <button type="button" class="list-group-item list-group-item-action" id="Interr">INTER</button>
  <button type="button" class="list-group-item list-group-item-action" id="Romaa">ROMA</button>
  <button type="button" class="list-group-item list-group-item-action" id="Porto">PORTO</button>
  <button type="button" class="list-group-item list-group-item-action" id="Sporting">SPORTING</button>
  <button type="button" class="list-group-item list-group-item-action" id="Benfica">BENFICA</button>
  <button type="button" class="list-group-item list-group-item-action" id="Celtic">CELTIC</button>
  <button type="button" class="list-group-item list-group-item-action" id="Ajaxx">AJAX</button>
  <button type="button" class="list-group-item list-group-item-action" id="Feyenoord">FEYENOORD</button>
  <button type="button" class="list-group-item list-group-item-action" id="PSVEin">PSV EINDHOVEN</button>
  <button type="button" class="list-group-item list-group-item-action" id="CSKA">CSKA MOSCU</button>
  <button type="button" class="list-group-item list-group-item-action" id="Borussia">BORUSSIA DORTMUND</button>
  <button type="button" class="list-group-item list-group-item-action" id="Munich">BAYERN MUNICH</button>
  <!--Europa-->
  <!--Selecciones-->
  <button type="button" class="list-group-item list-group-item-action" id="Belgica">BELGICA</button>
  <button type="button" class="list-group-item list-group-item-action" id="Italia">ITALIA</button>
  <button type="button" class="list-group-item list-group-item-action" id="Japon">JAPON</button>
  <button type="button" class="list-group-item list-group-item-action" id="China">CHINA</button>
  <button type="button" class="list-group-item list-group-item-action" id="Brasil">BRASIL</button>
  <button type="button" class="list-group-item list-group-item-action" id="Francia">FRANCIA</button>
  <button type="button" class="list-group-item list-group-item-action" id="Mexico">MEXICO</button>
  <button type="button" class="list-group-item list-group-item-action" id="Alemania">ALEMANIA</button>
  <button type="button" class="list-group-item list-group-item-action" id="Argentina">ARGENTINA</button>
  <!--Fin Selecciones-->
  <!--Redes sociales-->
  <button type="button" class="list-group-item list-group-item-action" id="SnapC">SNAP CHAT</button>
  <button type="button" class="list-group-item list-group-item-action" id="Facebook">FACEBOOK</button>
  <button type="button" class="list-group-item list-group-item-action" id="Flickr">FLICKR</button>
  <button type="button" class="list-group-item list-group-item-action" id="Instagram">INSTAGRAM</button>
  <button type="button" class="list-group-item list-group-item-action" id="Spotify">SPOTIFY</button>
  <button type="button" class="list-group-item list-group-item-action" id="Ytube">YOUTUBE</button>
  <button type="button" class="list-group-item list-group-item-action" id="Yahoo">YAHOO</button>
  <button type="button" class="list-group-item list-group-item-action" id="Google">GOOGLE</button>
  <button type="button" class="list-group-item list-group-item-action" id="Twitter">TWITTER</button>
  <!--Fin redes sociales-->

      <!--fin categorias-->
    </div>
    <div class="col-9 container">
      <!-- productos-->
            <div class="wrapper">
  <div class="aspect">
    <div class="aspect-inner">
      <div class="flipbook" id="flipbook">
           <?php
    //LATINOAMERICA
    if ($var=='BoJ') {
       get_images('img/producto/HOMBRE/LATINOAMERICA/BOCA JUNIORS/');
      }
    if ($var=='RivP') {
       get_images('img/producto/HOMBRE/LATINOAMERICA/RIVER PLATE/');
      }
      if ($var=='Ind') {
       get_images('img/producto/HOMBRE/LATINOAMERICA/INDEPENDIENTE/');
      }
      if ($var=='Ros') {
       get_images('img/producto/HOMBRE/LATINOAMERICA/ROSARIO/');
      }
      if ($var=='Rac') {
       get_images('img/producto/HOMBRE/LATINOAMERICA/RACING/');
      }
      if ($var=='SanL') {
       get_images('img/producto/HOMBRE/LATINOAMERICA/SAN LORENZO/');
      }
      if ($var=='SaoP') {
       get_images('img/producto/HOMBRE/LATINOAMERICA/SAO PAULO/');
      }
      if ($var=='Flam') {
       get_images('img/producto/HOMBRE/LATINOAMERICA/FLAMENGO/');
      }
       if ($var=='Palm') {
       get_images('img/producto/HOMBRE/LATINOAMERICA/PALMEIRAS/');
      }
      if ($var=='Cor') {
       get_images('img/producto/HOMBRE/LATINOAMERICA/CORINTHIANS/');
      }
      if ($var=='ColC') {
       get_images('img/producto/HOMBRE/LATINOAMERICA/COLO COLO/');
      }
      if ($var=='Pen') {
       get_images('img/producto/HOMBRE/LATINOAMERICA/PENAROL/');
      }
      //FIN LATINOAMERICA
      //CNETRO Y NORTE AMERICA
      if ($var=='Mont') {
       get_images('img/producto/HOMBRE/CENTRO_NORTE_AMERICA/MONTERREY/');
      }
      if ($var=='vanc') {
       get_images('img/producto/HOMBRE/CENTRO_NORTE_AMERICA/SEATTLE SOUNDERS/');
      }
      if ($var=='SeaS') {
       get_images('img/producto/HOMBRE/LATINOAMERICA/COLO COLO/');
      }
      //FIN CENTRO Y NORTE AMERICA
      //EUROPA
      if ($var=='Live') {
       get_images('img/producto/HOMBRE/EUROPA/LIVERPOOL/');
      }
      if ($var=='Arse') {
       get_images('img/producto/HOMBRE/EUROPA/ARSENAL/');
      }
      if ($var=='Chels') {
       get_images('img/producto/HOMBRE/EUROPA/CHELSEA/');
      }
      if ($var=='ManUn') {
       get_images('img/producto/HOMBRE/EUROPA/MANCHESTER UNITED/');
      }
      if ($var=='ManCi') {
       get_images('img/producto/HOMBRE/EUROPA/MANCHESTER CITY/');
      }
      if ($var=='CrP') {
       get_images('img/producto/HOMBRE/EUROPA/CRYSTAL PALACE/');
      }
      if ($var=='Wol') {
       get_images('img/producto/HOMBRE/EUROPA/WOLVERHAMPTON/');
      }
      if ($var=='LeeU') {
       get_images('img/producto/HOMBRE/EUROPA/LEEDS UNITED/');
      }
      if ($var=='Tott') {
       get_images('img/producto/HOMBRE/EUROPA/TOTTENHAM/');
      }
      if ($var=='Ever') {
       get_images('img/producto/HOMBRE/EUROPA/EVERTON/');
      }
      if ($var=='Ever') {
       get_images('img/producto/HOMBRE/EUROPA/EVERTON/');
      }
      if ($var=='Barce') {
       get_images('img/producto/HOMBRE/EUROPA/BARCELONA/');
      }
      if ($var=='RealM') {
       get_images('img/producto/HOMBRE/EUROPA/REAL MADRID/');
      }
      if ($var=='RB') {
       get_images('img/producto/HOMBRE/EUROPA/REAL BETIS/');
      }
      if ($var=='AtleM') {
       get_images('img/producto/HOMBRE/EUROPA/ATLETICO MADRID/');
      }
      if ($var=='Vale') {
       get_images('img/producto/HOMBRE/EUROPA/VALENCIA/');
      }
      if ($var=='OLM') {
       get_images('img/producto/HOMBRE/EUROPA/OLYMPIQUE MARSELLA/');
      }
      if ($var=='OlLy') {
       get_images('img/producto/HOMBRE/EUROPA/OLYMPIQUE LYONNAIS/');
      }
      if ($var=='PaSG') {
       get_images('img/producto/HOMBRE/EUROPA/PARIS SAINT-GERMAIN/');
      }
      if ($var=='Juven') {
       get_images('img/producto/HOMBRE/EUROPA/JUVENTUS/');
      }
      if ($var=='Nap') {
       get_images('img/producto/HOMBRE/EUROPA/NAPOLI/');
      }
      if ($var=='Milan') {
       get_images('img/producto/HOMBRE/EUROPA/MILAN/');
      }
      if ($var=='Inter') {
       get_images('img/producto/HOMBRE/EUROPA/INTER/');
      }
      if ($var=='Roma') {
       get_images('img/producto/HOMBRE/EUROPA/ROMA/');
      }
      if ($var=='Por') {
       get_images('img/producto/HOMBRE/EUROPA/PORTO/');
      }
      if ($var=='Spor') {
       get_images('img/producto/HOMBRE/EUROPA/SPORTING/');
      }
      if ($var=='Benfi') {
       get_images('img/producto/HOMBRE/EUROPA/BENFICA/');
      }
      if ($var=='Celt') {
       get_images('img/producto/HOMBRE/EUROPA/CELTIC/');
      }
      if ($var=='Ajax') {
       get_images('img/producto/HOMBRE/EUROPA/AJAX/');
      }
      if ($var=='Feyeno') {
       get_images('img/producto/HOMBRE/EUROPA/FEYENOORD/');
      }
      if ($var=='PSVE') {
       get_images('img/producto/HOMBRE/EUROPA/PSV EINDHOVEN/');
      }
      if ($var=='CSKM') {
       get_images('img/producto/HOMBRE/EUROPA/CSKA MOSCU/');
      }
      if ($var=='BorD') {
       get_images('img/producto/HOMBRE/EUROPA/BORUSSIA DORTMUND/');
      }
      if ($var=='BayM') {
       get_images('img/producto/HOMBRE/EUROPA/BAYERN MUNICH/');
      }
      //FIN EUROPA
      //SELECCIONES
      if ($var=='Belg') {
       get_images('img/producto/HOMBRE/SELECCIONES/BELGICA/');
      }
      if ($var=='Franc') {
       get_images('img/producto/HOMBRE/SELECCIONES/FRANCIA/');
      }
      if ($var=='Ital') {
       get_images('img/producto/HOMBRE/SELECCIONES/ITALIA/');
      }
      if ($var=='Jap') {
       get_images('img/producto/HOMBRE/SELECCIONES/JAPON/');
      }
      if ($var=='Chin') {
       get_images('img/producto/HOMBRE/SELECCIONES/CHINA/');
      }
      if ($var=='Brasi') {
       get_images('img/producto/HOMBRE/SELECCIONES/BRASIL/');
      }
      if ($var=='Mexi') {
       get_images('img/producto/HOMBRE/SELECCIONES/MEXICO/');
      }
      if ($var=='Alem') {
       get_images('img/producto/HOMBRE/SELECCIONES/ALEMANIA/');
      }
      if ($var=='Argent') {
       get_images('img/producto/HOMBRE/SELECCIONES/ARGENTINA/');
      }

      //FIN SELECCIONES
      //REDES SOCIALES
      if ($var=='Snap') {
       get_images('img/producto/HOMBRE/REDES_SOCIALES/SNAP CHAT/');
      }
      if ($var=='Face') {
       get_images('img/producto/HOMBRE/REDES_SOCIALES/FACEBOOK/');
      }
      if ($var=='Flic') {
       get_images('img/producto/HOMBRE/REDES_SOCIALES/FLICKR/');
      }
      if ($var=='Inst') {
       get_images('img/producto/HOMBRE/REDES_SOCIALES/INSTAGRAM/');
      }
      if ($var=='Spot') {
       get_images('img/producto/HOMBRE/REDES_SOCIALES/SPOTIFY/');
      }
      if ($var=='You') {
       get_images('img/producto/HOMBRE/REDES_SOCIALES/YOUTUBE/');
      }
      if ($var=='Yah') {
       get_images('img/producto/HOMBRE/REDES_SOCIALES/YAHOO/');
      }
      if ($var=='Goo') {
       get_images('img/producto/HOMBRE/REDES_SOCIALES/GOOGLE/');
      }
      if ($var=='Twi') {
       get_images('img/producto/HOMBRE/REDES_SOCIALES/TWITTER/');
      }
      //IN REDES SOCIALES
    ?>
      </div>
    </div>
  </div>
</div>
      <!-- fin productos-->
    </div>

  </div>
</div>

 </div>
 <!-- fin main-->

<br>
<br>

 <!--footer-->
 <?php include 'plantillas/footer.php'; ?>
 <!-- fin footer-->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Buscar productos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
  </form>
      </div>
      <div class="modal-footer">
        Dischiguiro
      </div>
    </div>
  </div>
</div>
 <!--Fin modal-->

  <!-- javascript-->
  <script src="js/Styles.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/extras/jquery.min.1.7.js"></script>
<script type="text/javascript" src="js/lib/turn.js"></script>
<script type ="text/javascript" src="js/StyleBook.js" ></script>
  <!--fin javascrip-->
</body>
</html>