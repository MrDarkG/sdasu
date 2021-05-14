<?php 
require_once("../sqli/conf/db.php");
require_once("../sqli/auth/checkauth.php");
	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="../../../../favicon.ico">

		<title>Navbar Template for Bootstrap</title>

		<!-- Bootstrap core CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

		<!-- Custom styles for this template -->
		<link href="navbar.css" rel="stylesheet">
	</head>

	<body>
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
				<a class="navbar-brand" href="#">Navbar</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsExample09">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Link</a>
						</li>
						<li class="nav-item">
							<a class="nav-link disabled" href="#">Disabled</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
							<div class="dropdown-menu" aria-labelledby="dropdown09">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<a class="dropdown-item" href="#">Something else here</a>
							</div>
						</li>
					</ul>
					<form class="form-inline my-2 my-md-0" method="GET" accept="">
						<input class="form-control" type="text" placeholder="Search" name="search" aria-label="Search">
					</form>
				</div>
			</nav>
			<div class="container p-0 pb-0 mt-2 ">
				<?php if (isset($_GET["search"])): ?>
					<div class="alert alert-warning"> you search for <?php echo $_GET['search'] ?></div>
				<?php endif ?>
			</div>
			<div class="jumbotron">
				
				<div class="col-sm-8 mx-auto">
					<h1>Some shitty post title</h1>
					<p>This page is highly vulrnable for <code>xss attacks</code>. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					
				</div>
			</div>
		</div>
		
		<!-- <?php if(isset($_SESSION["id"])):?> -->
			<div class="container">
				<?php if (isset($_GET['success'])): ?>
					<div class="alert alert-success" role="alert">
						comment posted successfully
					</div>
				<?php endif ?>
				<?php if (isset($_GET['error'])): ?>
					<div class="alert alert-danger" role="alert">
						Coudnt post comment
					</div>
				<?php endif ?>

				<?php 
				 	$sql = "SELECT * FROM `comments`";
					$result = $conn->query($sql);
					while($row = mysqli_fetch_assoc($result)):?>
					   <div class="card p-4 mb-2">
					   		<div><?php echo $row["comment"] ?></div>
					   </div>
				<?php endwhile;  ?>
				<form action="post.php" method="POST">
					<textarea name="comment" placeholder="your comment hear" class="w-100" required=""></textarea>
					<button class="btn btn-primary w-100">Post comment</button>
				</form>
			</div>
		<!-- <?php endif?> -->
		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

		
	</body>
</html>