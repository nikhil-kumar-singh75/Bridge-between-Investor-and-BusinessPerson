

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View Business ideas</title>

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

		

	</style>
</head>
</head>
<body>

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

  <?php
	
		$server="localhost";
		$username="root";
		$password="";

		$con=mysqli_connect($server,$username,$password);

		if(!$con)
		{
			die("Error occured ".mysqli_connect_error());
		}
		else
		{
			
		}

		$sql="SELECT * FROM `bridge`.`businessidea`";
		$res=mysqli_query($con,$sql);

		$num=mysqli_num_rows($res);
		if($num>0)
		{
			while($row=mysqli_fetch_assoc($res))
			{
				// echo "<center><h1>Welcome to Investor module</h1></center><br><br><br>";
				echo "<div style='background:#EEEEEE;width:60%;margin-left:20%;border:1px solid black;border-radius:20px;height:170px;color:black'>";
				echo "<p class='text-center'>Company name: ".$row['comp_name'];
				echo "<br>";
				echo "Idea: ".$row['idea'];
				echo "<br>";
				echo "Date: ".$row['dt'];
				echo "<br>";
				echo "<form action='approve.php' method='post'>";
				
				echo "<button class='btn btn-success' style='margin-left:47%'>Approve</button>";
				

				echo "</form>";
				// echo "<hr>";
				echo "</div>";
			}
		}

		
		$con->close();

	
	

?>

	



</body>
</html>

