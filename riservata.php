<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css"href="stile_ris.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riservata</title>
</head>
<body>
<?php
    if(isset($_SESSION['logIn']) || !empty($_SESSION['logIn']) ) {
?>
    <p><h1>Welcome <?php echo $_SESSION['username']; ?></h1></p>

    <a href="index.php">Vai alla home del sito</a><br>
    <a href="logout.php">Logout</a>
<?php   
    } else {
?>
    <p><h2>Non sei autenticato!</h2></p><br>

    <a href="index.php">Vai alla home del sito</a><br>
    <a href="login.php">Login</a>
<?php
    }
?>
</body>
</html>