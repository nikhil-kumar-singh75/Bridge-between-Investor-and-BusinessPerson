<?php
		if(isset($_POST['username']))
		{
			$server="localhost";
			$uname="root";
			$pass="";
			$con=mysqli_connect($server,$uname,$pass);
			if(!$con)
			{
				die("error ".mysqli_connect_error());
			}

			$sql="SELECT * FROM `bridge`.`investorlogin`";
			$res=mysqli_query($con,$sql);

			$num=mysqli_num_rows($res);
			if($num>0)
			{
				while($row=mysqli_fetch_assoc($res))
				{
					if($_POST['username']==$row['email'] and $_POST['pwd']==$row['pwd'])
					{
						// echo "<center><h1>Wecome to Investor Homepage</h1></center>";
						// break;
					}
					else
					{
						
						
					}
				}

			}
		}
	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		Investor Homepage
	</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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

		

	</style>





	<!-- <form action="view.php" method="post">
		<h1>click below to view business ideas</h1>
		<button>View</button>
	</form> -->
</head>
<body>

	<!-- <form action="view.php" method="post">
		<h1>click below to view business ideas</h1>
		<button>View</button>
	</form> -->

	<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        <span class="fs-4">Investor Homepage</span>
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

  <div class="div1 px-4 py-5 my-5 text-center">
    <img class="d-block mx-auto mb-4" src="infi.png" alt="" width="72" height="57">
    <h1 class="display-5 fw-bold">Welcome to Investor Homepage</h1>
    <div class="col-lg-6 mx-auto">
      <!-- <p class="lead mb-4"> -->
      	<!-- <h6>The proposed platform to the investors and also connecting the people with good business concepts. This in turn will evolve how much to invest and where to invest the money with good returns on investment. </h6> -->
	  <!-- </p> -->
	  <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
		  <form action="view.php" method="post">
		  	<button class="btn1 btn btn-primary btn-lg px-4 gap-3">Click here to view business ideas</button>
		  </form>

		    
      </div>
    </div>
  </div>

</body>
</html>