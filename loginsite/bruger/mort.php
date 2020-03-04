<!doctype html>
<?php
session_start();

if(empty($_SESSION) ||  $_SESSION['name'] != 'mort'){
	header("Location: ../index.php");
	die();
}


?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>mort site</title>
  </head>
<body>
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<div class="bg-dark text-white">
  <header class="ml-4 mr-4 mb-4">
		  
		  
		  
		  <div class="row">
			  <div class="col-4">
		  
			  </div>
			  
			    <div class="col-4 text-center">
					<h1>Mort site</h1>
			  </div>
			  
			    <div class="col-4">
					<a href="logud.php" class="btn btn-danger mt-2">Log ud</a>
		    </div>
			  
			
			  </div>
			 
	  </header>
	    </div>
	
	<div class="container">
		<div class="text-center">
  			<img src="../billeder/mort.png" alt="mort billede" class="img-fluid"/>
		</div>
	</div>
</body>
</html>