<?php

	$profile = $_POST['profile'];
	$FirstName = $_POST['FirstName'];
	$LastName = $_POST['LastName'];
	$gender = $_POST['gender'];
	$dob = $_POST['day'];
	$dobm = $_POST['month'];
	$doby = $_POST['year'];
	$community = $_POST['community'];
	$gotra = $_POST['gotra'];
	$IsManglik = $_POST['IsManglik'];
	$height = $_POST['feet'];
	$heightinches = $_POST['inches'];
	$skin = $_POST['tone'];
	$stateliving = $_POST['stateliving'];
	$procity = $_POST['procity'];
	$district = $_POST['district'];
	$education = $_POST['education'];
	$degreDetails = $_POST['degreDetails'];
	$professional = $_POST['professional'];
	$companyName = $_POST['companyName'];
	$jobtitle = $_POST['jobtitle'];
	$income = $_POST['income'];
	$fathername = $_POST['fathername'];
	$fatherJob = $_POST['fatherJob'];
	$mothername = $_POST['mothername'];
	$motherJob = $_POST['motherJob'];
	$brothername = $_POST['brothername'];
	$sistername = $_POST['sistername'];
	$maincity = $_POST['maincity'];
	$pincode = $_POST['pincode'];
	$familystate = $_POST['familystate'];
	$mainphone = $_POST['mainphone'];
	$phonenumber = $_POST['phonenumber'];
	
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

	<form action="confromform.php" method="POST">
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