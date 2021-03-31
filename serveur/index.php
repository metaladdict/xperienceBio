<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>xPerience !</title>
  <style>
    img, video {display: block; max-width: 100%; height: auto;}  
    h1 {margin-bottom: 5px;}
  </style>
</head>
<body>
<?php
$fld = 'sauvegarde/src/';
$files = scandir($fld, SCANDIR_SORT_DESCENDING);
array_pop($files);
array_pop($files);
array_pop($files);

$iz = str_replace(['.jpg', 'pix_'], '', $files[0]);
$ia = str_replace(['.jpg', 'pix_'], '', end($files));
$iv = filemtime('./sauvegarde/lavideo.mp4');

echo '<a href="tout.php" style="float: right;">Toutes les images</a>';
echo '<h1>Dernière vue - '.strftime('%d/%m/%Y à %H:%M:%S', $iz).'</h1>';
echo '<img src="'.$fld.$files[0].'">';

echo '<h1>Timelapse sur '.readableTime($iz-$ia).'</h1>';
echo '<em>publié il y a '.readableTime(time() - $iv).'</em>';
echo '<video src="sauvegarde/lavideo.mp4" controls></video>';

function readableTime($t)
{
  $tj = floor($t/(3600*24));
  $th = floor(($t-$tj*(3600*24))/3600);
  $tm = floor(($t-$tj*(3600*24)-$th*3600)/60);
  $ts = $t-$tj*(3600*24)-$th*3600-$tm*60;

  $txt = ($tj>0) ? $tj.'j ' : '';
  $txt.= ($th>0 && $t<10*3600*24) ? $th.'h ' : '';
  $txt.= ($tm>0 && $t<24*3600*10) ? $tm.'min. ' : '';
  $txt.= ($ts>0 && $t<36000) ? $ts.'sec. ' : '';

  return $txt;
}

?>
<br><a href="https://www.metalmonkey.eu/2021/03/27/suivi-de-la-germination-des-lentilles/" target="_blank">Comment ça marche ?</a>
</body>
</html>
