<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  include './_dbconnect.php';

  $f_name = $_POST['f_name'];
  $l_name = $_POST['l_name'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql_d = "SELECT * FROM `users` WHERE `username` = '$username' OR `email` = '$email' ";
  $duplicate = mysqli_query($conn, $sql_d);
  if(mysqli_num_rows($duplicate) > 0) {
    echo
    '<script type="text/javascript">
    alert("Username or Email is already taken");
    window.location.href = "../signup.php";
    </script>';
  }
  else {
    $sql_in = "INSERT INTO `users` (`f_name`, `l_name`, `username`, `email`, `password`, `dt`)
          VALUES ('$f_name', '$l_name', '$username', '$email', '$password', current_timestamp()) ";

    mysqli_query($conn, $sql_in);

    echo
    '<script type="text/javascript">
    alert("Registration Successful! Log in now");
    window.location.href = "../index.php";
    </script>';
  }
}
?>