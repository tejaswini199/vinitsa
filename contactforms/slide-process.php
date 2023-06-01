<?php
$serverName = "198.71.225.145"; //serverName\instanceName
$connectionInfo = array( "Database"=>"111Waytoabroad", "UID"=>"waytoabroad", "PWD"=>"@WSXzaq1");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
  /* Set up and execute the query. */
  // $tsql = "SELECT cname, cpassword
  //          FROM userloginMater";
  $cname = $_POST['cName'];
   $cemail = $_POST['cEmail'];
  $cphone= $_POST['cMobile'];
  $cmessage = $_POST['cMassege'];
  $dtdate = date("y-m-d");
  $tsql = "INSERT INTO ContactDetails(cName,cMobile,cEmail,cMassege,cWebsite,dtCreatedDate1) VALUES ('$cname','$cphone','$cemail','$cmessage','vinnitsa-slide-contactform','$dtdate')";
  $stmt = sqlsrv_query( $conn, $tsql);
if( $stmt === false)
  {
       echo "Error in query preparation/execution.\n";
       die( print_r( sqlsrv_errors(), true));
  }
else{

  // header("location: thankyou.php");
}
  
  /* Free statement and connection resources. */
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>
 ?>
<!DOCTYPE html>
<html>
	<head>
		<title> PHP INSERT DATA </title>
		<meta charset="UTF-8">
		<link rel='stylesheet prefetch' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<style>
			.content{
				padding:60px 20px;
			}
			.heading h2{
				font-size:22px;
				color:#0dd5a6;
			}
			.fa{
				width:32px;
				height:32px;
				line-height:32px;
				border-radius:50%;
				text-align:center;
				background:#0ddfa6;
				color:#fff;
				margin:5px 0;
			}
			ul{
				padding:0;
				margin:0;
			}
			li{
				text-decoration:none;
				list-style-type:none;
			}
		</style>
		<body>
		<div class="content">
			
			<div class="heading">
				<h2>
					Your Message Submitted
				</h2>
			</div>
			<p>
				Thank you for contacting us. Our Representative will call you soon.
			</p>
			
			<ul>
				<li>
					<a href="https://www.facebook.com/SelectyouruniversityIndia/" target="_blank"><i class="fa fa-facebook"></i> Facebook</a>
				</li>
				<li>
					<a href="https://www.youtube.com/channel/UCe24ZV4pfyXlz39lmFh8BNQ" target="_blank"><i class="fa fa-youtube"></i> Youtube </a> 
				</li>
				<li>
					<a href="https://www.instagram.com/selectyouruniversity/" target="_blank"> <i class="fa fa-instagram"></i> Instagram  </a> 
				</li>
				<li>
					<a href="https://twitter.com/mbbsconsultant" target="_blank"> <i class="fa fa-twitter"></i> Twitter </a> 
				</li>
			</ul>
		</div>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>	
		
		</body>
		</html>