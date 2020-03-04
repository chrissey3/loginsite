<!doctype html>
  
<?php
session_start();

$bruger = [
	'chris' => 123, 
	'mort'=> 321, 
	'mads' => 456,
	'sander' => 654,
	'kasper' => 789
];
		   
		   
		   

if(isset($_POST['logind'])){
	foreach($bruger as $username => $password){
		if(!empty($_SESSION['name'])){
			echo 'Der er allerede en der er logget på';
			break;
		}
		 if($username == $_POST['bruger'] && $password == $_POST['kode']){
			 $_SESSION['name'] = $username;
			
			
			 header("Location: bruger/".$username.'.php');
			 break;

		}
	}
}elseif(isset($_POST["logud"])){
	unset($_SESSION['name']);
}

?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	 
	  <style>
		  
		  footer{
			  position: fixed;
			  bottom: 0;
			  width: 100%;
		  }
		 
	  
	  </style>

    <title>Log in</title>
	  
	  
	
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
					<h1>Log in site</h1>
			  </div>
			  
			    <div class="col-4">
					
		    </div>
			  
			
			  </div>
			 
	  </header>
	    </div>
	  
	  <main class="container border border-primary p-3">
		  <div>
		    <form method = 'POST'>
  <label for="bruger">Bruger</label><br>
  <input type="text" name="bruger" class="form-control"><br>

	
	
  <label for="kode">Kode</label><br>
  <input type="password" name="kode" class="form-control"><br>
	<input type="submit" value="log ind" name="logind" class="btn btn-success"><br>
				
	
	
	

 
</form>
		  </div>
	    
	  </main>
	  
	  <footer>
	    <div class="row bg-secondary">
		  <div class="col-4">
			  <p class="text-center">Christoffer Lerager Rasmussen</p>
			</div>
			 <div class="col-4">
				 <p class="text-center">2020</p>
			</div>
			 <div class="col-4">
				 <p class="text-center">Herning 7400</p>
			</div>
			
		  </div>
	  
	  
	  </footer>
  </body>
</html>