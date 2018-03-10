<?php 
	ob_start();
	session_start();
	require_once 'actions/db_connect.php'; 
	

	?>
	

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

</head><

<body>
	
	<header id="header" class="">
		<div class="row">
			<div class="col-md-4 col-lg-4 col-4">
				<h1> Our Big Events </h1>
			</div>
			<div class="buttons" class="col-md-4 col-lg-4 col-4">
				<div class="buttons">
					<button class="btn" id="sign-out">
					<a href="logout.php?logout">Sign Out</a>
				</button>
				</div>
				
			</div>
		</div>
	</header><!-- /header -->

	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th>image</th>
					<th>ID</th>
					<th>Name</th>
					<th id="date">Date</th>
					<th>Capacity</th>
					<th>email</th>
					<th>Phonenumber</th>
					<th>Location</th>
				</tr>
			</thead>
			<tbody>
				<?php

	            $sql = "SELECT * FROM `events`
					LEFT JOIN address ON events.fk_address_id = address.address_id
					LEFT JOIN event_date ON events.fk_date_id = event_date.date_id
					LEFT JOIN event_type ON events.fk_event_type_id = event_type.type_id";
	            $result = $conn->query($sql);

	            if($result->num_rows > 0) { //für admin
	                while($row = $result->fetch_assoc()) {
	                    	echo "<tr>
	                    	<td><img src='img/".$row["image"]."' class='images'></td>
	                        <td>".$row['id']."</td>
	                        <td>".$row['name']."</td>
	                        <td>".$row['start_date']." <br>-<br> ".$row['end_date']."</td>
	                        <td>".$row['capacity']."</td>
	                        <td>".$row['contact_email']."</td>
	                        <td>".$row['contact_phonenumber']."</td>
	                        <td>".$row['location']."</td>
	                        <td>
	                            <a href='update.php?id=".$row['id']."'><button type='button'>Edit</button></a>
	                            <a href='delete.php?id=".$row['id']."'><button type='button'>Delete</button></a>
	                        </td>
	                    </tr>";
	                }
	            }else {
	                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
	            }
            ?>
			</tbody>
		</table>
	</div>	
<?php include_once 'footer.php' ?>
</body>
</html>
<?php ob_end_flush(); ?>