<?php
/*if($_GET){
 if(isset($_GET['insert'])){
 insert();
 }elseif(isset($_GET['select'])){
 select();
 }
 }
 function insert()
 {*/
// php code to Insert data into mysql database from input tex
if (isset($_POST['insert'])) {
	$hostname = "50.62.209.159";
	$username = "AdminSelect";
	$password = "#EDCxsw2!QAZ";
	$databaseName = "selectyouruniversity";
	// get values form input text and number
	$cvName = $_POST['txtUserNameValue'];
	$cvMobile = $_POST['txtPhoneNumberValue'];
	$cvEmail = $_POST['txtEmailIdValue'];
	$cvMassege = $_POST['txtinfo'];
	$dtdate = date("y-m-d");
	$cWebsite = $_POST['txtCountryValue'];
	// connect to mysql database using mysqli
	$connect = mysqli_connect($hostname, $username, $password, $databaseName);
	// mysql query to insert data
	$query = "INSERT INTO ContactDetails(cName,cMobile,cEmail,cMassege,cWebsite,dtCreatedDate) VALUES ('$cvName','$cvMobile','$cvEmail','$cvMassege','$cWebsite','$dtdate')";

	$result = mysqli_query($connect, $query);
	// check if mysql query successful
	if ($result) {
		//echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
		header("location: index.php");
		exit ;
	} else {
		echo 'Data Not Inserted';
		//$lblStatus = "Data not Inserted";
	}

	mysqli_close($connect);
	}
?>