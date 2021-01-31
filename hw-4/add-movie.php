<?php
    include('server-add-movie.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title> Add a movie </title>
    <link rel="stylesheet" type="text/css" href="home.css">
    <div class="topnav">
    <a class="active" href="home-admin.php">Home</a>
    
    <a class="leave" href="login.php">Logout</a>
</div>
</head>
<body>
    <div class = "header">
        <h2 class="naslov">Dodaj Film</h2>
    </div>
    <form class="add-form" method = "POST" action = "add-movie.php">
        <div class = "input-group">
            <label>Naslov</label>
            <input type = "text" value= "" name = "naslov">
        </div>
        <div class = "input-group">
            <label>Opis</label>
            <input type = "text" value= "" name = "opis">
        </div>
        <div class = "input-group">
            <label>Žanr</label>
            <input type = "text" value= "" name = "zanr">
        </div>
        <div class = "input-group">
            <label>Scenarista</label>
            <input type = "text" value= "" name = "scenarista">
        </div>
        <div class = "input-group">
            <label>Režiser</label>
            <input type = "text" value= "" name = "reziser">
        </div>
        <div class = "input-group">
            <label>Producentska kuća</label>
            <input type = "text" value= "" name = "prod">
        </div>
        <div class = "input-group">
            <label>Glumci</label>
            <input type = "text" value= "" name = "glumci">
        </div>
        <div class = "input-group">
            <label>Godina Izdanja</label>
            <input type = "text" value= "" name = "god">
        </div>
        <div class = "input-group">
            <label>Trajanje</label>
            <input type = "text" value= "" name = "trajanje">
        </div>
        <div>
            <form>
                <label for="img">Izaberi sliku:</label>
                <input type="file" id="img" name="slika" accept="image/*">
            </form>
        </div>
        
        <div class = "input-group">
            <button type = "submit" name = "add-movie-btn" class = "btn">Dodaj film </button>
        </div>
    </form>

</body>

</html>