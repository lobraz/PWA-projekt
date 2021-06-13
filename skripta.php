<?php 
include 'connect.php';
/*session_start();*/

    if(isset($_POST['submit'])){

        $slika = $_FILES['photo']['name'];
        $naslov = $_POST['title'];
        $kratkiSadrzaj = $_POST['about'];
        $sadrzaj = $_POST['content'];
        $kategorija = $_POST['category'];
        $datum = date('d.m.Y.');

        if(isset($_POST['archive'])){ 
            $archive=1; 
        }
        else { 
            $archive=0; 
        }

        $target_dir = 'img/'.$slika;
        move_uploaded_file($_FILES["photo"]["tmp_name"], $target_dir);

        $query = "INSERT INTO vijest (datum, naslov, sazetak, tekst, slika, kategorija, arhiva)
        VALUES ('$datum', '$naslov', '$kratkiSadrzaj', '$sadrzaj', '$slika', '$kategorija', '$archive')";

        $result = mysqli_query($dbc, $query) or
        die('Error querying database.');

        header('Location: unos.php');

        mysqli_close($dbc);
    }

?>