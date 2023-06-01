<?php
$serverName = "160.153.247.31"; //serverName\instanceName
$connectionInfo = array( "Database"=>"waytoabroad", "UID"=>"sa", "PWD"=>"@WSXzaq1");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if( $conn ) {
  $formnumber1 = $_POST['formno'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$fathername = $_POST['fathername'];
$mothername =$_POST['mothername'];
$dob = $_POST['dob'];
$passport = $_POST['passport'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];
$city = $_POST['city'];
$state = $_POST['state'];
$pincode = $_POST['pincode'];
$permanentaddress = $_POST['permanentaddress'];
$permanentcity = $_POST['permanentcity'];
$permanentstate = $_POST['permanentstate'];
$permanentpin = $_POST['permanentpin'];
$parentmobile = $_POST['parentmobile'];
$email = $_POST['email'];
$college = $_POST['college'];
$tenthpercentage = $_POST['tenthpercentage'];
$tenthyear = $_POST['tenthyear'];
$twelthpercentage =$_POST['twelthpercentage'];
$twelthyear = $_POST['twelthyear'];
$tenthmarks = $_POST['tenthmarks'];
$tenthoutof = $_POST['tenthoutof'];
$twelthmarks = $_POST['twelthmarks'];
$twelthoutof =$_POST['twelthoutof'];
$physics = $_POST['physics'];
$chemistry = $_POST['chemistry'];
$biology = $_POST['biology'];
$pcb = $_POST['pcb'];
$aggregate = $_POST['aggregate'];
$neetyear = $_POST['neetyear'];
$neetmarks =$_POST['neetmarks'];
$schoolboard = $_POST['schoolboard'];
  $tsql = "INSERT INTO admform (formno,firstname,lastname,fathername,mothername,dob,passport,address,mobile,city,state,pincode,permanentaddress,permanentcity,permanentstate,permanentpin,parentmobile,email,college,tenthpercentage,tenthyear,twelthpercentage,twelthyear,tenthmarks,tenthoutof,twelthmarks,twelthoutof,neetyear,neetmarks,schoolboard,physics,chemistry,biology,pcb,aggregate) VALUES('$formnumber1','$firstname','$lastname','$fathername','$mothername','$dob','$passport','$address','$mobile','$city','$state','$pincode','$permanentaddress','$permanentcity','$permanentstate','$permanentpin','$parentmobile','$email','$college','$tenthpercentage','$tenthyear','$twelthpercentage','$twelthyear','$tenthmarks','$tenthoutof','$twelthmarks','$twelthoutof','$neetyear','$neetmarks','$schoolboard','$physics','$chemistry','$biology','$pcb','$aggregate')";
  $stmt = sqlsrv_query( $conn, $tsql);
  if( $stmt === false)
  {
       echo "Error in query preparation/execution.\n";
       die( print_r( sqlsrv_errors(), true));
  }
else{
	header('Location: success.php');
}
  sqlsrv_free_stmt( $stmt);
  sqlsrv_close( $conn);
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>