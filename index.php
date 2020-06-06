<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">

	<title>Buty</title>


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Lato&display=swap&subset=latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script src="script.js"></script>

</head>
<body>

	<main>
		<div class="container-fluid">
		
		<div class="row">
			<div class="col-12 p-5 ">
				<h1 class="text-center display-6"><p>Codzienne buty</p></h1>
			</div>
		</div>

		<div class="row text-center">
			<?php

				include_once "random.php";

				echo check();

			?>
		</div>


	</div>
	</main>

</body>
</html>