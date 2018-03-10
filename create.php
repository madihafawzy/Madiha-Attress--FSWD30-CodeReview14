
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
    <style type="text/css">
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 50%;
        }

        table tr th {
            padding-top: 20px;
        }
    </style>
</head>
<body>
<?php require_once ''; ?>
	<fieldset>

	    <legend>Add Table</legend>

	    <form action="actions/a_create.php" method="post">
	        <table cellspacing="0" cellpadding="0">
	            <tr>
	                <th>Capacity</th>
	                <td><input type="text" name="capacity" placeholder="Capacity" /></td>
	            </tr>
	            <tr>
	                <td><button type="submit">Insert user</button></td>
	                <td><a href="index.php"><button type="button">Back</button></a></td>
	            </tr>
	        </table>
	    </form>

	</fieldset>

</body>
</html>