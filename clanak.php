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

<section role="main">
    <?php
     $id_clanka = $_GET["id"];
     $query = "SELECT * FROM vijest WHERE id = $id_clanka";
     $result = mysqli_query($dbc, $query);
      while($row = mysqli_fetch_array($result)) {
       echo  '<article>
              <div class="page-wrapper">
             <h2 class="category"> <span>'.$row['kategorija'].'</span></h2>
             <br>
             <h1 class="title">'.$row['naslov'].'</h1>
             <br>
             <p>AUTOR:</p> 
             <p>OBJAVLJENO:  '.$row['datum'].'</p>
          <br><br>
     <section class="slika">
     <img src="' . UPLPATH . $row['slika'] . '" width = 870px> 
     </section>
     <br><br>
        <section class="about"> 
            <p>  <i>'.$row['sazetak'].'</i></p>
        </section>
        <br>
        <section class="sadrzaj">
          <p>'.$row['tekst'].' </p>
        </section>
        </div>
        </article>';}
        ?>
    </section>

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