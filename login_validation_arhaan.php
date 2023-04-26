

<?php 

$username = $_POST['email'];
$password = $_POST['password'];
// echo "Username ::".$username."  password ::".$password;

if($username == 'arhaan' && $password == 'ar'){
    header('Location: http://localhost/Arhaan/index_arhaan.php');

}
else {
  echo "invalid login";
}

?>