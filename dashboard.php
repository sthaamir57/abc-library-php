<?php session_start();?>

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
    <nav>
        <div class="logo">
            <a href="./dashboard.php"><span>ABC</span><span>Library</span></a>
        </div>
        <ul>
            <li><a href="./contact.php">Contact</a></li>
            <li><a href="./about.php">About</a></li>
            <li><a href="./modules/_logout.php" class="btn-nav">Logout</a></li>
        </ul>
    </nav>
    
    <div class="content" >
            <h1>Hello, <?php echo $_SESSION["f_name"]; ?>!</h1>
            <p>You are now logged in</p>
    </div>

</body>
</html> 