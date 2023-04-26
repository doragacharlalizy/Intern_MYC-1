<?php 

$email = $_POST['email'];
$password = $_POST['password'];


if($email == 'lizydoragacharla@gmail.com' && $password == 'lizy'){
  session_start();
  $_SESSION["email"] = $email;
  header('Location: http://localhost/website.php');
}
elseif($email == 'rajababu@gmail.com' && $password == 'password456') {
  session_start();
  $_SESSION["email"] = $email;
  header('Location: http://localhost/website.php');
}
elseif($email == 'arhaan@gmail.com' && $password == 'password789') {
  session_start();
  $_SESSION["email"] = $email;
  header('Location: http://localhost/website.php');
}
elseif($email == 'jahnavi@gmail.com' && $password == 'password000') {
  session_start();
  $_SESSION["email"] = $email;
  header('Location: http://localhost/website.php');
}
else {
echo "Invalid login";
}

?> 