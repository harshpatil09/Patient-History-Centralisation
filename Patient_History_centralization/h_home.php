<?php
    session_start();
    if (!isset($_SESSION["user"])) {
       header("Location: index.php");
    }
    // print_r($_SESSION);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
	<link rel="stylesheet" href="home.css">
	<link rel="stylesheet" href="<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Home Page</title>
</head>

<!-- 	<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#"><img src="h_images/medbg.png" alt="Logo" width="70" height="50" class="d-inline-block align-text-top"></a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNav">
	      <ul class="navbar-nav">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="#">Home</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#about">About</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#policy">Policies</a>
	        </li>
			<li class="nav-item">
				<a href="logout.php" class="btn btn-warning nav-link">Logout</a>
			  </li>
	      </ul>
	    </div>
	  </div>
	</nav>
 -->

<!-- Header Section -->

<header class="header">
	<img src="h_images/logoo.png" class="logo">
	<nav class="navbar">
		<ul class="navbar-list">
			<li><a href="#" class="navbar-link home-link">Home</a></li>
			<li><a href="#about" class="navbar-link about-link">About</a></li>
			<li><a href="#policy" class="navbar-link contact-link">Policies</a></li>
			<li><a href="logout.php" class="navbar-link">Logout</a></li>
		</ul>
	</nav>
</header>

<body>


<!-- <section class="space">
	<div class="container-fluid mb-5" id="package" >
		<br><br><br><br><br>

		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
				<div class="card" style="width:400px">
  					<img class="card-img-top" src="h_images/medbg1.gif" alt="Card image">
  						<div class="card-body">
	    					<h4 class="card-title">Patient Registration</h4>
	    					<p class="card-text">Register a new patients data into the system. Add data into form.</p>
	    					<a href="../patient/p_register.php" class="btn btn-primary">Click Here</a>
	  					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<div class="card" style="width:420px">
  					<img class="card-img-top" src="h_images/medbg2.gif" alt="Card image img-fluid">
  						<div class="card-body">
    						<h4 class="card-title">View Patient History</h4>
    						<p class="card-text">See all the past records of the patient- diseases, treatments, etc.</p>
    						<a href="#" class="btn btn-primary">Click Here</a>
  						</div>
				</div>				
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<div class="card" style="width:400px">
  					<img class="card-img-top" src="h_images/medbg3.gif" alt="Card image img-fluid">
  						<div class="card-body">
    						<h4 class="card-title">Edit Patient Data</h4>
    						<p class="card-text">Edit the data of the patient- diseases, treatments, etc.</p>
    						<a href="#" class="btn btn-primary">Click Here</a>
  						</div>
				</div>				
			</div>
				
	</div>

 -->

<!-- Hero Section -->

	<section class="section-hero section">
		<div class="container grid grid-three-column">
			<div class="section-hero-data">
				<div class="card">
  					<img class="card-img-top" src="h_images/medbg1.gif" alt="Card image">
  						<div class="card-body">
	    					<h4 class="card-title">Patient Registration (New Patient)</h4>
	    					<p class="card-text">Register a new patients data into the system. Add data into form.</p>
	    					<a href="./patient/p_register.php" class="btn hero-btn">Click Here</a>
	  					</div>
				</div>
			</div>

			<div class="section-hero-data">
				<div class="card">
  					<img class="card-img-top" src="h_images/medbg2.gif" alt="Card image">
  						<div class="card-body">
	    					<h4 class="card-title">View Patient History</h4>
	    					<p class="card-text">See all the past records of the patient- diseases, treatments, etc.</p>
	    					<a href="./patient/view_details.php" class="btn hero-btn">Click Here</a>
	  					</div>
				</div>
			</div>

			<div class="section-hero-image">	
				<div class="card">
  					<img class="card-img-top" src="h_images/medbg3.gif" alt="Card image">
  						<div class="card-body">
	    					<h4 class="card-title">Update Patient Data</h4>
	    					<p class="card-text">Update the data of the patient- diseases, treatments, etc.</p>
	    					<a href="./patient/add_details.php" class="btn hero-btn">Click Here</a>
	  					</div>
				</div>	
		    </div>
		</div>
</section>



<!-- About Section -->


		<div class="abt container" id="about">
			<br><br>
			<h1 class="text-capitalize common-heading">About</h1>
	
		<p class="data-p">About us Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. 
		</p>
		<br>


		<div class="ply" id="policy">
			<br><br>
			<h1 class="text-capitalize common-heading">Policy</h1>
	
		<p class="data-p">About us Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur.
		</p>
		<br>
</div>



</body>
<footer>
<div class="footerConatiner">
	<div class="socialIcons">
		<a href=""><i class ="fa-brands fa-facebook"></i></a>
		<a href=""><i class ="fa-brands fa-facebook"></i></a>
		<a href=""><i class ="fa-brands fa-facebook"></i></a>
		<a href=""><i class ="fa-brands fa-facebook"></i></a>
	</div>
	<div class="footerNav">
		<ul>
			<li><a href ="">Home</a></li>
			<li><a href ="">About</a></li>
			<li><a href ="">Contact Us</a></li>
			<!--<li><a href ="">Home</a></li>-->
		</ul>
	</div>
	<div class="footerBottom">
		<p>Copyright &copy; 2022</p>
	</div>
</div>
</footer>
</html>
