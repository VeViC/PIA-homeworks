<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title> Login </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class = "header">
        <h2>Prijava</h2>
    </div>
    <form method = "POST" action = "login.php">
        <div class = "input-group">
            <label>E-mail ili korisničko ime</label>
            <input type = "text" value= "<?php echo $user_email; ?>" name = "user-email">
        </div>
        <div class = "input-group">
            <label>Šifra</label>
            <input type = "text" name = "password">
        </div>
        <div class = "input-group">
            <button type = "submit" name = "login" class = "btn"> Prijavi se </button>
        </div>
        <p>
            Niste prijavljeni? <a href = "registracija.php"> Registracija </a>
        </p>
    </form>

</body>

</html>