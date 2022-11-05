<!DOCTYPE html>
<html>
<head>
	<title>File upload</title>
</head>
<body>

	
		<legend>PROFILE PICTURE</legend>
			<form method="post" action="(to)file Upload.php" enctype="multipart/form-data">
				<table>
					<tr><td><img src="images/profile.jpg" height="200" width="200"></td></tr>
					<tr><td><input type="file" name="file_to_upload" value="Choose a file"></td></tr>	
				</table>
				<hr>
				<input type="submit" name="submit" value="Submit">

			</form>
	

</body>
</html>