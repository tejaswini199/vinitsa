<?php
$serverName = "198.71.225.145"; //serverName\instanceName
$connectionInfo = array( "Database"=>"waytoabroad", "UID"=>"sa", "PWD"=>"@WSXzaq1");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
  $cname = $_POST['qname'];
  $cphone = $_POST['qphone'];
  $cemail = $_POST['qemail'];
  $cmessage = $_POST['qmessage'];
  $dtdate = date("y-m-d");
  $tsql = "INSERT INTO ContactDetails(cName,cMobile,cEmail,cMassege,cWebsite,dtCreatedDate1) VALUES ('$cname','$cphone','$cemail','$cmessage','vinnitsa-index','$dtdate')";
  $stmt = sqlsrv_query( $conn, $tsql);
  if( $stmt === false)
  {
       echo "Error in query preparation/execution.\n";
       die( print_r( sqlsrv_errors(), true));
  }
else{

   header("location: thankyou.php");
}
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>
