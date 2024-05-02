<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  session_start();

  include './_dbconnect.php';

  $username = $_POST['username'];
  $password = $_POST['password'];
  
  $sql = "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password' ";
  $select = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($select);

  if(is_array($row)){
    $_SESSION["f_name"] = $row["f_name"];
    $_SESSION["l_name"] = $row["l_name"];
    $_SESSION["username"] = $row["username"];
    $_SESSION["password"] = $row["password"];
  } else {
    echo '<script type="text/javascript">
    alert("Error");
    window.location.href = "../index.php";
    </script>';
  }

  if(isset($_SESSION["username"])){
    header("Location:../dashboard.php");
  }
}
?>