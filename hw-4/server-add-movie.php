<?php
    $naslov = '';
    $opis = '';
    $zanr = '';
    $reziser = '';
    $prod = '';
    $glumci = '';
    $god = '';
    $slika = '';
    $trajanje = '';
    
    $con= new mysqli('localhost', 'root', '', 'filmovi') or die("Nemoguce povezivanje");
    if (isset($_POST['add-movie-btn'])) {
        $naslov = mysqli_real_escape_string($con, $_POST['naslov']);
        $opis = mysqli_real_escape_string($con, $_POST['opis']);
        $zanr = mysqli_real_escape_string($con, $_POST['zanr']);
        $reziser = mysqli_real_escape_string($con, $_POST['reziser']);
        $prod = mysqli_real_escape_string($con, $_POST['prod']);
        $glumci = mysqli_real_escape_string($con, $_POST['glumci']);
        $god = mysqli_real_escape_string($con, $_POST['god']);
        $slika = mysqli_real_escape_string($con, $_POST['slika']);
        $trajanje = mysqli_real_escape_string($con, $_POST['trajanje']);

        $sql = "INSERT INTO lista (naslov, opis, zanr, reziser, prod, glumci, god, slika, trajanje) 
                        VALUES ('$naslov', '$opis', '$zanr', '$reziser', '$prod', '$glumci', '$god', '$slika', '$trajanje')";
            $result = mysqli_query($con, $sql);
            header('location: server-add-movie.php');
        }
?>