<?php
    session_start();

    $ime = '';
    $prezime = '';
    $email = '';
    $username = '';
    $sifra = '';
    $nivo = 'user';
    $user_email = '';
    $errors = array();

    $con= new mysqli('localhost', 'root', '', 'registracija') or die("Nemoguce povezivanje");
    if (isset($_POST['registracija-btn'])) {
        $ime = mysqli_real_escape_string($con, $_POST['ime']);
        $prezime = mysqli_real_escape_string($con, $_POST['prezime']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $username = mysqli_real_escape_string($con, $_POST['username']);
        $sifra = mysqli_real_escape_string($con, $_POST['sifra']);

        if (empty($ime)){
            array_push($errors, "Potrebno je uneti ime");            
        }
        if (empty($prezime)){
            array_push($errors, "Potrebno je uneti prezime");            
        }
        if (empty($email)){
            array_push($errors, "Potrebno je uneti email");            
        }
        if (empty($username)){
            array_push($errors, "Potrebno je uneti korisničko ime");            
        }
        if (empty($sifra)){
            array_push($errors, "Potrebno je uneti šifru");            
        }
        if (count($errors) == 0) {
            $sql = "INSERT INTO korisnici (ime, prezime, email, korisnicko_ime, sifra, nivo) 
                        VALUES ('$ime', '$prezime', '$email', '$username', '$sifra', '$nivo')";
            $result = mysqli_query($con, $sql);
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "Uspešno ste prijavljeni";
            header('location: success.php');
        }
    }

    if (isset($_POST['login-btn'])) {
        $user_email = mysqli_real_escape_string($con, $_POST['user-email']);
        $sifra = mysqli_real_escape_string($con, $_POST['sifra']);

        if (empty($user_email)){
            array_push($errors, "Potrebno je uneti korisničko ime ili email");            
        }
        if (empty($sifra)){
            array_push($errors, "Potrebno je uneti sifru");
        }
        
        if (count($errors) == 0){
            $queryF = "SELECT * FROM korisnici WHERE korisnicko_ime = '$user_email' AND sifra = '$sifra'";
            $queryS = "SELECT * FROM korisnici WHERE email = '$user_email' AND sifra = '$sifra'";
            $resultF = mysqli_query($con, $queryF);
            $resultS = mysqli_query($con, $queryS);
            if (mysqli_num_rows($resultF) == 1) {
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "Uspešno ste prijavljeni";
                $row = mysqli_fetch_array($resultF);
                if ($row['nivo'] == 'admin'){
                    header('location:home-admin.php');
                }else if ($row['nivo'] == 'user'){
                    header('location:home-user.php');
                }
            }else if(mysqli_num_rows($resultS) == 1){
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "Uspešno ste prijavljeni";
                $row = mysqli_fetch_array($resultS);
                if ($row['nivo'] == 'admin'){
                    header('location:home-admin.php');
                }else if ($row['nivo'] == 'user'){
                    header('location:home-user.php');
                }
            }else {
                array_push($errors, "Pogrešno uneti podaci!");
            }
        }
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }

?>