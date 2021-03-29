<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All view !</title>
  <style>
  th {vertical-align: top; text-align: right; padding-right: 10px;} 
  img {max-width:100%; heihgt: auto;}
  </style>
</head>
<body>
<table>
<?php

$f = scandir('./sauvegarde/thb');

foreach($f as $v)
{
  if($v!='..' && $v!='.')
  {
    $exp = explode('.', $v);
    echo '<tr><th>'.strftime('%d/%m/%Y<br>%H:%M:%S', str_replace('pix_', '', $exp[0])).'</th><td><img src="sauvegarde/thb/'.$v.'"></td></tr>';
  }

}

?>
</table>  
</body>
</html>
