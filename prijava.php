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
                    <a href="index.php">Home</a>
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
                    <a class="active" href="prijava.php">Login</a>
                </li>
            </ul>
        </nav>
    </header>



    <div class="page-wrapper">
    <div class="form-wrapper">
    <form enctype="multipart/form-data" action="administracija.php"  id="login" method="POST">
                <div class="form-item">
                    <span id="porukaUsernameLog" class="bojaPorukeLog"></span>
                    <label for="content">Korisničko ime:</label>
                    <br>
                    <div class="form-field">
                        <input type="text" name="username" id="username" class="form-field-textual">
                    </div>
                </div>
                <div class="form-item">
                    <span id="porukaPassLog" class="bojaPorukeLog"></span> 
                    <label for="pphoto">Lozinka: </label> 
                    <div class="form-field">
                        <input type="password" name="password" id="password" class="form-field-textual">
                        </div> 
                    </div>
                    <br><br>
                    <a class="reg" href="#" onclick = "prikaziDruguFormu();"><span>Registriraj me</span></a>
                        <br><br>
                        <div class="form-item"> 
                            <button type="submit" class="button" value="Prijava" name= "log" id="slanje">Prijava</button>
                        </div>
            </form>
    <form enctype="multipart/form-data" action="registracija.php" id="sign" method="POST">
    <div class="form-item">
        <span id="porukaIme" class="bojaPoruke"></span>
            <label for="title">Ime: </label>
                <div class="form-field">
                    <input type="text" name="ime" id="ime" class="form-field-textual">
                    </div>
                </div>
                <div class="form-item">
                    <span id="porukaPrezime" class="bojaPoruke"></span>
                    <label for="about">Prezime: </label>
                    <div class="form-field"> 
                        <input type="text" name="prezime" id="prezime" class="form-field-textual">
                    </div>
                </div>
                <div class="form-item">
                    <span id="porukaUsername" class="bojaPoruke"></span>
                    <label for="content">Korisničko ime:</label>
                    <br><span class="bojaPoruke">
                        
                    </span> 
                    <div class="form-field">
                        <input type="text" name="user" id="user" class="form-field-textual">
                    </div>
                </div>
                <div class="form-item">
                    <span id="porukaPass" class="bojaPoruke"></span> 
                    <label for="pphoto">Lozinka: </label> 
                    <div class="form-field">
                        <input type="password" name="pass" id="pass" class="form-field-textual">
                        </div> 
                    </div>
                    <div class="form-item"> 
                        <span id="porukaPassRep" class="bojaPoruke"></span> 
                        <label for="pphoto">Ponovite lozinku: </label> 
                        <div class="form-field"> 
                            <input type="password" name="passRep" id="passRep" class="form-field-textual">
                            </div> 
                        </div>
                        <br><br>
                        <a class="reg" href="#" onclick = "prikaziPrvuFormu();"><span>Logiraj se</span></a>
                        <br><br>
                        <div class="form-item"> 
                            <button type="submit" class="button" value="Prijava" name= "prijava" id="signup">Registriraj me</button>
                        </div>
    
            </form>
           
</div>
</div>
</body>
</html>