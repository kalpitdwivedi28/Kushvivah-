<?php

	$profile = $_GET['profile'];
	$FirstName = $_GET['FirstName'];
	$LastName = $_GET['LastName'];
	$gender = $_GET['gender'];
	$dob = $_GET['day'];
	$dobm = $_GET['month'];
	$doby = $_GET['year'];
	$community = $_GET['community'];
	$gotra = $_GET['gotra'];
	$IsManglik = $_GET['IsManglik'];
	$height = $_GET['feet'];
	$heightinches = $_GET['inches'];
	$skin = $_GET['tone'];
	$stateliving = $_GET['stateliving'];
	$procity = $_GET['procity'];
	$district = $_GET['district'];
	$education = $_GET['education'];
	$degreDetails = $_GET['degreDetails'];
	$professional = $_GET['professional'];
	$companyName = $_GET['companyName'];
	$jobtitle = $_GET['jobtitle'];
	$income = $_GET['income'];
	$fathername = $_GET['fathername'];
	$fatherJob = $_GET['fatherJob'];
	$mothername = $_GET['mothername'];
	$motherJob = $_GET['motherJob'];
	$brothername = $_GET['brothername'];
	$sistername = $_GET['sistername'];
	$maincity = $_GET['maincity'];
	$pincode = $_GET['pincode'];
	$familystate = $_GET['familystate'];
	$mainphone = $_GET['mainphone'];
	$phonenumber = $_GET['phonenumber'];
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Kushvivah</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<header id="mainContener" class="contenermain">
	<div class="header">
			<h1>REGISTER FORM</h1>
	</div>
</header>

<section id="subContener">
	<div class="formcontener">

	<form action="#" method="POST">
		<div id="mainform">
			<div class="personal">	
				<h3>Personal Details</h3>
				<strong>Creating Profile For:</strong>
				<input type="txt" value="<?php echo $profile ?>" class="profile" name="profilefor" readonly><br>
				<strong> First Name:</strong>
				<input type="txt" value="<?php echo $FirstName ?>" class="inputone" name="FirstName" readonly><br>
				<strong>Last Name:</strong>
				<input type="txt" value="<?php echo $LastName ?>" class="inputone" name="LastName" readonly><br>
				<strong>Gender:</strong>
				<input type="txt" value="<?php echo $gender ?>" name="gender" class="gendercomfrom" readonly><br>
				<strong>Date Of Birth:</strong>
				<input type="number" name="dobday" value="<?php echo $dob ?>" class="dobday" readonly>
				<input type="txt" name="dobmonth" value="<?php echo $dobm ?>" class="dobm" readonly>
				<input type="number" name="domyear" value="<?php echo $doby ?>" class="doby" readonly><br>
				<strong>Community:</strong>
				<input type="txt" name="community" value="<?php echo $community ?>"class="commu" readonly><br>
				<strong>Gotra:</strong>
				<input type="txt" name="gotra" value="<?php echo $gotra ?>" class="gotra" readonly><br>
				<strong>Is Manglik:</strong>
				<input type="txt" name="Manglik" value="<?php echo $IsManglik ?>" class="Manglik" readonly><br>
				<strong>Height:</strong>
				<input type="number" name="feet" value="<?php echo $height ?>" class="height" readonly><label>Feet</label>
				<input type="number" name="inches" value="<?php echo $heightinches ?>" class="heightone" readonly><label>Inches</label> <br>	
				<strong>Skin Tone:</strong>
				<input type="txt" name="skin" value="<?php echo $skin  ?>" class="skin" readonly>
			</div>

			<div class="professional">
				<h3>Professional Details</h3>
				<strong>State Living in:</strong>
				<input type="txt" name="prostate" value="<?php echo $stateliving  ?>" class="statepro" readonly><br>
				<strong>City:</strong>
				<input type="text" name="procity" value="<?php echo $procity ?>"  class="textbox" readonly><br>
				<strong>District:</strong>
				<input type="txt" name="district" value="<?php echo $district ?>"  class="textboxone" readonly><br>
				<strong>Education Level:</strong>
				<input type="txt" name="educationLevel" value="<?php echo $education ?>" class="study" readonly><br>
				<strong>Degree Details:</strong>
				<input type="txt" name="degreDetails" value="<?php echo $degreDetails ?>" class="degreedetails" readonly><br>
				<strong>Professional Detail:</strong>
				<input type="txt" name="jobtype" value="<?php echo $professional ?>" class="typejob" readonly><br>
				<strong>Company Name:</strong>
				<input type="txt" name="companyName" value="<?php echo $companyName ?>" class="companyname" readonly><br>
				<strong>Working As:</strong>
				<input type="txt" name="jobtitle" value="<?php echo $jobtitle ?>"  class="pojison" readonly><br>
				<strong>Annual Income:</strong>
				<input type="txt" name="income" value="<?php echo $income ?>" class="aincome" readonly>
			</div>

			<div class="family">
				<h3>Family Details</h3>
				<strong>Father Name:</strong>
				<input type="txt" name="fathername" value="<?php echo $fathername ?>" class="prentname" readonly><br>
				<strong>Father Occupation:</strong>
				<input type="txt" name="fatherJob" value="<?php echo $fatherJob ?>" class="fatherjob" readonly><br>
				<strong>Mother Name:</strong>
				<input type="txt" name="mothername" value="<?php echo $mothername ?>" class="prentname" readonly><br>
				<strong>Mother Occupation:</strong>
				<input type="txt" name="motherJob" value="<?php echo $motherJob ?>" class="mname" readonly><br>
				<strong>Brothers:</strong>
				<input type="txt" name="brothername" value="<?php echo $brothername ?>" class="familymeber" readonly><br>
				<strong>Sisters:</strong>
				<input type="txt" name="sistername" value="<?php echo $sistername ?>" class="familymeber  sister" readonly><br>
				<strong>City:</strong>
				<input type="txt" name="maincity" value="<?php echo $maincity ?>" class="address city" readonly><br>
				<strong>Pincode:</strong>
				<input type="number" name="pincode" value="<?php echo $pincode ?>" class="address pincode" readonly><br>
				<strong>State:</strong>
				<input type="txt" name="familystate" value="<?php echo $familystate ?>" class="statefamily" readonly><br>
				<strong>Phone Number:</strong>
				<input type="number" name="mainphone" value="<?php echo $mainphone ?>" class="phone" readonly><br>
				<strong>Alternate Phone Number:</strong>
				<input type="number" name="phonenumber" value="<?php echo $phonenumber ?>" class="alternatephone" readonly>
			</div>

			<button class="buttonone"><a href="index.html">Edit Form</a></button>
			<input class="buttontwo" type="submit" name="submit" value="Confrom Submit">
		</div>	
	</form>

	</div>
</section>


</body>
</html>