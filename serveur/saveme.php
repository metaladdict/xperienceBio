<?php
include("conf.php");

if(isset($_POST["lacle"]) && $_POST["lacle"]==$lacle)
{
  $tmpf = $_FILES["files"]["tmp_name"];
  $endf = "pix_".time().".jpg";
  echo $tmpf." => ".$endf;

  move_uploaded_file($tmpf, 'sauvegarde/src/'.$endf);

  $thb = imagecreatetruecolor(576, 324);
  $src = imagecreatefromjpeg('sauvegarde/src/'.$endf);
  imagecopyresized($thb, $src, 0, 0, 0, 0, 576, 324, 1920, 1080);
  imagejpeg($thb, 'sauvegarde/thb/'.$endf);
}


echo 'ok';


