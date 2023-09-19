<?php

  if(isset($_POST['comp_name']))
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
  $idea = $_POST['idea'];


    

    $sql = "INSERT INTO `bridge`.`businessidea` (`comp_name`, `idea`) VALUES('$comp_name', '$idea');";


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
	<title>Upload Your idea</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> -->

  
  <style type="text/css">
    body {
      background: url('business.jpg');
      background-size: cover;
      

    }

    .div1 {
      background: #F1F1F1;
      width: 65%;
      position: absolute;
      left: 17%;
      border: 1px solid white;
      border-radius: 20px;
    }

    

    h6 {
      
      color: black;
      margin-top: 12%;
      margin-bottom: 15%;
      opacity: 1.5;

    }

    .main {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      background-color: #EEEEEE;
      border: 1px solid black;
      border-radius: 10px;
      width: 50%;
      margin-left: 23%;
      height: 500px;

    }

    

  </style>
</head>
<body>


  <form action="upload.php" method="post">
    <div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        <span class="fs-4">Business Homepage</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="#" class="nav-link link-dark" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="index.php" class="nav-link link-dark">logout</a></li>
        <!-- <li class="nav-item"><a href="register_business.php" class="nav-link link-dark">Business</a></li> -->
        <!-- <li class="nav-item"><a href="#" class="nav-link link-dark">FAQs</a></li>
        <li class="nav-item"><a href="#" class="nav-link link-dark">About</a></li>
 -->      </ul>
    </header>
  </div>
    <div class="main">
    <center><h1>Upload Business Ideas</h1></center>
    <br>
    <!-- <h4>Enter details of comapany name you want to approve</h4> -->

    Enter your company name:<input type="text" name="comp_name" id="comp_name"><br>
    Enter your idea:<br> <textarea name="idea" id="idea"></textarea><br>
    <button class="btn btn-success" style="padding:5px 90px;margin-bottom:20px;">Submit</button>


  </form>

  <form action="showall.php" method="post">
    <button class="btn btn-primary">View approved business ideas</button>
  </form>
  </div>




	<!-- <h1>Business Module</h1>
	<form action="upload.php" method="post">
		Enter your company name:<input type="text" name="comp_name" id="comp_name"><br>
		Enter your idea:<br> <textarea name="idea" id="idea"></textarea><br>
		<button>Submit</button>
	</form>

  <form action="showall.php" method="post">
    <button>View approved business ideas</button>
  </form> -->

</body>
</html>