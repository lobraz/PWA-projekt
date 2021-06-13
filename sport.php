<?php 
include 'connect.php';
define('UPLPATH', 'img/');
/*session_start();*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=UnifrakturMaguntia&display=swap" rel="stylesheet">  
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Vijesti</title>
</head>

<body>
    <header>
        <div>
            <h1>Vijesti</h1>
        </div>
        <hr>
        <nav class="navigacija">
            <ul>
                <li>
                    <a  href="index.php">Home</a>
                </li>

                <li>
                    <a href="kultura.php">Kultura</a>
                </li>

                <li>
                    <a class="active" href="sport.php">Sport</a>
                </li>

                <li>
                    <a href="administracija.php">Administracija</a>
                </li>

                <li>
                  <a href="unos.php">Unos</a>
              </li>

              <li>
              <a href="prijava.php">Login</a>
                </li>
            </ul>
        </nav>
    </header>

   

    <article>
<div class="page-wrapper">
<h2>Sport</h2>
    <?php
    $query = "SELECT * FROM vijest WHERE arhiva=0 AND kategorija='sport'";
    $result = mysqli_query($dbc, $query);
    $i = 0;
    while($row = mysqli_fetch_array($result)) {
        echo '<article>
        <div class="page-wrapper">
        <div class="sport_img">
        <a href="clanak.php?id='.$row['id'].'">
        <img class="a" src="' . UPLPATH . $row['slika'] . '"width = 840px
        </a>
        </div>
        <div class="media_body">
        <h4 class="title">
        <br>
        <a class="link" href="clanak.php?id='.$row['id'].'">
        "' . $row['naslov'] . '"
        </a></h4>
         </div></div>
        </article>';
    }?>
    </div>
</article>

    <footer>
        <div class="foot">
          <hr>
          <div class="ff">
            <div class="kontakt">
              <p>Kontakt: lobraz@tvz.hr</p>
            </div>
            <div class="ime">
              <p>Leonard Obraz</p>
            </div>
            <div class="napravljeno">
              <p>Napravljeno: 06/2021</p>
            </div>
          </div>
        </div>
      </footer>




</body>