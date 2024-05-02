<?php
    session_start();

    if(isset($_SESSION["username"])){
        $home = './dashboard.php';
        $button = '<li><a href="./modules/_logout.php" class="btn-nav">Logout</a></li>';
    } else {
        $home = './index.php';
        $button = '<li><a href="./index.php">Log in</a></li>
        <li><a href="./signup.php" class="btn-nav">Sign up</a></li>';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABC Library</title>
    <link rel="stylesheet" href="./style/main.css">
</head>
<body>
    <?php
    echo
    "<nav>
        <div class='logo'>
            <a href='$home'><span>ABC</span><span>Library</span></a>
        </div>
        <ul>
            <li><a href='./contact.php'>Contact</a></li>
            <li><a href='./about.php'>About</a></li>
            $button
        </ul>
    </nav>"
    ?>
    <div class='content' >
            <h1>About</h1>
            <p>This my PHP project</p>
    </div>
</body>
</html> 