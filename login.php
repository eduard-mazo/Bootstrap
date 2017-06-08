<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0" >
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style2.css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>	
	<div class="container">
		<div class="row">
			<div class="col-xs-3 col-md-4">
			</div>
			<div class="col-xs-6 col-md-4">
			<center>
				<form class="form" action="bd/guardar.php" method="POST">
					<div class="form-group" id="inputs">
						    <img src="img/barack-obama-face-vector.jpg" class="img-responsive img-circle" id="imagen"></img>

						    <div class="input-group">
						      <div class="input-group-addon"><span class="fa fa-user-circle-o"></span></div>
						      <input type="text" class="form-control" id="label1" REQUIRED	name="user" placeholder="User Name">
						    </div>
						    <div class="input-group">
						      <div class="input-group-addon"><span class="fa fa-key"></span></div>
						      <input type="Password" class="form-control" id="label2" REQUIRED	name="pass" autocomplete="off" placeholder="Password">
						    </div>
						    <input class="btn btn-success" id="boton" type="submit" value="LOG IN"></input>
					</div>
				</form>
			</center>
			</div>
			<div class="col-xs-3 col-md-4">
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="js/js.js"></script>
		<script 
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
	</script>
</body>
</html>