<!DOCTYPE html>
<html>
<head>
	<title>This is Log in validation</title>
</head>
<body>

	<?php
		$uName = $pass = "";
		$uName_Err = $pass_Err = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			

			//username validation
			if (!isset($_POST['uname']) || empty($_POST['uname'])) {
				$uName_Err = "User Name is required";
			}                                                         
 			else{
				$uName = $_POST['uname'];
					if (!preg_match("/^[a-zA-Z-' _0-9]*$/", $uName)) {
						$uName_Err = "Only characters, dash, underscore can be used in username";
					}
					else if(str_word_count($uName) < 2){
						$uName_Err = "Username must contain at least 2 characters";
					}
				}
			//password validation
			if (!isset($_POST['password']) || empty($_POST['password'])) {
					$pass_Err = "Password is required";
				}
			else{
				$pass = $_POST['password'];

				//length checking
				if (strlen($pass) < 8) {
					$pass_Err = "Password must contain at least 8 characters";
				}
				//specific character checking
				$spc_1 = preg_match("/@/", $pass);
				$spc_2 = preg_match("/$/", $pass);
				$spc_3 = preg_match("/#/", $pass);
				$spc_4 = preg_match("/%/", $pass);

	
				if($spc_1 == 0 || $spc_2 == 0 || $spc_3 == 0 || $spc_4 == 0) {
					$pass_Err = "Password must contain at least one of @, $, #, %";
					
				}					
		
			}
				
		}

	?>
	<form method="post" action="<?php echo ($_SERVER['PHP_SELF']);?>">
		<fieldset>
			<legend><h2>LOGIN</h2></legend>
				<table>
					<tr>
						<td><label>User Name: </label></td>
						<td><input type="text" name="uname" value="<?php echo $uName;?>"></td>
						<td><?php echo $uName_Err?></td>
					</tr>

					<tr>
						<td><label>Password: </label></td>
						<td><input type="password" name="password" value="<?php echo $pass;?>"></td>
						<td><?php echo $pass_Err?></td>
					</tr>
				</table><br>
		<hr>
		<input type="checkbox" name="remember_me" value="remembered">Remember me<br><br>
		<input type="submit" name="submission" value="submit">
		<a href="https://www.aiub.edu">Forgot Password?</a>			
		</fieldset>
	</form>
</body>
</html> 