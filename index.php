<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>dischiguiro</title>
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
  <?php include 'plantillas/navbar1.php';?>
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
  				<li class="breadcrumb-item"><a href="./index.html">Home</a></li>
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
 	<div class="container" id="container">

 	<!-- sliders-->
 	<div class="carousel slide" id="carouselControls" data-ride="carousel">
     	<div class="carousel-inner">
     		<div class="carousel-item active">
     			<img src="img/banner.jpg" class="d-block w-100 img-responsive" alt="slide1" width="100%" height="450px">
     		</div>
     	</div>
     </div>
     <!-- fin sliders-->
     <br>


 	</div>


 	<!-- container main-->
 	<div class="container">
 		<!--video-->
      <div class="row">
         <div class="col-6">
             <div class="embed-responsive embed-responsive-16by9">
                 <iframe class="embed-responsive-item" src="./Videos/Vid_1.mp4" frameborder="0" allowfullscreen></iframe>
             </div>
         </div>
         <div class="col-6">
             <div class="embed-responsive embed-responsive-16by9">
                 <iframe class="embed-responsive-item" src="./Videos/Vid_2.mp4" frameborder="0" allowfullscreen></iframe>
             </div>
         </div>
      </div>
      <br>
      <!--segunda fila-->
      <div class="row">
         <div class="col-6">
             <div class="embed-responsive embed-responsive-16by9">
                 <iframe class="embed-responsive-item" src="./Videos/Vid_3.mp4" frameborder="0" allowfullscreen></iframe>
             </div>
         </div>
         <div class="col-6">
             <div class="embed-responsive embed-responsive-16by9">
                 <iframe class="embed-responsive-item" src="./Videos/Vid_4.mp4" frameborder="0" allowfullscreen></iframe>
             </div>
         </div>
      </div>
      <!-- fin segunda fila-->
     <!--fin video-->

     <!--titulo principal-->
     <div class="titulo text-primary">
     <h1>Destacados</h1>
     </div>
 	<!--titulo principal-->


 	<!-- ofertas-->
<div class="d-flex flex-wrap">
				     	<div class="card card-hotel d-flex flex-column justify-content-between ml-2">
				     		<img src="img/producto/DESTACADOS/pro1.jpg" class="card-img-top" alt="imagen hotel">
				     		<div class="card-body">
				     		  <h5 class="card-title" data-toggle="popover" title="promociones" data-content="Consulta las promociones vigentes">PRODUCTO 1</h5>
				     		  <p class="card-text">DESCRIPCION DEL PRODUCTO</p>
				     		  <!-- <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#contacto">Añadir al carrito</button> -->
				            </div>
				            <div>
				              <button type="button" class="btn btn-primary btn-reserva" data-toggle="modal" data-target="#Pro1" ><span class="oi oi-plus"></span>Ver mas</button>
				            </div>
			            </div>
			            <div class="card card-hotel d-flex flex-column justify-content-between ml-2">
			            	<img src="img/producto/DESTACADOS/pro2.jpg" class="card-img-top" alt="imagen hotel">
			            	<div class="card-body">
			            		<h5 class="card-title" data-toggle="popover" title="promociones" data-content="Consulta las promociones vigentes">PRODUCTO 2</h5>
				     		   <p class="card-text">DESCRIPCION DEL PRODUCTO 2</p>
				     		   <!-- <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#contacto">Añadir al carrito</button> -->
				            </div>
				            <div>
				               <button type="button" class="btn btn-primary btn-reserva" data-toggle="modal" data-target="#Pro2"><span class="oi oi-plus"></span>Ver mas</button>
				            </div>
			            </div>
			            <div class="card card-hotel d-flex flex-column justify-content-between ml-2">
			            	<img src="img/producto/DESTACADOS/pro3.jpg" class="card-img-top" alt="imagen hotel">
			            	<div class="card-body">
				     			<h5 class="card-title" data-toggle="popover" title="promociones" data-content="Consulta las promociones vigentes">PRODUCTO 3</h5>
				            	<p class="card-text">DESCRIPCION DEL PRODUCTO 3</p>
				            	<!-- <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#contacto">Añadir al carrito</button> -->
				            </div>
				            <div>
				            	<button type="button" class="btn btn-primary btn-reserva" data-toggle="modal" data-target="#Pro3"><span class="oi oi-plus"></span>Ver mas</button>
				            </div>
			            </div>
			            <div class="card card-hotel d-flex flex-column justify-content-between ml-2">
			            	<img src="img/producto/DESTACADOS/pro4.jpg" class="card-img-top" alt="imagen hotel">
			            	<div class="card-body">
				     			<h5 class="card-title" data-toggle="popover" title="promociones" data-content="Consulta las promociones vigentes">PRODUCTO 4</h5>
				            	<p class="card-text">descripcion del producto 4</p>
				            	<!-- <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#contacto">Añadir al carrito</button> -->
				            </div>
				            <div>
				            	<button type="button" class="btn btn-primary btn-reserva" data-toggle="modal" data-target="#Pro4"><span class="oi oi-plus"></span>Ver mas</button>
				            </div>
			            </div>
			            <div class="card card-hotel d-flex flex-column justify-content-between ml-2">
			            	<img src="img/producto/DESTACADOS/pro5.jpg" class="card-img-top" alt="imagen hotel">
			            	<div class="card-body">
				     			<h5 class="card-title" data-toggle="popover" title="promociones" data-content="Consulta las promociones vigentes">PRODUCTO 5</h5>
				            	<p class="card-text">DESCRIPCION DEL PRODUCTO 5</p>
				            	<!-- <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#contacto" id="contactoBTN">Añadir al carrito</button> -->
				            </div>
				            <div>
				            	<button type="button" class="btn btn-primary btn-reserva" data-toggle="modal" data-target="#Pro5"><span class="oi oi-plus"></span>Ver mas</button>
				            </div>
			            </div>
			            <div class="card card-hotel d-flex flex-column justify-content-between ml-2">
			            	<img src="img/producto/DESTACADOS/pro6.jpg" class="card-img-top" alt="imagen hotel">
			            	<div class="card-body">
				     			<h5 class="card-title" data-toggle="popover" title="promociones" data-content="Consulta las promociones vigentes">PRODUCTO 6</h5>
				            	<p class="card-text">DESCRIPCION DEL PRODUCTO 6</p>
				            	<!-- <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#contacto">Añadir al carrito</button> -->
				            </div>
				            <div>
				            	<button type="button" class="btn btn-primary btn-reserva" data-toggle="modal" data-target="#Pro6"> <span class="oi oi-plus"></span>Ver mas</button>
				            </div>
			            </div>
			            <div class="card card-hotel d-flex flex-column justify-content-between ml-2">
			            	<img src="img/producto/DESTACADOS/pro7.jpg" class="card-img-top" alt="imagen hotel">
			            	<div class="card-body">
				     			<h5 class="card-title" data-toggle="popover" title="promociones" data-content="Consulta las promociones vigentes">PRODUCTO 7</h5>
				           	 	<p class="card-text">DESCRIPCION DEL PRODUCTO 7</p>
				           	 	<!-- <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#contacto">Añadir al carrito</button> -->
				           	</div>
				           	<div>
				            	<button type="button" class="btn btn-primary btn-reserva" data-toggle="modal" data-target="#Pro7"> <span class="oi oi-plus"></span>Ver mas</button>
				            </div>
			            </div>
     </div>
 	<!-- fin ofertas-->
 </div>
 <!--fin container main-->
 </div>
 <!-- fin main-->

<br>
<br>

 <!--footer-->
 <?php include 'plantillas/footer.php'; ?>
 <!-- fin footer-->

<!-- Modal Boton buscar-->
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
 <!--Fin modal Buscar-->
 <!--Modal imagen grande-->
<!-- Modal -->
<div class="modal fade" id="Pro1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Producto 1</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="img/producto/DESTACADOS/pro1.jpg" width="100%">
        <p>Descripcion del producto completa</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="Pro2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Producto 2</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="img/producto/DESTACADOS/pro2.jpg" width="100%">
        <p>Descripcion del producto completa</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="Pro3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Producto 3</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="img/producto/DESTACADOS/pro3.jpg" width="100%">
        <p>Descripcion del producto completa</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="Pro4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Producto 4</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="img/producto/DESTACADOS/pro4.jpg" width="100%">
        <p>Descripcion del producto completa</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="Pro5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Producto 5</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="img/producto/DESTACADOS/pro5.jpg" width="100%">
        <p>Descripcion del producto completa</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="Pro6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Producto 6</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="img/producto/DESTACADOS/pro6.jpg" width="100%">
        <p>Descripcion del producto completa</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="Pro7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Producto 7</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="img/producto/DESTACADOS/pro7.jpg" width="100%">
        <p>Descripcion del producto completa</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
 <!--fin modal imagen-->

  <!-- javascript-->
  <script src="js/Styles.js"></script>
  <script src="js/Buscar.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  <!--fin javascrip-->
</body>
</html>