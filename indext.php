<!DOCTYPE html>
<html>
<head>
	<title>Registration From</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="main">
<div class="register">
<h2>Register Here</h2>
<form id="register" method="post" action="#">
	<label>First Name : </label>
	<br>
	<input type="text" name="fname" id="name" placeholder="Enter Your First Name">
	<br><br>
	<label>Last Name : </label>
	<input type="text" name="lname" id="name" placeholder="Enter Your Last Name">
	<br><br>
	<label>Your Age : </label>
	<br>
	<input type="number" name="Age" id="name" placeholder="How Old are You?">
	<br><br>
	<label>Email : </label>
	<br>
	<input type="Email" name="Email" id="name" placeholder="Enter Your Valid Email">
	<br><br>
	<label>Gender : </label>
	<br>
	
	<input type="radio" name="MGender" id="male">
<span id="male">Male</span>
<input type="radio" name="FGender" id="female">
<span id="female">Female</span>
<br><br>
<label>Known Language : </label>
<br>
<input type="radio" name="Hlong" id="hindi">
<span id="hindi">Hindi</span>
<input type="radio" name="Elong" id="eng">
<span id="eng">English</span>
<input type="radio" name="Blong" id="ben">
<span id="ben">Bengali</span>
<br><br>
<input type="submit" value="submit" name="submit" id="submit">

</form>
</div>
</body>
</head>
</html>

<?php
    if($_POST['submit'])
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $age = $_POST['Age'];
        $email = $_POST['Email'];
        $MGender = $_POST['MGender'];
        $FGender = $_POST['FGender'];
        $Hlong = $_POST['Hlong'];
        $Elong = $_POST['Elong'];
        $Blong = $_POST['Blong'];

        inse
    }
?>