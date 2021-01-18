<?php
    $ime = '';
    $prezime = '';
    $email = '';
    $username = '';
    $sifra = '';
    $errors = array();

    $con= new mysqli('localhost', 'root', '', 'registracija') or die("Unable to connect");
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
            $sql = "INSERT INTO korisnici (ime, prezime, email, korisnicko_ime, sifra) 
                        VALUES ('$ime', '$prezime', '$email', '$username', '$sifra')";
            $result = mysqli_query($con, $sql);
        }
        if($result){
            echo "Your response has been recorded. Thank you!";
        
        }else{
        
            printf("Insert failed");
        }
    }

?>