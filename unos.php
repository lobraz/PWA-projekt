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
                  <a class="active" href="unos.php">Unos</a>
              </li>

              <li>
                <a href="prijava.php">Login</a>
                </li>
            </ul>
        </nav>
    </header>


  <article>
    <div class="page-wrapper">
      <div class="forma">
        <h2 style= "text-align: center;">Unos</h2>
        <br>
      <form enctype="multipart/form-data" method="POST" action="skripta.php">
          <div class="form-item">
            <span id="porukaTitle" class="bojaPoruke"></span> 
            <label for="title">Naslov vijesti</label> 
            <div class="form-field"> 
            <input type="text" name="title" id = "title" class="form-field-textual"> 
          </div> 
          </div> 
          <div class="form-item">
            <span id="porukaAbout" class="bojaPoruke"></span>
            <label for="about">Kratki sadržaj vijesti (do 50 znakova)</label> 

            <div class="form-field"> 
              <textarea name="about" id="about" cols="30" rows="10" class="form-field-textual"></textarea> 
              </div> 
            </div> 
      
            <div class="form-item"> 
              <span id="porukaContent" class="bojaPoruke"></span>
              <label for="content">Sadržaj vijesti</label> 
              <div class="form-field"> <textarea name="content" id="content" cols="30" rows="10" class="form-field-textual"></textarea>
            </div>
          </div> 
          <div class="form-item"> 
            <span id="porukaSlika" class="bojaPoruke"></span>
            <label for="photo">Slika: </label> 
            <div class="form-field"> <input type="file" accept="image/jpg,image/gif" class="input-text" id="photo" name="photo"/>
            </div>
          </div> 
          <div class="form-item">
            <span id="porukaKategorija" class="bojaPoruke"></span> 
            <label for="category">Kategorija vijesti</label>
            <div class="form-field">
              <select name="category" id="category" class="form-field-textual">
                <option value="" disabled selected>Odabir kategorije</option>
                <option value="kultura">Kultura</option> 
                <option value="sport">Sport</option> 
                </select> 
              </div>
            </div> 
      
            <div class="form-item"> 
              <label>Spremiti u arhivu: 
                <div class="form-field"> 
                  <input type="checkbox" class="checkbox" name="archive" id="archive"> 
                  </div> 
                </label> 
              </div> 
              <br>
              <div class="form-item"> 
                <button type="submit" value="Prihvati" class="button" name="submit" id="slanje">Prihvati</button> 
                <br><br>
                <button type="reset" value="Poništi" class="button" name="cancel">Poništi</button> 
              </div>
          </form>
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



  <script type="text/javascript">
  // Provjera forme prije slanja
  document.getElementById("slanje").onclick = function(event) {

    var slanjeForme = true;

    // Naslov vjesti (5-30 znakova)
    var poljeTitle = document.getElementById("title");
    var title = document.getElementById("title").value;
 
    if (title.length < 5 || title.length > 30) {
      slanjeForme = false;
      poljeTitle.style.border="1px dashed red";
      document.getElementById("porukaTitle").style.color = 'red';
      document.getElementById("porukaTitle").innerHTML="Naslov vjesti mora imati između 5 i 30 znakova!<br>";
    }
    
    else {
        poljeTitle.style.border="1px solid green";
        document.getElementById("porukaTitle").innerHTML="";
    }

    // Kratki sadržaj (10-100 znakova)
    var poljeAbout = document.getElementById("about");
    var about = document.getElementById("about").value;

    if (about.length < 10 || about.length > 100) {
      slanjeForme = false;
      poljeAbout.style.border="1px dashed red";
      document.getElementById("porukaAbout").style.color = 'red';
      document.getElementById("porukaAbout").innerHTML="Kratki sadržaj mora imati između 10 i 100 znakova!<br>";
    }

    else {
      poljeAbout.style.border="1px solid green";
      document.getElementById("porukaAbout").innerHTML="";
    }

    // Sadržaj mora biti unesen
    var poljeContent = document.getElementById("content");
    var content = document.getElementById("content").value;
   
    if (content.length == 0) {
      slanjeForme = false;
      poljeContent.style.border="1px dashed red";
      document.getElementById("porukaContent").style.color = 'red';
      document.getElementById("porukaContent").innerHTML="Sadržaj mora biti unesen!<br>";
    }

    else {
      poljeContent.style.border="1px solid green";
      document.getElementById("porukaContent").innerHTML="";
    }

    // Slika mora biti unesena
    var poljeSlika = document.getElementById("photo");
    var photo = document.getElementById("photo").value;
   
    if (photo.length == 0) {
      slanjeForme = false;
      poljeSlika.style.border="1px dashed red";
      document.getElementById("porukaSlika").style.color = 'red';
      document.getElementById("porukaSlika").innerHTML="Slika mora biti unesena!<br>";
    }

    else {
      poljeSlika.style.border="1px solid green";
      document.getElementById("porukaSlika").innerHTML="";
    }

    // Kategorija mora biti odabrana
    var poljeCategory = document.getElementById("category");
  
    if(document.getElementById("category").selectedIndex == 0) {
      slanjeForme = false;
      poljeCategory.style.border="1px dashed red";
      document.getElementById("porukaKategorija").style.color = 'red';
      document.getElementById("porukaKategorija").innerHTML="Kategorija mora biti odabrana!<br>";
    }

    else {
      poljeCategory.style.border="1px solid green";
      document.getElementById("porukaKategorija").innerHTML="";
    }

    if (slanjeForme != true) {
      event.preventDefault();
    }

  };
  </script>



</body>
