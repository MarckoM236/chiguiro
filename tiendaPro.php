<?php
include 'recorre_images.php';
if (isset($_GET['id'])) {
  $var=$_GET['id'];
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <title>Productos</title>
  <!-- Estilos css propios-->
    <link rel="stylesheet" type="text/css" href="css/Styles.css">
    <link rel="stylesheet" type="text/css" href="css/StyleBook.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome/css/all.css">
  <!-- Fin estilos css propios-->
  <!-- Estilos bootstrap-->
  <link rel="stylesheet" href="img/open-iconic/font/css/open-iconic-bootstrap.css" >
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <!-- Fin estilos Bootstrap-->

</head>
<body onload="getUrlSub()">
 <!-- header-->
 <div class="header">
   <div class="top-header">
  <!-- Nav 1 -->

</div>
<!-- fin top-header-->
<?php include 'plantillas/navbar1.php'; ?>
<!-- Fin Nav 1 -->

<!-- container header-->
<div class="container">

<!-- Logo principal -->
 <div class="logo-principal">
      <div class="container">
        <img class="img-responsive" src="img/logo.jpg" alt="Chiguiro Tienda Deportiva" width="350px" height="108.2px">
      </div>
<!-- Fin Logo principal -->
<!-- Nav 2 -->
   <?php include 'plantillas/navbar2.php'; ?>
<!-- Fin Nav2-->
<!-- mapa del sitio-->
<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Tienda</a></li>
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
      <!-- categorias-->

  <button type="button" class="list-group-item list-group-item-action active">
    CATEGORIA
  </button>
  <!--Subcategorias hombre -->
  <div class="list-group dropdown">
   <button type="button" class="list-group-item list-group-item-action dropdown-toggle" id="latinoamerica" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">LATINOAMERICA</button>
  <div class="dropdown-menu" aria-labelledby="latinoamerica">
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('BoJ')">BOCA JUNIORS</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('RivP')">RIVER PLATE</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('Ind')">INDEPENDIENTE</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('Ros')">ROSARIO</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('Rac')">RACING</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('SanL')">SAN LORENZO</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('SaoP')">SAO PAULO</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('Flam')">FLAMENGO</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('Palm')">PALMEIRAS</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('Cor')">CORINTHIANS</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('ColC')">COLO COLO</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('Pen')">PEÑAROL</a>
  </div>
  </div>

  <div class="list-group dropdown">
  <button type="button" class="list-group-item list-group-item-action dropdown-toggle" id="NAmerica" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CENTRO Y NORTE AMERICA</button>
  <div class="dropdown-menu" aria-labelledby="NAmerica">
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('Mont')">MONTERREY</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('Vanc')">VANCOUVER</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('SeaS')">SEATTLE SOUNDERS</a>
  </div>
  </div>

  <div class="list-group dropdown">
  <button type="button" class="list-group-item list-group-item-action dropdown-toggle" id="europa" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EUROPA</button>
  <div class="dropdown-menu" aria-labelledby="europa">
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('Live')">LIVERPOOL</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('Arse')">ARSENAL</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('Chels')">CHELSEA</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('ManUn')">MANCHESTER UNITED</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('ManCi')">MANCHESTER CITY</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('CrP')">CRYSTAL PALACE</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('CrP')">WOLVERHAMPTON</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('LeeU')">LEEDS UNITED</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('Tott')">TOTTENHAM</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('Ever')">EVERTON</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('Barce')">BARCELONA</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('RealM')">REAL MADRID</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('RB')">REAL BETIS</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('AtleM')">ATLETICO MADRID</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('Vale')">VALENCIA</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('OlM')">OLYMPIQUE MARSELLA</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('OlLy')">OLYMPIQUE LYONNAIS</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('PaSG')">PARIS SAINT-GERMAIN</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('Juven')">JUVENTUS</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('Nap')">NAPOLI</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('Milan')">MILAN</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('Inter')">INTER</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('Roma')">ROMA</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('Por')">PORTO</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('Spor')">SPORTING</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('Benfi')">BENFICA</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('Celt')">CELTIC</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('Ajax')">AJAX</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('Feyeno')">FEYENOORD</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('PSVE')">PSV EINDHOVEN</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('CSKM')">CSKA MOSCU</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('BorD')">BORUSSIA DORTMUND</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('BayM')">BAYERN MUNICH</a>
  </div>
  </div>

  <div class="list-group dropdown">
  <button type="button" class="list-group-item list-group-item-action dropdown-toggle" id="selecciones" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SELECCIONES</button>
  <div class="dropdown-menu" aria-labelledby="selecciones">
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('Belg')">BELGICA</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('Ital')">ITALIA</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('Jap')">JAPON</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('Chin')">CHINA</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('Brasi')">BRASIL</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('Mexi')">MEXICO</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('Alem')">ALEMANIA</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('Argent')">ARGENTINA</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('Franc')">FRANCIA</a>
  </div>
  </div>

  <div class="list-group dropdown">
  <button type="button" class="list-group-item list-group-item-action dropdown-toggle" id="redes" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">REDES SOCIALES</button>
  <div class="dropdown-menu" aria-labelledby="redes">
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('Snap')">SNAP CHAT</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('Face')">FACEBOOK</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('Flic')">FLICKR</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('Inst')">INSTAGRAM</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('Spot')">SPOTIFY</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('You')">YOUTUBE</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('Yah')">YAHOO</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('Goo')">GOOGLE</a>
    <a class="dropdown-item" href="#" onclick="subTwo_onclick('Twi')">TWITTER</a>
  </div>
  </div>

  <button type="button" class="list-group-item list-group-item-action " id="arqueros">ARQUEROS</button>
  <button type="button" class="list-group-item list-group-item-action " id="arbitros">ARBITROS</button>
  <button type="button" class="list-group-item list-group-item-action " id="dryfit">CONJUNTOS DRY FIT</button>
  <button type="button" class="list-group-item list-group-item-action " id="conjuntos">CONJUNTOS PRESENTACION</button>
  <!--fIN Subcategorias hombre -->
  <!--Subcategorias NIÑO -->
  <button type="button" class="list-group-item list-group-item-action " id="colombia">COLOMBIA</button>
  <button type="button" class="list-group-item list-group-item-action " id="cali">CALI</button>
  <button type="button" class="list-group-item list-group-item-action " id="america">AMERICA</button>
  <button type="button" class="list-group-item list-group-item-action " id="river">RIVER</button>
  <button type="button" class="list-group-item list-group-item-action " id="flamengo">FLAMENGO</button>
  <button type="button" class="list-group-item list-group-item-action " id="liverpool">LIVERPOOL</button>
  <button type="button" class="list-group-item list-group-item-action " id="arsenal">ARSENAL</button>
  <button type="button" class="list-group-item list-group-item-action " id="chelsea">CHELSEA</button>
  <button type="button" class="list-group-item list-group-item-action " id="united">MANCHESTER UNITED
</button>
  <button type="button" class="list-group-item list-group-item-action " id="city">MANCHESTER CITY
</button>
  <button type="button" class="list-group-item list-group-item-action " id="toten">TOTTENHAM</button>
  <button type="button" class="list-group-item list-group-item-action " id="barca">BARCELONA</button>
  <button type="button" class="list-group-item list-group-item-action " id="real">REAL MADRID</button>
  <button type="button" class="list-group-item list-group-item-action " id="atletico">ATLETICO MADRID</button>
  <button type="button" class="list-group-item list-group-item-action " id="marsella">OLYMPIQUE MARSELLA</button>
  <button type="button" class="list-group-item list-group-item-action " id="paris">PARIS SAINT-GERMAIN</button>
  <button type="button" class="list-group-item list-group-item-action " id="juve">JUVENTUS</button>
  <button type="button" class="list-group-item list-group-item-action " id="milan">MILAN</button>
  <button type="button" class="list-group-item list-group-item-action " id="inter">INTER</button>
  <button type="button" class="list-group-item list-group-item-action " id="roma">ROMA</button>
  <button type="button" class="list-group-item list-group-item-action " id="benfica">BENFICA</button>
  <button type="button" class="list-group-item list-group-item-action " id="ajax">AJAX</button>
  <button type="button" class="list-group-item list-group-item-action " id="feyen">FEYENOORD</button>
  <button type="button" class="list-group-item list-group-item-action " id="psv">PSV EINDHOVEN</button>
  <button type="button" class="list-group-item list-group-item-action " id="dormunt">BORUSSIA DORTMUND</button>
  <button type="button" class="list-group-item list-group-item-action " id="brasil">BRASIL</button>
  <button type="button" class="list-group-item list-group-item-action " id="mex">MEXICO</button>
  <button type="button" class="list-group-item list-group-item-action " id="argentina">ARGENTINA</button>
  <!--FIN Subcategorias NIÑO -->
  <!-- subcategirias mujer-->
  <button type="button" class="list-group-item list-group-item-action " id="blusas">BLUSAS</button>
  <button type="button" class="list-group-item list-group-item-action " id="ck">CONJUNTOS CK</button>
  <button type="button" class="list-group-item list-group-item-action " id="licras">LICRAS</button>
  <button type="button" class="list-group-item list-group-item-action " id="shorts">SHORTS</button>
  <button type="button" class="list-group-item list-group-item-action " id="sudaderas">SUDADERAS</button>
  <button type="button" class="list-group-item list-group-item-action " id="top">TOP'S</button>
  <!--fin subcategorias mujer-->
  <!-- implementos dportivos-->
  <button type="button" class="list-group-item list-group-item-action " id="balones">BALONES</button>
  <button type="button" class="list-group-item list-group-item-action " id="banderas">BANDERAS</button>
  <button type="button" class="list-group-item list-group-item-action " id="banderines">BANDERINES</button>
  <button type="button" class="list-group-item list-group-item-action " id="canilleras">CANILLERAS</button>
  <button type="button" class="list-group-item list-group-item-action " id="capitan">CINTA CAPITAN</button>
  <button type="button" class="list-group-item list-group-item-action " id="gorras">GORRAS</button>
  <button type="button" class="list-group-item list-group-item-action " id="guantes">GUANTES FUTBOL</button>
  <button type="button" class="list-group-item list-group-item-action " id="gym">GUANTES GYM</button>
  <button type="button" class="list-group-item list-group-item-action " id="guayos">GUAYOS</button>
  <button type="button" class="list-group-item list-group-item-action " id="mediasf">MEDIAS FUTBOL</button>
  <button type="button" class="list-group-item list-group-item-action " id="mune">MUÑEQUERAS</button>
  <button type="button" class="list-group-item list-group-item-action " id="petos">PETOS</button>
  <!--fin implementos eportivos-->
  <!-- subcategorias pantalonetas-->
  <button type="button" class="list-group-item list-group-item-action " id="algodon">ALGODÓN</button>
  <button type="button" class="list-group-item list-group-item-action " id="antif">ANTIFLUIDOS</button>
  <button type="button" class="list-group-item list-group-item-action " id="cross">CROSSFIT</button>
  <button type="button" class="list-group-item list-group-item-action " id="equipos">EQUIPOS FUTBOL</button>
  <button type="button" class="list-group-item list-group-item-action " id="durazno">PIEL DURAZNO</button>
  <button type="button" class="list-group-item list-group-item-action " id="telafria">TELA FRIA</button>
  <!-- fin pantalonetas-->
  <!--subcategorias capris-->
  <button type="button" class="list-group-item list-group-item-action " id="algodonc">ALGODÓN</button>
  <button type="button" class="list-group-item list-group-item-action " id="antifluidoc">ANTIFLUIDOS</button>
  <button type="button" class="list-group-item list-group-item-action " id="tfrac">TELA FRIA</button>
  <!-- fin capris-->
  <!--subcategorias sudaderas-->
  <button type="button" class="list-group-item list-group-item-action " id="algodons">ALGODÓN</button>
  <button type="button" class="list-group-item list-group-item-action " id="antifluidos">ANTIFLUIDOS</button>
  <button type="button" class="list-group-item list-group-item-action " id="tfras">TELA FRIA</button>
  <!-- fin sudaderas-->
  <!--subcategorias ropa interior hombre-->
  <button type="button" class="list-group-item list-group-item-action " id="boxer">BOXERS</button>
  <button type="button" class="list-group-item list-group-item-action " id="medias">MEDIAS</button>
  <!-- fin ropa interior hombre-->



      <!--fin categorias-->
    </div>
    <div class="col-9 container">
      <!-- productos-->
          <div class="wrapper">
  <div class="aspect">
    <div class="aspect-inner">
      <div class="flipbook" id="flipbook">
           <?php
    //TODOS LOS PRODUCTOS CATEGORIA HOMBRE
    if ($var=='Lat') {
       get_images('img/producto/HOMBRE/LATINOAMERICA/BOCA JUNIORS/');
       get_images('img/producto/HOMBRE/LATINOAMERICA/COLO COLO/');
       get_images('img/producto/HOMBRE/LATINOAMERICA/CORINTHIANS/');
       get_images('img/producto/HOMBRE/LATINOAMERICA/FLAMENGO/');
       get_images('img/producto/HOMBRE/LATINOAMERICA/INDEPENDIENTE/');
       get_images('img/producto/HOMBRE/LATINOAMERICA/PALMEIRAS/');
       get_images('img/producto/HOMBRE/LATINOAMERICA/PENAROL/');
       get_images('img/producto/HOMBRE/LATINOAMERICA/RACING/');
       get_images('img/producto/HOMBRE/LATINOAMERICA/RIVER PLATE/');
       get_images('img/producto/HOMBRE/LATINOAMERICA/ROSARIO/');
       get_images('img/producto/HOMBRE/LATINOAMERICA/SAN LORENZO/');
       get_images('img/producto/HOMBRE/LATINOAMERICA/SAO PAULO/');
    }
    //EUROPA
    elseif ($var=='Eur') {
      get_images('img/producto/HOMBRE/EUROPA/LIVERPOOL/');
      get_images('img/producto/HOMBRE/EUROPA/ARSENAL/');
      get_images('img/producto/HOMBRE/EUROPA/BAYERN MUNICH/');
      get_images('img/producto/HOMBRE/EUROPA/CHELSEA/');
      get_images('img/producto/HOMBRE/EUROPA/MANCHESTER UNITED/');
      get_images('img/producto/HOMBRE/EUROPA/MANCHESTER CITY/');
      get_images('img/producto/HOMBRE/EUROPA/CRYSTAL PALACE/');
      get_images('img/producto/HOMBRE/EUROPA/WOLVERHAMPTON/');
      get_images('img/producto/HOMBRE/EUROPA/LEEDS UNITED/');
      get_images('img/producto/HOMBRE/EUROPA/TOTTENHAM/');
      get_images('img/producto/HOMBRE/EUROPA/EVERTON/');
      get_images('img/producto/HOMBRE/EUROPA/BARCELONA/');
      get_images('img/producto/HOMBRE/EUROPA/REAL MADRID/');
      get_images('img/producto/HOMBRE/EUROPA/REAL BETIS/');
      get_images('img/producto/HOMBRE/EUROPA/ATLETICO MADRID/');
      get_images('img/producto/HOMBRE/EUROPA/VALENCIA/');
      get_images('img/producto/HOMBRE/EUROPA/OLYMPIQUE MARSELLA/');
      get_images('img/producto/HOMBRE/EUROPA/OLYMPIQUE LYONNAIS/');
      get_images('img/producto/HOMBRE/EUROPA/PARIS SAINT-GERMAIN/');
       get_images('img/producto/HOMBRE/EUROPA/PORTO/');
       get_images('img/producto/HOMBRE/EUROPA/PSV EINDHOVEN/');
       get_images('img/producto/HOMBRE/EUROPA/REAL BETIS/');
       get_images('img/producto/HOMBRE/EUROPA/REAL MADRID/');
       get_images('img/producto/HOMBRE/EUROPA/ROMA/');
       get_images('img/producto/HOMBRE/EUROPA/SPORTING/');
       get_images('img/producto/HOMBRE/EUROPA/TOTTENHAM/');
       get_images('img/producto/HOMBRE/EUROPA/VALENCIA/');
       get_images('img/producto/HOMBRE/EUROPA/WOLVERHAMPTON/');
    }
    //NORTE AMERICA
       elseif ($var=='NortA') {
       get_images('img/producto/HOMBRE/CENTRO_NORTE_AMERICA/MONTERREY/');
       get_images('img/producto/HOMBRE/CENTRO_NORTE_AMERICA/SEATTLE SOUNDERS/');
       get_images('img/producto/HOMBRE/CENTRO_NORTE_AMERICA/VANCOUVER/');
       }
       //SELECCIONES
       elseif ($var=='Sel') {
       get_images('img/producto/HOMBRE/SELECCIONES/ALEMANIA/');
       get_images('img/producto/HOMBRE/SELECCIONES/ARGENTINA/');
       get_images('img/producto/HOMBRE/SELECCIONES/FRANCIA/');
       get_images('img/producto/HOMBRE/SELECCIONES/BELGICA/');
       get_images('img/producto/HOMBRE/SELECCIONES/BRASIL/');
       get_images('img/producto/HOMBRE/SELECCIONES/CHINA/');
       get_images('img/producto/HOMBRE/SELECCIONES/ITALIA/');
       get_images('img/producto/HOMBRE/SELECCIONES/JAPON/');
       get_images('img/producto/HOMBRE/SELECCIONES/MEXICO/');
       }
        //REDES SOCIALES
       elseif ($var=='Red') {
       get_images('img/producto/HOMBRE/REDES_SOCIALES/FACEBOOK/');
       get_images('img/producto/HOMBRE/REDES_SOCIALES/FLICKR/');
       get_images('img/producto/HOMBRE/REDES_SOCIALES/GOOGLE/');
       get_images('img/producto/HOMBRE/REDES_SOCIALES/INSTAGRAM/');
       get_images('img/producto/HOMBRE/REDES_SOCIALES/SNAP CHAT/');
       get_images('img/producto/HOMBRE/REDES_SOCIALES/SPOTIFY/');
       get_images('img/producto/HOMBRE/REDES_SOCIALES/TWITTER/');
       get_images('img/producto/HOMBRE/REDES_SOCIALES/YAHOO/');
       get_images('img/producto/HOMBRE/REDES_SOCIALES/YOUTUBE/');
       }
       //PRESENTACION
       elseif ($var=='Pre') {
       get_images('img/producto/HOMBRE/PRESENTACION/');
      }
       //ARBITROS
      elseif ($var=='Arb') {
       get_images('img/producto/HOMBRE/ARBITROS/');
      }
       //ARQUEROS
      elseif ($var=='Arq') {
       get_images('img/producto/HOMBRE/ARQUEROS/');
      }
       //CONJUNTOS DRY FIT
      elseif ($var=='Fit') {
       get_images('img/producto/HOMBRE/DRY_FIT/');
      }
      //FIN CATEGORIA HOMBRE

    //TODOS LOS PRODUCTOS CATEGORIA NIÑO
    elseif ($var=='Col') {
      get_images('img/producto/NINO/COLOMBIA/');
      }
      elseif ($var=='Cal') {
      get_images('img/producto/NINO/CALI/');
      }
      elseif ($var=='Ame') {
      get_images('img/producto/NINO/AMERICA/');
      }
      elseif ($var=='Riv') {
      get_images('img/producto/NINO/RIVER/');
      }
      elseif ($var=='Fla') {
      get_images('img/producto/NINO/FLAMENGO/');
      }
      elseif ($var=='Liv') {
      get_images('img/producto/NINO/LIVERPOOL/');
      }
      elseif ($var=='Ars') {
      get_images('img/producto/NINO/ARSENAL/');
      }
      elseif ($var=='Che') {
      get_images('img/producto/NINO/CHELSEA/');
      }
      elseif ($var=='ManU') {
      get_images('img/producto/NINO/MANCHESTER UNITED/');
      }
      elseif ($var=='ManC') {
      get_images('img/producto/NINO/MANCHESTER CITY/');
      }
      elseif ($var=='Tot') {
      get_images('img/producto/NINO/TOTTENHAM/');
      }
      elseif ($var=='Bar') {
      get_images('img/producto/NINO/BARCELONA/');
      }
      elseif ($var=='RM') {
      get_images('img/producto/NINO/REAL MADRID/');
      }
      elseif ($var=='AM') {
      get_images('img/producto/NINO/ATLETICO MADRID/');
      }
      elseif ($var=='OM') {
      get_images('img/producto/NINO/OLYMPIQUE MARSELLA/');
      }
      elseif ($var=='PSG') {
      get_images('img/producto/NINO/PARIS SAINT-GERMAIN/');
      }
      elseif ($var=='Juv') {
      get_images('img/producto/NINO/JUVENTUS/');
      }
      elseif ($var=='Mil') {
      get_images('img/producto/NINO/MILAN/');
      }
      elseif ($var=='Int') {
      get_images('img/producto/NINO/INTER/');
      }
      elseif ($var=='Rom') {
      get_images('img/producto/NINO/ROMA/');
      }
      elseif ($var=='Ben') {
      get_images('img/producto/NINO/BENFICA/');
      }
      elseif ($var=='Aja') {
      get_images('img/producto/NINO/AJAX/');
      }
       elseif ($var=='Fey') {
      get_images('img/producto/NINO/FEYENOORD/');
      }
      elseif ($var=='PSV') {
      get_images('img/producto/NINO/PSV EINDHOVEN/');
      }
      elseif ($var=='BD') {
      get_images('img/producto/NINO/BORUSSIA DORTMUND/');
      }
      elseif ($var=='Bra') {
      get_images('img/producto/NINO/BRASIL/');
      }
      elseif ($var=='Mex') {
      get_images('img/producto/NINO/MEXICO/');
      }
      elseif ($var=='Arg') {
      get_images('img/producto/NINO/ARGENTINA/');
      }
      //FIN CATEGORIA NIÑO
     //PRODUCTOS CATEGORIA MUJER
      elseif ($var=='Blu') {
      get_images('img/producto/MUJER/BLUSAS/');
      }
      elseif ($var=='CK') {
      get_images('img/producto/MUJER/CONJUNTOS CK/');
      }
      elseif ($var=='Lic') {
      get_images('img/producto/MUJER/LICRAS/');
      }
      elseif ($var=='Sho') {
      get_images('img/producto/MUJER/SHORTS/');
      }
      elseif ($var=='Sud') {
      get_images('img/producto/MUJER/SUDADERAS/');
      }
      elseif ($var=='Top') {
      get_images('img/producto/MUJER/TOPS/');
      }
     //FIN CATEGORIA MUJER
      //IMPLEMENTOS DEPORTIVOS
      elseif ($var=='Bal') {
      get_images('img/producto/IMP_DEPORTIVOS/BALONES/');
      }
      elseif ($var=='Ban') {
      get_images('img/producto/IMP_DEPORTIVOS/BANDERAS/');
      }
      elseif ($var=='Band') {
      get_images('img/producto/IMP_DEPORTIVOS/BANDERINES/');
      }
      elseif ($var=='Can') {
      get_images('img/producto/IMP_DEPORTIVOS/CANILLERAS/');
      }
      elseif ($var=='Cin') {
      get_images('img/producto/IMP_DEPORTIVOS/CINTA CAPITAN/');
      }
      elseif ($var=='Gor') {
      get_images('img/producto/IMP_DEPORTIVOS/GORRAS/');
      }
      elseif ($var=='Guf') {
      get_images('img/producto/IMP_DEPORTIVOS/GUANTES FUTBOL/');
      }
      elseif ($var=='Gug') {
      get_images('img/producto/IMP_DEPORTIVOS/GUANTES GYM/');
      }
      elseif ($var=='Gua') {
      get_images('img/producto/IMP_DEPORTIVOS/GUAYOS/');
      }
      elseif ($var=='Medf') {
      get_images('img/producto/IMP_DEPORTIVOS/MEDIAS FUTBOL/');
      }
      elseif ($var=='Mune') {
      get_images('img/producto/IMP_DEPORTIVOS/MUNEQUERAS/');
      }
      elseif ($var=='Pet') {
      get_images('img/producto/IMP_DEPORTIVOS/PETOS/');
      }
      //FIN IMPLEMENTOS DEPORTIVOS
      //PANTALONETAS
      elseif ($var=='AlgP') {
      get_images('img/producto/PANTALONETAS/ALGODON/');
      }
       elseif ($var=='AntP') {
      get_images('img/producto/PANTALONETAS/ANTIFLUIDOS/');
      }
       elseif ($var=='Cros') {
      get_images('img/producto/PANTALONETAS/CROSSFIT/');
      }
       elseif ($var=='EF') {
      get_images('img/producto/PANTALONETAS/EQUIPOS FUTBOL/');
      }
       elseif ($var=='PD') {
      get_images('img/producto/PANTALONETAS/PIEL DURAZNO/');
      }
      elseif ($var=='TFP') {
      get_images('img/producto/PANTALONETAS/TELA FRIA/');
      }
      //FIN PANTALONETAS
      //SUDADERAS
      elseif ($var=='AlgS') {
      get_images('img/producto/SUDADERAS/ALGODON/');
      }
      elseif ($var=='AntS') {
      get_images('img/producto/SUDADERAS/ANTIFLUIDOS/');
      }
      elseif ($var=='TFS') {
      get_images('img/producto/SUDADERAS/TELA FRIA/');
      }
      //FIN SUDADERAS
      //CAPRIS
      elseif ($var=='AlgC') {
      get_images('img/producto/CAPRIS/ALGODON/');
      }
      elseif ($var=='AntC') {
      get_images('img/producto/CAPRIS/ANTIFLUIDOS/');
      }
      elseif ($var=='TFC') {
      get_images('img/producto/CAPRIS/TELA FRIA/');
      }
      //FIN CAPRIS
      //ROPA INTERIOR HOMBRE
      elseif ($var=='Box') {
      get_images('img/producto/ROPA_INTERIOR_HOMBRE/BOXERS/');
      }
      elseif ($var=='MedH') {
      get_images('img/producto/ROPA_INTERIOR_HOMBRE/MEDIAS/');
      }
      //FIN ROPA INTERIOR HOMBRE
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
 <!--fin footer-->

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