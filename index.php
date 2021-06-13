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
                    <a class="active" href="index.php">Home</a>
                </li>

                <li>
                    <a href="kultura.php">Kultura</a>
                </li>

                <li>
                    <a href="sport.php">Sport</a>
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
      <hr class="new2">
      <div class="kultura">
        <h2>KULTURA ></h2>
        <div class="clanakp">
          <?php 
          $query = "SELECT * FROM vijest WHERE arhiva=0 AND kategorija='kultura' LIMIT 3";
          $result = mysqli_query($dbc, $query);
          while($row = mysqli_fetch_array($result)) {
            echo '<div class="clanak">
            <a href="clanak.php?id='.$row['id'].'">
            <img class="a" src="' . UPLPATH . $row['slika'] . '" width = 280px>
            </a>
            <a class="link" href="clanak.php?id='.$row['id'].'">"' . $row['naslov'] . '"</a>
          </div>';
          }
          ?>
        </div>
      </div>
      <hr class="new3">
      <div class="sport">
        <h2>SPORT ></h2>
          <div class="clanaks">
          <?php 
          $query = "SELECT * FROM vijest WHERE arhiva=0 AND kategorija='sport' LIMIT 3";
          $result = mysqli_query($dbc, $query);
          while($row = mysqli_fetch_array($result)) {
            echo '<div class="clanak">
            <a href="clanak.php?id='.$row['id'].'">
            <img class="a" src="' . UPLPATH . $row['slika'] . '" width = 280px>
            </a>
            <a class="link" href="clanak.php?id='.$row['id'].'">"' . $row['naslov'] . '"</a>
          </div>';
          }
          ?>
        </div>
      </div>
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