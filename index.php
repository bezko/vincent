<?php

$c = ['v','s','m','r','s'];
$v = ['in','en','a','i','al'];
shuffle($c);
shuffle($v);
$p = strtoupper($c[0]).$v[0].$c[1].$v[1];
$n = strtoupper($c[2]).$v[2].$c[3].$v[3].$c[4].$v[4];

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Vincent</title>
      <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">
      <style>
          .centre {
              font-family: 'Libre Baskerville', serif;
              font-size:96px;
              margin: auto;
              width: 50%;
              text-align: center;
              position: absolute;
              top: 50%;
              left: 50%;
              transform: translate(-50%, -50%);
              -ms-transform: translate(-50%, -50%); /* IE 9 */
              -webkit-transform: translate(-50%, -50%); /* Chrome, Safari, Opera */
          }
      </style>
  </head>
  <body>
  <div class="centre">
      <?= $p ?>
      <br>
      <?= $n ?>
  </div>

  </body>
</html>