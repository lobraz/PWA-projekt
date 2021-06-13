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
                    <a class="active" href="administracija.php">Administracija</a>
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

<?php
    $query= "SELECT * FROM vijest";
    $result= mysqli_query($dbc, $query);
    while($row= mysqli_fetch_array($result))
     {
       echo'<form enctype="multipart/form-data" action="" method="POST">
      <div class="form-item">
      <label for="title">Naslov vjesti:</label>
      <div class="form-field">
      <input type="text" name="title" class="form-field-textual" value="'.$row['naslov'].'">
      </div>
      </div>
      <div class="form-item">
      <label for="about">Kratki sadržaj vijesti (do 50 znakova):</label>
      <div class="form-field"><textarea name="about" id="" cols="30" rows="10" class="form-field-textual">'.$row['sazetak'].'</textarea>
      </div>
      </div>
      <div class="form-item">
      <label for="content">Sadržaj vijesti:</label>
      <div class="form-field">
      <textarea name="content" id="" cols="30" rows="10" class="form-field-textual">'.$row['tekst'].'</textarea>
      </div>
      </div>
      <div class="form-item">
      <label for="photo">Slika:</label>
      <div class="form-field">
<input type="file" class="input-text" id="photo" value="'.$row['slika'].'" name="photo"/> <br>
<img src="'. UPLPATH . $row['slika'] . '" width=100px>
// pokraj gumba za odabir slike pojavljuje se umanjeni prikaz postojeće slike</div>
</div>
<div class="form-item">
<label for="category">Kategorija vijesti:</label>
<div class="form-field"><select name="category" id="" class="form-field-textual" value="'.$row['kategorija'].'">
<option value="sport">Sport</option><option value="kultura">Kultura</option>
</select>
</div>
</div>
<div class="form-item">
<label>Spremiti u arhivu: <div class="form-field">';
if($row['arhiva'] == 0)
 {
   echo'<input type="checkbox" name="archive" id="archive"/> Arhiviraj?';}
 else
 {echo'<input type="checkbox" name="archive" id="archive" checked/> Arhiviraj?';}
 echo'</div>
 </label>
 </div>
 </div>
 <div class="form-item">
 <input type="hidden" name="id" class="form-field-textual" value="'.$row['id'].'">
 <button type="reset" value="Poništi">Poništi</button><button type="submit" name="update" value="Prihvati"> Izmjeni</button>
 <button type="submit" name="delete" value="Izbriši"> Izbriši</button>
 </div>
 </form>';}





  

if(isset($_POST['delete'])){
    $id=$_POST['id'];
    $query = "DELETE FROM vijesti WHERE id = $id ";
    $result = mysqli_query($dbc, $query);
    }

if(isset($_POST['update'])){
    $slika = $_FILES['photo']['name'];
    $naslov = $_POST['title'];
    $kratkiSadrzaj = $_POST['about'];
    $sadrzaj = $_POST['content'];
    $kategorija = $_POST['category'];

    if(isset($_POST['archive'])){
        $archive=1;
    }

    else{
        $archive=0;
    } 

    $target_dir = 'img/'.$slika;
    move_uploaded_file($_FILES["photo"]["tmp_name"], $target_dir);

    $id=$_POST['id'];
    $query = "UPDATE vijesti SET naslov='$naslov', sazetak='$kratkiSadrzaj', tekst='$sadrzaj', slika='$slika', kategorija='$kategorija', arhiva='$archive' WHERE id=$id ";
    $result = mysqli_query($dbc, $query);
}

?>
    

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