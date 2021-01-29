<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <title>Album | Tony Niu</title>
  <meta name="description" content="Tony Niu's Personal Website">
  <meta name="author" content="Tony Niu">
  <link rel="stylesheet" href="./css_en/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css_en/responsive.css">
  <link rel="stylesheet" type="text/css" href="./Computer_Modern/Serif/cmun-serif.css">
  <link rel="icon" href="./img/t-icon.png">

</head>

<body>
  <h1>Album</h1>

  <div id="album">

  <div class="album-element">
    <p>Tony's high school graduation picture</p>
    <img src="./img/Tony-in-suit.jpg" alt="Tony wear in suit">
  </div>
  <div class="album-element">
    <p>Tony's favourite anime character: Eli Ayase</p>
    <img src="./img/eli-ayase.png" alt="ELi Ayasa in Lovelive">
  </div>
  <div class="album-element">
    <p>Tony and his sister when he was 6</p>
    <img src="./img/tony-and-sister.JPG" alt="Picture of Tony and his sister">
  </div>

  </div>
  <!--end album-->
  <hr>
  <p>
    <em>Last Modified</em>: <?php
    $file = "album.php";
    if (file_exists($file)) {
      echo date("F, Y.", filemtime($file));
    }?></p>
</body>

</html>
