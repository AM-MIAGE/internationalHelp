<html>
<head>
	<title>Connection</title>
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
<div class="form-group col-md-6 col-md-offset-3">
<form action="inscription" method="post" accept-charset="utf-8">
		<label for="nom">Nom</label><input id="nom" type="text" name="nom" placeholder="Name" class="form-control" required/>
	<label for="prenom">Prénom</label><input id="prenom" type="text" name="prenom" placeholder="prenom" class="form-control" required/>
	<label for="date">Date de naissance</label><input id="date" type="text" name="date" placeholder="jj/mm/aaaa" class="form-control" required/>
	<label for="nationalite">Nationalité</label><input id="nationalite" type="text" name="nationalite" placeholder="Nationalité" class="form-control" required/>

	<label for="mail">Mail</label><input id="mail" type="mail" name="mail" placeholder="mail" class="form-control" required/>
	<label for="mdp">Password</label><input id="mdp" type="password" name="mdp" placeholder="Password" class="form-control" required/>
	<label for="mdp2">Verify Password</label><input id="mdp2" type="password" name="mdp2" placeholder="Verify Password" class="form-control" required/>

	<input class="btn btn-danger" type="reset" value="Reset">
	<input class="btn btn-info" type="submit" value="Submit">
</form>
</div>
</div>

</div>

</body>
</html>