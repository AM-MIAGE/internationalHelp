<?php session_start(); ?>

<html>
<head>
	<title>Scoring</title>
	    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<script rel="stylesheet"
			  src="https://code.jquery.com/jquery-2.2.4.min.js"
			  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
			  crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>

<?php include "header.php" ?>


<div class="container-fluid">
	
<div class="row">
<div class="form-group col-md-8 col-md-offset-2">
	<h1 class="text-center">Score</h1>
	<p class="text-center">32</p>

	<h1 class="text-center">Badges</h1>
	<table class="table">
		<thead>
			<tr class="text-center">
				<th>Gold Answer <img src="./images/coupe_or.png"/></th>
				<th>Silver Answer <img src="./images/coupe_argent.png"/></th>
				<th>Bronze Answer <img src="./images/coupe_bronze.png"/></th>
				<th>Gold Question <img src="./images/étoile_or.png"/></th>
				<th>Silver Question <img src="./images/étoile_argent.png"/></th>
				<th>Bronze Question <img src="./images/étoile_bronze.png"/></th>
				<th>Gold Translation <img src="./images/médaille_or.png"/></th>
				<th>Silver Translation <img src="./images/médaille_argent.png"/></th>
				<th>Bronze Translation <img src="./images/médaille_bronze.png"/></th>
			</tr>
		</thead>
		<tbody>
			<tr class="text-center">
				<td>3</td>
				<td>1</td>
				<td>5</td>
				<td>0</td>
				<td>6</td>
				<td>7</td>
				<td>3</td>
				<td>6</td>
				<td>1</td>
			</tr>
		</tbody>
	</table>
</div>
</div>


<div class="row">
<div class="form-group col-md-8 col-md-offset-2">


	<h1 class="text-center">Rank</h1>
	<table class="table">
		<thead>
			<tr class="text-center">
				<th>#</th>
				<th>User</th>
				<th>Score</th>

			</tr>
		</thead>
		<tbody>
			<tr class="text-center">
				<td>1</td>
				<td>Toto</td>
				<td>200</td>
			</tr>
			<tr class="text-center">
								<td>2</td>
				<td>Titi</td>
				<td>180</td>
			</tr>
			<tr class="text-center">
								<td>3</td>

				<td>Tata</td>
				<td>150</td>
			</tr>
			<tr class="text-center">
								<td>4</td>

				<td>Tutu</td>
				<td>90</td>
			</tr>
						<tr class="text-center">
								<td>5</td>

				<td>Bob</td>
				<td>50</td>
			</tr>
		</tbody>
	</table>
</div>
</div>

</div>

</body>
</html>