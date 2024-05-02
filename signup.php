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
                <a href="./index.php"><span>ABC</span><span>Library</span></a>
            </div>
            <ul>
                <li><a href="./contact.php">Contact</a></li>
                <li><a href="./about.php">About</a></li>
                <li><a href="./index.php" class="btn-nav">Log in</a></li>
            </ul>
        </nav>

        <div class="wrapper">
            <section class="left"></section>
            <main>
                <?php include './web_components/c_signup.php' ;?>
            </main>
        </div>
    </body>

    <script type="text/javascript" src="./js/validation.js"></script>
</html> 