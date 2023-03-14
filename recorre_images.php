<?php
//obtener y mostrar todas las imagenes de la ruta que se asigne
function get_images($ruta){
$folder_path = $ruta;
$num_files = glob($folder_path. "*.{JPG,jpeg,gif,png,bmp}", GLOB_BRACE);
$folder = opendir($folder_path);
if($num_files > 0){
 while(false !== ($file = readdir($folder)))  {
  $file_path = $folder_path.$file;
  $extension = strtolower(pathinfo($file ,PATHINFO_EXTENSION));
  if($extension =='jpg' || $extension == 'jpeg'|| $extension =='png' || $extension == 'gif' || $extension == 'bmp') {
   ?>
   <div class="page"><img src="<?php echo $file_path; ?>" draggable="false" alt="" /></div>
    <!--<div class="carousel-item ">
      <img src="<?php //echo $file_path; ?>" class="d-block w-100" alt="..." >
    </div>-->
     <?php
  }}}
 closedir($folder);
}



?>