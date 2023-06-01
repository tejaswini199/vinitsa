<?php
		$Ipaddress = $_SERVER['REMOTE_ADDR'];
		$CurrDate = date("y-m-d");

		$servername = "50.62.209.159";
		$username = "AdminSelect";
		$password = "#EDCxsw2!QAZ";
		$dbname = "selectyouruniversity";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn -> connect_error) {
			die("Connection failed: " . $conn -> connect_error);
		}
		$sql = "INSERT INTO websiteipdetails (Ipaddress, cwebsiteName, dtCreatedDate)
VALUES ('$Ipaddress', 'vinnitsa', '$CurrDate')";

		if ($conn -> query($sql) === TRUE) {

		} else {
			echo "Error: " . $sql . "<br>" . $conn -> error;
		}

		$conn -> close();
	?>
<header class="bottom-nav" data-spy="affix" data-offset-top="60" data-offset-bottom="200">
<nav class="navbar navbar-default">
<div class="container">
<div class="row">
<div class="col-sm-3">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="./"><img src="images/logo.png" alt="Vinnitsa National Medical University" class="img-responsive" /></a><br><br>
<span class="text-center d-block"><i class="fa fa-phone"></i><a href="tel:180030700033">1800 3070 0033</a></span>
</div>
</div>
<div class="col-sm-9">
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav" id="nav">
<li>
<a href="./">Home <span class="sr-only">(current)</span></a>
</li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About<span class="caret"></span></a>
<ul class="dropdown-menu">
<li>
<a href="about-vnmu.php">About Us</a>
</li>
<li>
<a href="history.php">History </a>
</li>
<li>
<a href="vinnitsa.php">About Vinnitsa City</a>
</li>
<li>
<a href="rectors-appeal.php">Rectors Appeal</a>
</li>
</ul>
</li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Courses<span class="caret"></span></a>
<ul class="dropdown-menu">
<li>
<a href="general-medicine.php">Faculty of General Medicine</a>
</li>
<li>
<a href="faculty-of-dentistry.php">Faculty of Dentistry</a>
</li>
<li>
<a href="faculty-of-pharmacy.php">Faculty of Pharmacy</a>
</li>
<li>
<a href="faculty-of-preparatory.php">Faculty of Preparatory</a>
</li>
</ul>
</li>
<li>
<a href="fee-structure.php">Fee Stucture</a>
</li>
<li>
<a href="visa.php">Visa</a>
</li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admission<span class="caret"></span></a>
<ul class="dropdown-menu">
<li>
<a href="admission-process.php">Admission Process</a>
</li>
<li>
<a href="admission.php">Admission 2022-2023</a>
</li>
</ul>
</li>
<li>
<a href="contact.php">Contact</a>
</li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li>
<span><a href="../admissionform/admission-form.php" target="_blank" class="applynow">Admission Form</a></span>
</li>
</ul>
</div>
</div>
</div>
</div>
</nav>
</header>
<div class="bootom-header">
<div class="container">
<div class="row">
<div class="col-sm-4">
<div class="address-details">
<p class="address">
Pyrohova St, 56, Vinnytsia,
<br>
Vinnyts'ka oblast, Ukraine, 21018
</p>
</div>
</div>
<div class="col-sm-4">
<div class="social-bg">
<ul class="social-li text-center">
<li>
<a href="https://www.facebook.com/SelectyouruniversityIndia/" target="_blank"><i class="fa fa-facebook"> </i></a>
<a href="https://www.youtube.com/channel/UCe24ZV4pfyXlz39lmFh8BNQ?sub_confirmation=1" target="_blank"><i class="fa fa-youtube"> </i></a>
<a href="https://api.whatsapp.com/send?phone=+919689388557&text=I'm%20interested%20in%20MBBS%20Admission%20with%20lowest%20fees" target="_blank"><i class="fa fa-whatsapp"> </i></a>
</li>
</ul>
</div>
</div>
<div class="col-sm-4">
<div class="address-details clearfix">
<p class="phone pull-right">
<a href="tel:180030700033">1800 3070 0033</a>
<br>
For enquiry
</p>
</div>
</div>
</div>
</div>
</div>
<script>/*<![CDATA[*/function isNumberKey(b){var a=(b.which)?b.which:event.keyCode;if(a>31&&(a<48||a>57)){return false}return true};/*]]>*/</script>
