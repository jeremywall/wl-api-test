<?php

$url = getenv("URL")."/v1/NoaaExt.json?user=".getenv("DID")."&pass=".getenv("PASSWORD")."&apiToken=".getenv("APITOKEN");

$data = json_decode(file_get_contents($url));
?>
<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lexend+Deca&display=swap" rel="stylesheet"> 
    <style>
      * {
        font-family: 'Lexend Deca', sans-serif;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col"><?= $data["temp_f"] ?> &deg; F</div>
        <div class="col"><?= $data["temp_extra_1"] ?> &deg; F</div>
      </div>
    </div>
  </body>
</html>

