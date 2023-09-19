<?php

  if(isset($_POST['username']))
  {
  $server="localhost";
  $uname="root";
  $password="";
  $con=mysqli_connect($server,$uname,$password);
  if(!$con)
  {
    die("Connection failed ".mysqli_connect_error());
  }

  
  $comp_name = $_POST['comp_name'];
  $username = $_POST['username'];
  $phone = $_POST['phone'];
  $pwd = $_POST['pwd'];


    

    $sql = "INSERT INTO `bridge`.`businesslogin` (`comp_name`, `email`, `phone`,`pwd`) VALUES('$comp_name', '$username', '$phone','$pwd');";


    if($con->query($sql)==true)
    {
      
    }
    else
    {
      
    }

    $con->close();
  }
  

  


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		Register as business person
	</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }


      html,
body {
  height: 100%;
}

body {
  display: flex;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  max-width: 330px;
  padding: 15px;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

button {
  
  margin-bottom: 5%;
}
    </style>
</head>
<body>



	<main class="form-signin w-100 m-auto">
  <form action="register_business.php" method="post">
    <img class="mb-4" src="infi.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please Register</h1>

    <div class="form-floating">
      <input type="text" class="form-control" name="comp_name" id="comp_name" placeholder="name@example.com">
      <label for="floatingInput">Company Name</label>
    </div>
    <div class="form-floating">
      <input type="email" class="form-control" name="username" id="username" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="number" class="form-control" name="phone" id="phone" placeholder="name@example.com">
      <label for="floatingInput">Phone</label>
    </div>
    <div class="form-floating">
      <input type="password" name="pwd" id="pwd" class="form-control"placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="reg w-100 btn btn-lg btn-primary" type="submit">Register</button>
  </form>
  <form action="login_business.php" method="post">
    <button class="sign w-100 btn btn-lg btn-success" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
  </form>
  
</main>





	<!-- <form action="login_business.php" method="post">
		<input type="text" name="comp_name" id="comp_name" placeholder="Enter your company name"><br>
		<input type="email" name="email" id="email" placeholder="Enter your company email"><br>
		<input type="number" name="phone" id="phone" placeholder="Enter your phone"><br>
		<input type="password" name="pwd" id="pwd" placeholder="Enter your password"><br>
		<button>Register as business person</button>

	</form> -->

</body>
</html>