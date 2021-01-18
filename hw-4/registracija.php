<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title> Registration </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class = "header">
        <h2>Registracija</h2>
    </div>
    <form method = "POST" action = "registracija.php">
        <?php include('errors.php'); ?>
        <div class = "input-group">
            <label>Ime</label>
            <input type = "text" value= "<?php echo $ime; ?>" name = "ime">
        </div>
        <div class = "input-group">
            <label>Prezime</label>
            <input type = "text" value= "<?php echo $prezime; ?>" name = "prezime">
        </div>
        <div class = "input-group">
            <label>E-mail</label>
            <input type = "email" value= "<?php echo $email; ?>" name = "email">
        </div>
        <div class = "input-group">
            <label>Korisničko ime</label>
            <input type = "username" value= "<?php echo $username; ?>" name = "username">
        </div>
        <div class = "input-group">
            <label>Šifra</label>
            <input type = "password" name = "sifra">
        </div>
        <div class = "input-group">
            <button type = "submit" name = "registracija-btn" class = "btn"> Registruj se </button>
        </div>
        <p>
            Već ste prijavljeni? <a href = "login.php"> Prijava </a>
        </p>
    </form>

</body>

</html>