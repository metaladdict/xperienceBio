<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>xPerience !</title>
  <style>
    img, video {display: block; max-width: 100%; height: auto;}  
  </style>
</head>
<body>
<?php
$fld = 'sauvegarde/src/';
$files = scandir($fld, SCANDIR_SORT_DESCENDING);
echo '<a href="tout.php" style="float: right;">Toutes les images</a>';
echo '<h1>Dernière vue - '.strftime('%d/%m/%Y à %H:%M:%S', str_replace(['.jpg', 'pix_'], '', $files[0])).'</h1>';
echo '<img src="'.$fld.$files[0].'">';

echo '<h1>Timelapse - '.strftime('%d/%m/%Y à %H:%M:%S', filemtime('./sauvegarde/lavideo.mp4')).'</h1>';
echo '<video src="sauvegarde/lavideo.mp4" controls></video>';

?>
<br><a href="https://www.metalmonkey.eu/2021/03/27/suivi-de-la-germination-des-lentilles/" target="_blank">Comment ça marche ?</a>
</body>
</html>
