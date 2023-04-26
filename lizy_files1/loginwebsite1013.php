<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		body {
			background-image:url("bg.jpg")
		}
		   
		.container {
			width: 50%;
			margin: 0 auto;
			margin-top: 50px;
			background-color: #ffffff;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
			padding: 20px;
			border-radius: 10px;
		}

		input[type=email], input[type=password] {
			width: 100%;
			padding: 10px;
			margin: 8px 0;
			display: inline-block;
			border: none;
			border-radius: 4px;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
		}

		input[type=email]:hover, input[type=password]:hover {
			background-color: #f2f2f2;
			transition: all 0.5s ease-in-out;
		}

		input[type=submit] {
			background-color: #4CAF50;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}

		input[type=submit]:hover {
			background-color: #3e8e41;
		}

		.forgot-password {
			text-align:right;
			margin-top:10px;
		}

		.forgot-password a {
            color:blue;
			text-decoration:none;
		}

		.forgot-password a:hover {
			text-decoration:underline;
		}

		.navbar {
			position: fixed;
			top: 0;
			left: 0;
			right: 0;
			height: 50px;
			background-color: rgba(0, 0, 0, 0.5);
			z-index: 1;
			display: flex;
			align-items: center;
			justify-content: space-between;
			padding: 0 20px;
		}

		.navbar a {
			color: #fff;
			margin-right: 20px;
			
		}

		.center {
			display: block;
			margin: 0 auto;
		}

		.dropdown {
			position: relative;
			display: inline-block;
		}

		.dropbtn {
			color: white;
			background-color: rgba(0, 0, 0, 0.5);
			border: none;
			padding: 10px 20px;
			font-size: 16px;
			cursor: pointer;
		}

		.dropdown-content {
			left: -60px;
			display: none;
			position: absolute;
			z-index: 1;
			background-color: #f9f9f9;
			min-width: 160px;
			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		}

		.dropdown-content a {
			color: black;
			padding: 12px 16px;
			text-decoration: none;
			display: block;
		}

		.dropdown:hover .dropdown-content {
			display: block;

    }
    
    input[type=email], input[type=password] {
        width: 100%;
        padding: 10px;
        margin: 8px 0;
        display: inline-block;
        border: none;
        border-radius: 4px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        font-size: 16px; `
    }
    
    input[type=email]:hover, input[type=password]:hover {
        background-color: #f2f2f2;
        transition: all 0.5s ease-in-out;
    }
    
    input[type=submit] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px; 
    }
    
    input[type=submit]:hover {
        background-color: #3e8e41;
    }
    
    .forgot-password{
        text-align:right;
        margin-top:10px;
    }
    
    .forgot-password a{
        color:blue;
        text-decoration:none;
        font-size: 16px; 
    }
    
    .forgot-password a:hover{
        text-decoration:underline;
    }
    
    .navbar {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        height: 50px;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 1;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 20px;
    }
    
    .navbar a {
        color: #fff;
        margin-right: 20px;
        text-decoration: none;
        font-size: 16px; 
    }
    
    .center {
        display: block;
        margin: 0 auto;
    }
    
    
    @media screen and (max-width: 600px) {
        .container {
            width: 90%; 
            margin-top: 50px; 
        }
        
        input[type=email], input[type=password], input[type=submit] {
            width: 100%;
            font-size: 18px; 
        }
        
        .forgot-password a {
            font-size: 18px; 
        }
        
        .navbar a {
            font-size: 10px; 
        }
    }
</style>
</head>
<body>
    <div class="navbar">
        <a href="http://localhost/loginwebsite1013.php"> My company Login</a>
        <a href="http://www.mycompany.org.in/">MYCOMPANY</a>
        <a href="http://www.mycompany.org.in/">About MY COMPANY</a>
        <div class="dropdown">
            <button class="dropbtn">More Info</button>
            <div class="dropdown-content">
                <a href="http://www.mycompany.org.in/">+91 9949793963</a>
                <a href="http://www.mycompany.org.in/">info@mycompany.co.in</a>
                <a href="http://www.mycompany.org.in/">Vizag</a>
            </div>
        </div>
    </div>
<style>
.dropdown {
  position: relative;
  display: inline-block;
}

.dropbtn {
  color: white;
  background-color: rgba(0, 0, 0, 0.5);
  border-color: red;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
}

.dropdown-content {
left: -80px;
  display: none;
  position: absolute;
  z-index: 1;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown:hover .dropdown-content {
  display: block;
}
	</style>
</head>
<body>
	<nav >
		<div class="nav">
	    <img src="C:\xampp\htdocs\myc.jpg">	
		</div>		
	</nav>
	<div class="container">
		<h2>Login</h2>
		<a><img src="myc.jpg" class="center"width="100"height="100"></a>
		<form action="login_validation1013.php" method="post">
			<label for="email">email</label>
			<input type="email" id="email" name="email" placeholder="Enter email">
			<label for="password">password</label>
			<input type="password" id="password" name="password" placeholder="Enter password">
			<input type="submit" value="Login">
			<div class="forgot-password">
				<a href="#">forgot password</a>
	        </div>
		</form>
	</div>
</body>
</html>