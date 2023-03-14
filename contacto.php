<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <title>Contacto</title>
  <!-- Estilos css propios-->
    <link rel="stylesheet" type="text/css" href="css/Styles.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome/css/all.css">
  <!-- Fin estilos css propios-->
  <!-- Estilos bootstrap-->
  <link rel="stylesheet" href="img/open-iconic/font/css/open-iconic-bootstrap.css" >
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <!-- Fin estilos Bootstrap-->

</head>
<body>
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
          <li class="breadcrumb-item active" aria-current="page">Contacto</a></li>
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
    <div class="col-md-7">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.5933885715503!2d-76.53144518524182!3d3.4486053974899495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e30a666d2bdab17%3A0x11e8a8aaea21c7c1!2sCentro%20Comercial%20Zamoraco!5e0!3m2!1ses!2sco!4v1605120267801!5m2!1ses!2sco" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
    <div class="col-md-5">
      <H3 class="text-primary">Formulario de contacto</H3>
      <form>
        <div class="form-group">
    <label for="exampleInputEmail1"><strong>Nombres</strong></label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="true">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1"><strong>Apellidos</strong></label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="true">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1"><strong>Telefono</strong></label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="true">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1"><strong>Email</strong></label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="true">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1"><strong>Mensaje</strong></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required="true"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
    </div>
  </div>
</div>
</div>
 </div>
 <!-- fin main-->

<br>
<br>

 <!--footer-->
 <?php include 'plantillas/footer.php';?>
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
  <!--fin javascrip-->
</body>
</html>