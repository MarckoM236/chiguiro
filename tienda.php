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
<body onload="getUrlVars()">
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
      <!--categorias-->

  <button type="button" class="list-group-item list-group-item-action active">
    CATEGORIA
  </button>
  <div class="list-group dropdown">
  <button type="button" class="list-group-item list-group-item-action dropdown-toggle" id="hombre" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">HOMBRE</button>
  <div class="dropdown-menu" aria-labelledby="hombre">
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('Lat')">LATINOAMERICA</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('NortA')">CENTRO Y NORTE AMERICA</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('Eur')">EUROPA</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('Sel')">SELECCIONES</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('Red')">REDES SOCIALES</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('Arq')">ARQUEROS</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('Arb')">ARBITROS</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('Fit')">CONJUNTOS DRY FIT</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('Pre')">CONJUNTOS PRESENTACION</a>
  </div>
  </div>

  <div class="list-group dropdown">
  <button type="button" class="list-group-item list-group-item-action dropdown-toggle" id="nino" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">NIÑO</button>
  <div class="dropdown-menu" aria-labelledby="nino">
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('Col')">COLOMBIA</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('Cal')">CALI</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('Ame')">AMERICA</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('Riv')">RIVER</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('Fla')">FLAMENGO</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('Liv')">LIVERPOOL</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('Ars')">ARSENAL</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('Che')">CHELSEA</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('ManU')">MANCHESTER UNITED</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('ManC')">MANCHESTER CITY</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('Tot')">TOTTENHAM</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('Bar')">BARCELONA</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('RM')">REAL MADRID</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('AM')">ATLETICO MADRID</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('OM')">OLYMPIQUE MARSELLA</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('PSG')">PARIS SAINT-GERMAIN</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('Juv')">JUVENTUS</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('Mil')">MILAN</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('Int')">INTER</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('Rom')">ROMA</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('Ben')">BENFICA</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('Aja')">AJAX</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('Fey')">FEYENOORD</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('PSV')">PSV EINDHOVEN</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('BD')">BORUSSIA DORTMUND</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('Bra')">BRASIL</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('Mex')">MEXICO</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('Arg')">ARGENTINA</a>
  </div>
  </div>

  <div class="list-group dropdown">
  <button type="button" class="list-group-item list-group-item-action dropdown-toggle" id="mujer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">MUJER</button>
  <div class="dropdown-menu" aria-labelledby="mujer">
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('Blu')">BLUSAS</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('CK')">CONJUNTOS CK</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('Lic')">LICRAS</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('Sho')">SHORTS</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('Sud')">SUDADERAS</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('Top')">TOP'S</a>
  </div>
  </div>

  <button type="button" class="list-group-item list-group-item-action " id="colombia">COLOMBIA</button>
  <button type="button" class="list-group-item list-group-item-action" id="cali">DEPORTIVO CALI</button>
  <button type="button" class="list-group-item list-group-item-action" id="america">AMERICA DE CALI</button>

  <div class="list-group dropdown">
  <button type="button" class="list-group-item list-group-item-action dropdown-toggle" id="impdep" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">IMPLEMENTOS DEPORTIVOS</button>
  <div class="dropdown-menu" aria-labelledby="impdep">
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('Bal')">BALONES</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('Ban')">BANDERAS</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('Band')">BANDERINES</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('Can')">CANILLERAS</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('Cin')">CINTA CAPITAN</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('Gor')">GORRAS</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('Guf')">GUANTES FUTBOL</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('Gug')">GUANTES GYM</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('Gua')">GUAYOS</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('Medf')">MEDIAS FUTBOL</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('Mune')">MUÑEQUERAS</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('Pet')">PETOS</a>
  </div>
 </div>

 <div class="list-group dropdown">
  <button type="button" class="list-group-item list-group-item-action dropdown-toggle" id="pantalonetas" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PANTALONETAS</button>
  <div class="dropdown-menu" aria-labelledby="pantalonetas">
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('AlgP')">ALGODÓN</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('AntP')">ANTIFLUIDOS</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('Cros')">CROSSFIT</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('EF')">EQUIPOS FUTBOL</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('PD')">PIEL DURAZNO</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('TFP')">TELA FRIA</a>
  </div>
  </div>

  <div class="list-group dropdown">
  <button type="button" class="list-group-item list-group-item-action dropdown-toggle" id="capris" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CAPRIS</button>
  <div class="dropdown-menu" aria-labelledby="capris">
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('AlgC')">ALGODÓN</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('AntC')">ANTIFLUIDOS</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('TFC')">TELA FRIA</a>
  </div>
  </div>

  <div class="list-group dropdown">
  <button type="button" class="list-group-item list-group-item-action dropdown-toggle" id="sudaderas" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SUDADERAS</button>
  <div class="dropdown-menu" aria-labelledby="sudaderas">
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('AlgS')">ALGODÓN</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('AntS')">ANTIFLUIDOS</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('TFS')">TELA FRIA</a>
  </div>
  </div>

  <div class="list-group dropdown">
  <button type="button" class="list-group-item list-group-item-action dropdown-toggle" id="rih" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 13px">ROPA INTERIOR HOMBRE</button>
  <div class="dropdown-menu" aria-labelledby="rih">
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('Box')">BOXERS</a>
    <a class="dropdown-item" href="#" onclick="subcategorias_onclick('MedH')">MEDIAS</a>
  </div>
  </div>

  <button type="button" class="list-group-item list-group-item-action" id="ciclismo">CICLISMO</button>
  <button type="button" class="list-group-item list-group-item-action" id="jersey">JERSEY FOX</button>
  <button type="button" class="list-group-item list-group-item-action" id="ctf">CONJUNTOS TELA FRIA</button>
  <button type="button" class="list-group-item list-group-item-action" id="cr">CHAQUETAS ROMPEVIENTOS</button>
  <button type="button" class="list-group-item list-group-item-action" id="camibusos">CAMIBUSOS</button>
  <button type="button" class="list-group-item list-group-item-action" id="calentadores">CALENTADORES</button>
  <button type="button" class="list-group-item list-group-item-action" id="cdf">CAMISETAS DRY FIT</button>
  <button type="button" class="list-group-item list-group-item-action" id="chaquetas">CHAQUETAS</button>

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
    if ($var=='H1') {
      //lATINOAMERICA
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
      //CENTRO Y NORTE AMERICA
       get_images('img/producto/HOMBRE/CENTRO_NORTE_AMERICA/MONTERREY/');
       get_images('img/producto/HOMBRE/CENTRO_NORTE_AMERICA/SEATTLE SOUNDERS/');
       get_images('img/producto/HOMBRE/CENTRO_NORTE_AMERICA/VANCOUVER/');
       //EUROPA
       get_images('img/producto/HOMBRE/EUROPA/AJAX/');
       get_images('img/producto/HOMBRE/EUROPA/ARSENAL/');
       get_images('img/producto/HOMBRE/EUROPA/ATLETICO MADRID/');
       get_images('img/producto/HOMBRE/EUROPA/BARCELONA/');
       get_images('img/producto/HOMBRE/EUROPA/BAYERN MUNICH/');
       get_images('img/producto/HOMBRE/EUROPA/BENFICA/');
       get_images('img/producto/HOMBRE/EUROPA/BORUSSIA DORTMUND/');
       get_images('img/producto/HOMBRE/EUROPA/CELTIC/');
       get_images('img/producto/HOMBRE/EUROPA/CHELSEA/');
       get_images('img/producto/HOMBRE/EUROPA/CRYSTAL PALACE/');
       get_images('img/producto/HOMBRE/EUROPA/CSKA MOSCU/');
       get_images('img/producto/HOMBRE/EUROPA/EVERTON/');
       get_images('img/producto/HOMBRE/EUROPA/FEYENOORD/');
       get_images('img/producto/HOMBRE/EUROPA/INTER/');
       get_images('img/producto/HOMBRE/EUROPA/JUVENTUS/');
       get_images('img/producto/HOMBRE/EUROPA/LEEDS UNITED/');
       get_images('img/producto/HOMBRE/EUROPA/LIVERPOOL/');
       get_images('img/producto/HOMBRE/EUROPA/MANCHESTER CITY/');
       get_images('img/producto/HOMBRE/EUROPA/MANCHESTER UNITED/');
       get_images('img/producto/HOMBRE/EUROPA/MILAN/');
       get_images('img/producto/HOMBRE/EUROPA/NAPOLI/');
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
       //SELECCIONES
       get_images('img/producto/HOMBRE/SELECCIONES/ALEMANIA/');
       get_images('img/producto/HOMBRE/SELECCIONES/ARGENTINA/');
       get_images('img/producto/HOMBRE/SELECCIONES/FRANCIA/');
       get_images('img/producto/HOMBRE/SELECCIONES/BELGICA/');
       get_images('img/producto/HOMBRE/SELECCIONES/BRASIL/');
       get_images('img/producto/HOMBRE/SELECCIONES/CHINA/');
       get_images('img/producto/HOMBRE/SELECCIONES/ITALIA/');
       get_images('img/producto/HOMBRE/SELECCIONES/JAPON/');
       get_images('img/producto/HOMBRE/SELECCIONES/MEXICO/');
       //REDES SOCIALES
       get_images('img/producto/HOMBRE/REDES_SOCIALES/FACEBOOK/');
       get_images('img/producto/HOMBRE/REDES_SOCIALES/FLICKR/');
       get_images('img/producto/HOMBRE/REDES_SOCIALES/GOOGLE/');
       get_images('img/producto/HOMBRE/REDES_SOCIALES/INSTAGRAM/');
       get_images('img/producto/HOMBRE/REDES_SOCIALES/SNAP CHAT/');
       get_images('img/producto/HOMBRE/REDES_SOCIALES/SPOTIFY/');
       get_images('img/producto/HOMBRE/REDES_SOCIALES/TWITTER/');
       get_images('img/producto/HOMBRE/REDES_SOCIALES/YAHOO/');
       get_images('img/producto/HOMBRE/REDES_SOCIALES/YOUTUBE/');
       //PRESENTACION
       get_images('img/producto/HOMBRE/PRESENTACION/');
       //ARBITROS
       get_images('img/producto/HOMBRE/ARBITROS/');
       //ARQUEROS
       get_images('img/producto/HOMBRE/ARQUEROS/');
       //CONJUNTOS DRY FIT
       get_images('img/producto/HOMBRE/DRY_FIT/');
      }
    //TODOS LOS PRODUCTOS CATEGORIA MUJER
    elseif ($var=='M1') {
      get_images('img/producto/MUJER/BLUSAS/');
      get_images('img/producto/MUJER/CONJUNTOS CK/');
      get_images('img/producto/MUJER/LICRAS/');
      get_images('img/producto/MUJER/SHORTS/');
      get_images('img/producto/MUJER/SUDADERAS/');
      get_images('img/producto/MUJER/TOPS/');
    }
    //TODOS LOS PRODUCTOS CATEGORIA NIÑO
    elseif ($var=='N1') {
      get_images('img/producto/NINO/AJAX/');
      get_images('img/producto/NINO/AMERICA/');
      get_images('img/producto/NINO/ARGENTINA/');
      get_images('img/producto/NINO/ARSENAL/');
      get_images('img/producto/NINO/ATLETICO MADRID/');
      get_images('img/producto/NINO/BARCELONA/');
      get_images('img/producto/NINO/BENFICA/');
      get_images('img/producto/NINO/BORUSSIA DORTMUND/');
      get_images('img/producto/NINO/BRASIL/');
      get_images('img/producto/NINO/CALI/');
      get_images('img/producto/NINO/CHELSEA/');
      get_images('img/producto/NINO/COLOMBIA/');
      get_images('img/producto/NINO/FEYENOORD/');
      get_images('img/producto/NINO/FLAMENGO/');
      get_images('img/producto/NINO/INTER/');
      get_images('img/producto/NINO/JUVENTUS/');
      get_images('img/producto/NINO/LIVERPOOL/');
      get_images('img/producto/NINO/MANCHESTER CITY/');
      get_images('img/producto/NINO/MANCHESTER UNITED/');
      get_images('img/producto/NINO/MEXICO/');
      get_images('img/producto/NINO/MILAN/');
      get_images('img/producto/NINO/OLYMPIQUE MARSELLA/');
      get_images('img/producto/NINO/PARIS SAINT-GERMAIN/');
      get_images('img/producto/NINO/PSV EINDHOVEN/');
      get_images('img/producto/NINO/REAL MADRID/');
      get_images('img/producto/NINO/RIVER/');
      get_images('img/producto/NINO/ROMA/');
      get_images('img/producto/NINO/TOTTENHAM/');
    }
    //TODOS LOS PRODUCTOS CATEGORIA COLOMBIA
    elseif ($var=='CO1') {
      get_images('img/producto/COLOMBIA/');
    }
     //TODOS LOS PRODUCTOS CATEGORIA DEPORTIVO CALI
    elseif ($var=='DP1') {
      get_images('img/producto/CALI/');
    }
     //TODOS LOS PRODUCTOS CATEGORIA AMERICA DE CALI
    elseif ($var=='AM1') {
      get_images('img/producto/AMERICA/');
    }
     //TODOS LOS PRODUCTOS CATEGORIA IMPLEMENTOS DEPORTIVOS
    elseif ($var=='IP1') {
      get_images('img/producto/IMP_DEPORTIVOS/BALONES/');
      get_images('img/producto/IMP_DEPORTIVOS/BANDERAS/');
      get_images('img/producto/IMP_DEPORTIVOS/BANDERINES/');
      get_images('img/producto/IMP_DEPORTIVOS/CANILLERAS/');
      get_images('img/producto/IMP_DEPORTIVOS/CINTA CAPITAN/');
      get_images('img/producto/IMP_DEPORTIVOS/GORRAS/');
      get_images('img/producto/IMP_DEPORTIVOS/GUANTES FUTBOL/');
      get_images('img/producto/IMP_DEPORTIVOS/GUANTES GYM/');
      get_images('img/producto/IMP_DEPORTIVOS/GUAYOS/');
      get_images('img/producto/IMP_DEPORTIVOS/MEDIAS FUTBOL/');
      get_images('img/producto/IMP_DEPORTIVOS/MUNEQUERAS/');
      get_images('img/producto/IMP_DEPORTIVOS/PETOS/');
    }
     //TODOS LOS PRODUCTOS CATEGORIA PANTALONETAS
    elseif ($var=='P1') {
      get_images('img/producto/PANTALONETAS/ALGODON/');
      get_images('img/producto/PANTALONETAS/ANTIFLUIDOS/');
      get_images('img/producto/PANTALONETAS/CROSSFIT/');
      get_images('img/producto/PANTALONETAS/EQUIPOS FUTBOL/');
      get_images('img/producto/PANTALONETAS/PIEL DURAZNO/');
      get_images('img/producto/PANTALONETAS/TELA FRIA/');
    }
    //TODOS LOS PRODUCTOS CATEGORIA CAPRIS
    elseif ($var=='C1') {
      get_images('img/producto/CAPRIS/ALGODON/');
      get_images('img/producto/CAPRIS/ANTIFLUIDOS/');
      get_images('img/producto/CAPRIS/TELA FRIA/');
    }
    //TODOS LOS PRODUCTOS CATEGORIA SUDADERAS
    elseif ($var=='S1') {
      get_images('img/producto/SUDADERAS/ALGODON/');
      get_images('img/producto/SUDADERAS/ANTIFLUIDOS/');
      get_images('img/producto/SUDADERAS/TELA FRIA/');
    }
    //TODOS LOS PRODUCTOS CATEGORIA ROPA INTERIOS DE HOMBRE
    elseif ($var=='IH1') {
      get_images('img/producto/ROPA_INTERIOR_HOMBRE/BOXERS/');
     get_images('img/producto/ROPA_INTERIOR_HOMBRE/MEDIAS/');
    }
    //TODOS LOS PRODUCTOS CATEGORIA CICLISMO
    elseif ($var=='CL1') {
      get_images('img/producto/CICLISMO/');
    }
    //TODOS LOS PRODUCTOS CATEGORIA JERSEY FOX
    elseif ($var=='JF1') {
      get_images('img/producto/JERSEY_FOX/');
    }
    //TODOS LOS PRODUCTOS CATEGORIA CONJUNTOS DE TELA FRIA
    elseif ($var=='TF1') {
      get_images('img/producto/CONJUNTOS_TELA_FRIA/');
    }
    //TODOS LOS PRODUCTOS CATEGORIA CHAQUETAS ROMPEVIENTOS
    elseif ($var=='CR1') {
      get_images('img/producto/CHAQUETAS_ROMPEVIENTOS/');
    }
    //TODOS LOS PRODUCTOS CATEGORIA CAMIBUSOS
    elseif ($var=='CM1') {
      get_images('img/producto/CAMIBUSOS/');
    }
    //TODOS LOS PRODUCTOS CATEGORIA CALENTADORES
    elseif ($var=='CLE1') {
      get_images('img/producto/CALENTADORES/');
    }
    //TODOS LOS PRODUCTOS CATEGORIA CAMISETAS DRY FIT
    elseif ($var=='CDF1') {
      get_images('img/producto/CAMISETAS_DRY_FIT/');
    }
    //TODOS LOS PRODUCTOS CATEGORIA CHAQUETAS
    elseif ($var=='CH1') {
      get_images('img/producto/CHAQUETAS/');
    }

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