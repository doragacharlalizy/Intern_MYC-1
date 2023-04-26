<!DOCTYPE html>
<html>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
        nav {
			background-color:lightblue;
			overflow: hidden;
		}

		nav a {
			font-size: large;
			float: right;
			color:black;
			text-align: center;
			padding: 20px 16px;
			text-decoration: none;
		}

		nav a:hover {
			background-color: white;
			color: black;                               
		}
</style>
  <title>Student Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    table{
        background-color:grey;
        margin:10px;
    }
    </style>
</head>
<body>
<body>
<nav>
    <div class= "nav">
        <a href="#">Hello User </a>
		<a href="http://www.mycompany.org.in/">My Company  </a>
        <a href="#">lizydoragacharla@gmail.com</a>
	<div class=" nav_container">
		    <a class="navbar-brand" href="#">
            </a>
	</div>
  <div class="dynamic-text">
			<?php
			session_start();
			$email = $_SESSION["email"];
			echo "<p style='color:red; font-size:20px;'>You are logged in as :" . $_SESSION["email"];
			?>
		</div>
</nav>

<div class="container">
  <h2>DETAILS OF STUDENTS</h2>

   
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      
    <?php

$users = array(
  "1:sameer:sk:sammujahid@example.com",
  "2:rahul:N:nrahul@example.com",
  "3:Jahnavi:G:gjahnavi@example.com",
  "4:vignesh:s:viggu@example.com",
  "5:rajababu:D:rajababud@example.com",
  "6:tasneem:sk:taskouser@example.com",
  "7:Lizy:D:lizyd@example.com",
  "8:varshini:Y:varshiniy@example.com",
  "9:arhaan:md:arhaanmd@example.com"
);


foreach ($users as $user) {
  $fields = explode(":", $user);
  echo "<tr style='background-color: " . (($fields[0]%2==0)? "#566D7E;" :"pink"). ";'>
          <td>".$fields[0]."</td>
          <td>".$fields[1]."</td>
          <td>".$fields[2]."</td>
          <td>".$fields[3]."</td>
          <td><a href='index.php?".$fields[0]."'  target='_blank'>get_details</a></td> 
        </tr>";
}


?>

  

  </tbody>
</table>
</div>
<div class="container">
  <h2>DETAILS OF EMPLOYEES</h2>

         
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>name</th>
        <th>deparment</th>
        <th>Salary</th>
      </tr>
    </thead>
    <tbody>
      
    <?php


$users = array(
  "1:Ranjith:cse:20000",
  "2:sirisha:cse:30000",
  "3:Gayatri:cse:35000",
  "4:suresh varma:cse:100000",
  "5:kezia:cse:50000",
  "6:Harani:cse:40000",
  "7:Dasu:ece:45000",
  "8:persis:cse:90000",
  "9:venkatrao:ece:80000"
);


foreach ($users as $user) {
  $fields = explode(":", $user);
  echo "<tr style='background-color: " . (($fields[0]%2==0)? "grey" :"blue"). ";'>
          <td>".$fields[0]."</td>
          <td>".$fields[1]."</td>
          <td>".$fields[2]."</td>
          <td>".$fields[3]."</td>
          <td><a href='index.php?".$fields[0]."'  target='_blank'>get_details</a></td> 
        </tr>";
}


?>

  

  </tbody>
</table>
</div>



</body>
</html>


