<?php
    $con= new mysqli('localhost', 'root', '', 'filmovi') or die("Nemoguce povezivanje");
?>
<!DOCTYPE html>
<html>
<head>
<link rel='stylesheet' type="text/css" href='home.css'>
<div class="topnav">
    <a class="active" href="home-user.php">Home</a>
    <form action="home-user.php" method="POST" id='searchForm'>
        <input type="text" name="search" id="searchBar" placeholder="Search..." maxlength="25" autocomplete="off"/><input type="submit" id="searchBtn" value="Go!"/>
    </form>
    <a class="leave" href="login.php">Logout</a>
</div>
</head>
<body>
    <?php
        if(!isset($_POST['search'])){
            echo "";
        }else if($_POST['search'] !== ''){
            $search = mysqli_real_escape_string($con, $_POST['search']);
            $query = "SELECT * FROM lista WHERE naslov LIKE '%$search%' ";
            $results = mysqli_query($con, $query);
            while($row = mysqli_fetch_array($results)){
                $id = $row['id'];
                $naslov = $row['naslov'];
                $opis = $row['opis'];
                echo '<h2><a href="' . $id . '.php">'  . $naslov . '</a></h2><h3>' . $opis . '</h3><br />';
            }
        }
    ?>
</body>
</html>