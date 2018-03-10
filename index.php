
<?php 

	require_once 'actions/db_connect.php';

	$sql= "SELECT * FROM `events`
			LEFT JOIN address ON events.fk_address_id = address.address_id
			LEFT JOIN event_date ON events.fk_date_id = event_date.date_id
			LEFT JOIN event_type ON events.fk_event_type_id = event_type.type_id";

	$result = mysqli_query($conn, $sql);

	
?>
<!DOCTYPE html>
<html>
<head>
  <title>big event</title>

  <link rel="stylesheet" type="text/css" href="style.css">

  <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- font -->
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Great+Vibes" rel="stylesheet">

</head>



<body>
	<header id="header" class="">
		<div class="row">
			<div class="col-md-4 col-lg-4 col-4">
				<h1> Big Events in Vienna </h1>
			</div>
			<div class="buttons" class="col-md-4 col-lg-4 col-4">
				<div class="buttons">
					<a href="login.php"><button type="submit" class="btn">Login</button></a>
					<a href="register.php"><button type="submit" class="btn">Sign up!</button></a>
				</div>
				
			</div>
		</div>
		<!-- <h1>big events!</h1> -->
		<!-- <div id="buttons">
			<a href="login.php"><button type="submit" class="btn">Login</button></a>
			<a href="register.php"><button type="submit" class="btn">Sign up!</button></a>
		</div> -->
	</header><!-- /header -->
<div class="container">
	<div class="row">
		<?php 
			while ($row = mysqli_fetch_assoc($result)) {
				echo 
					"<div class='col-md-4 col-lg-4 col-4'>
						<img src='img/".$row["image"]."' class='images'>
						<div>
							<h3>".$row["name"]."</h3>
							<p>".$row["location"]."</p>
						</div>
					</div>";
			};
		?>
		
	</div>
</div>

</body>
</html>