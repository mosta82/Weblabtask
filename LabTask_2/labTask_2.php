<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $dateofbirthErr = $genderErr = $degree = $bloodgroup = "";
$name = $email = $dateofbirth = $gender = $degree = $bloodgroup = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = $_POST["name"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = $_POST["email"];
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["dateofbirth"])) {
    $dateofbirth = "";
  } else {
    $website = $_POST["website"];
    
    if (!filter_var($website, )) {
      $emailErr = "Invalid URL format";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = $_POST["comment"];
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = $_POST["gender"];
  }
}
if(isset($_POST['test1'])){
    echo "checked value1"."<br>";
}
if(isset($_POST['test2'])){
    echo "checked value2";
}

 if(isset($_POST['submit'])){
    if(!empty($_POST['Fruit'])) {
        $selected = $_POST['Fruit'];
        echo 'You have chosen: ' . $selected;
    } else {
        echo 'Please select the value.';
    }
    }

?>

<h2>input</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Date Of Birth: <input type="date" name="dateofbirthirth" value="<?php echo $website;?>">
  <span class="error"><?php echo $dateofbirthErr;?></span>
  <br><br>
  Gender:   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  Degree:
  <input type="checkbox" name="test1" value="value1"> SSC
  <input type="checkbox" name="test2" value="value2"> HSC
  <input type="checkbox" name="test1" value="value1"> BSc
  <input type="checkbox" name="test2" value="value2"> MSc
<br><br>
 Blood Group:
   <select name="Fruit">
        <option value="" disabled selected>Choose option</option>
        <option value="A+">A+</option>
        <option value="B">B</option>
        <option value="AB">AB</option>
        <option value="O">O</option>
        <option value="O+">O+</option>
    </select>

  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>PHP Validation:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $dateofbirth;
echo "<br>";
echo $gender;
echo "<br>";
echo $degree;
echo "<br>";
echo $bloodgroup;
?>

</body>
</html>