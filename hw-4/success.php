<?php include('server.php'); 

    if (!isset($_SESSION['username'])){
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title> Home Page </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class = "header">
        <h2>Prijava uspešna!</h2>
    </div>
    <form>
        <?php if (isset($_SESSION['success'])): ?>
            <div class = "error success">
                <h3> 
                    <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        <?php if (isset($_SESSION['username'])): ?>
            <p> Dobrodošao/la, <strong> <?php echo $_SESSION['username']; ?> </strong>!</p>            
            <p> <h3><a href= 'home-user.php'> Nastavite ka početnoj strani</h3></p>
            <p> <h3> <a href= 'login.php'> Prijava za admine </h3></p>
            <p><a href = "success.php?logout='1'" style = "color: red">Logout</a></p>
        <?php endif ?>
        </form>

</body>

</html>