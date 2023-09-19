<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		Login/Register as Business Person
	</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>



	<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        <span class="fs-4">Business connect</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="#" class="nav-link link-dark" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link link-dark">Features</a></li>
        <li class="nav-item"><a href="#" class="nav-link link-dark">Pricing</a></li>
        <li class="nav-item"><a href="#" class="nav-link link-dark">FAQs</a></li>
        <li class="nav-item"><a href="#" class="nav-link link-dark">About</a></li>
      </ul>
    </header>
  </div>
	





	<div class="div1 px-4 py-5 my-5 text-center">
    <img class="d-block mx-auto mb-4" src="infi.png" alt="" width="72" height="57">
    <h1 class="display-5 fw-bold">Business Connect</h1>
    <div class="col-lg-6 mx-auto">
      <!-- <p class="lead mb-4"> -->
      	<h6>The proposed platform to the investors and also connecting the people with good business concepts. This in turn will evolve how much to invest and where to invest the money with good returns on investment. </h6>
	  <!-- </p> -->
	  <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
		  <form action="login_business.php" method="post">
		  	<button class="btn1 btn btn-primary btn-lg px-4 gap-3">Login as Business Person</button>
		  </form>

		  <form action="register_business.php" method="post">
		  	<button class="btn2 btn btn-secondary btn-lg px-4">Register as Business Person</button>
		  </form>   
      </div>
    </div>
  </div>






	<!-- <form action="login_business.php" method="post">
		<button>Login as Business Person</button>
	</form>

	<form action="register_business.php" method="post">
		<button>Register as Business Person</button>
	</form> -->

</body>
</html>