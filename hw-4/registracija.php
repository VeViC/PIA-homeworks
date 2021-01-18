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
    <form method = "post" action = "registracija.php">
        <div class = "input-group">
            <label>Ime</label>
            <input type = "text" name = "ime">
        </div>
        <div class = "input-group">
            <label>Prezime</label>
            <input type = "text" name = "prezime">
        </div>
        <div class = "input-group">
            <label>E-mail</label>
            <input type = "text" name = "email">
        </div>
        <div class = "input-group">
            <label>Korisničko ime</label>
            <input type = "text" name = "username">
        </div>
        <div class = "input-group">
            <label>Šifra</label>
            <input type = "text" name = "password">
        </div>
        <div class = "input-group">
            <button type = "submit" name = "registracija" class = "btn"> Registruj se </button>
        </div>
        <p>
            Već ste prijavljeni? <a href = "login.php"> Prijava </a>
        </p>
    </form>

</body>

</html>