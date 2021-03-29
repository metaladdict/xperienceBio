<?php
include("conf.php");

if(isset($_POST["lacle"]) && $_POST["lacle"]==$lacle)
{
  $endf = './sauvegarde/lavideo.mp4';
  if(!file_exists($endf) || $_FILES["files"]["size"]>filesize($endf))
  {
    move_uploaded_file($_FILES["files"]["tmp_name"], $endf);
  }
}


echo 'ok';


