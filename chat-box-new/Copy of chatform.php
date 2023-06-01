<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Bootstrap 101 Template</title>

		<!-- Bootstrap -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel='stylesheet prefetch' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
		<link rel="stylesheet" href="style.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body onload="funreset()">
		<section class="sec-content" id="sec">
			<div class="container">
				<div class="row">
					<div class="col-sm-offset-4 col-sm-4">
						<div class="main-body">
							<div class="abs ">
								<div class="">
									<span class="text"> 
										
									</span>
								<span class="pull-right">
									 <i class="fa fa-refresh" aria-hidden="true" id="reset-form" onclick="funreset()"></i>
								</span>
							
								</div>
							</div>
						<form action="processxyz.php" method="post" autocomplete="off">
							<div class="form-group choose-country clearfix">
								<figure>
									<img src="http://www.selectyouruniversity.com/images/header-logo.png" alt="logo" />
								</figure>
								<div>
									<label name="lbltitleheading" id="lbltitleheading">									
									</label>
								</div>
								<!-- Default unchecked -->
								<div class="bg-2">
								<div class="classCountryInfo user-answer " id="classCountryInfo">
										<label name="lblCountryInfo" id="lblCountryInfo"></label>
									</div>
								<div id="CountryNameInfo">
									
									<div id="divcountryName">
									<input type="checkbox" id="counter1" name="countryName" value="Ukraine">MBBS in Ukraine<br>
										<input type="checkbox" id="counter2" name="countryName" value="Ireland">MBBS in Ireland<br>
										<input type="checkbox" id="counter3" name="countryName" value="USA">MBBS in USA<br>
										<input type="checkbox" id="counter4" name="countryName" value="China">MBBS in China<br>
										<input type="checkbox" id="counter5" name="countryName" value="Poland">MBBS in Poland<br>
										<input type="checkbox" id="counter6" name="countryName" value="Germany">MBBS in Germany<br>
										<input type="checkbox" id="counter7" name="countryName" value="Ireland">MBBS in Bangladesh<br>
										<input type="checkbox" id="counter8" name="countryName" value="Russia">MBBS in Russia<br>
										<input type="checkbox" id="counter8" name="countryName" value="India">MBBS in India<br>
										<input type="checkbox" id="counter6" name="countryName" value="Other" checked>Other<br>			
									</div>
									<button type="button" class="btn-1 next" onclick="showCountryName()" >
									Select Country
								</button>
									</div>
								</div>
									<!--rdCountryName-->
									<div class="CountryNameValue user-answer" id="CountryNameValue">
										<label name="lblCountryValue" id="lblCountryValue"></label>
									</div>									
									
										<div class="UserNameInfo" id="UserNameInfo">
											<label name="lblUserNameInfo" id="lblUserNameInfo"></label>
										</div>
										<div class="UserNameValue user-answer" id="UserNameValue">
											<label name="lblUserNameValue" id="lblUserNameValue"></label>
										</div>
									
									<!--ENd-->
									<!--Stage--2-->						
										<div class="EmailIdInfo" id="EmailIdInfo">
											<label name="lblEmailIdInfo" id="lblEmailIdInfo"></label>
										</div>
										<div class="EmailIdValue user-answer" id="EmailIdValue">
											<label name="lblEmailIdValue" id="lblEmailIdValue"></label>
										</div>
									
									<!--Stage3-->
									
										<div class="PhoneNumberInfo" id="PhoneNumberInfo">
											<label name="lblPhoneNumberInfo"  id="lblPhoneNumberInfo"></label>
										</div>
										<div class="PhoneNumberValue user-answer" id="PhoneNumberValue">
											<label name="lblPhoneNumberValue"  id="lblPhoneNumberValue"></label>
										</div>
									
										
										<div class="MessageInfo" id="MessageInfo">
											<label name="lblMessageInfo" id="lblMessageInfo"></label>
										</div>
										<div class="MessageValue user-answer" id="MessageValue">
											<label name="lblMessageValue" id="lblMessageValue"></label>
										</div>
									
									<!--end-->
								</div>
								<!-- Default checke -->
								<div>
	<input type="text" name="txtCountryValue" id="txtCountryValue" >
	<input type="text" name="txtUserNameValue" id="txtUserNameValue" >
	<input type="text" name="txtEmailIdValue" id="txtEmailIdValue" >
	<input type="text" name="txtPhoneNumberValue" id="txtPhoneNumberValue" >
	<input type="text" name="txtMessageValue" id="txtMessageValue">	
</div>
							
							<div class="form-group fixed none" id="bottom-form">
								<label id="lblTitle" class="form-control hidee"></label>
								<input type="text" class="form-control" id="txtinfo" placeholder="" name="txtinfo" >
								<!-- <input type="button" value="Enter" id="enter" class="btn"  onclick="submitClick()">	 -->
								<i class="fa fa-caret-right" id="enter" onclick="submitClick()" ></i>					
								<!-- <input type="submit" name="insert" id="btnsubmit" value="Submit" class="btn" > -->
								<!--  <i type="submit" name="insert" class="fa fa-caret-right" id="btnsubmit" ></i>  -->
								<button type="submit" name="insert" id="btnsubmit">
									<i class="fa fa-caret-right"></i>
								</button>
							</div>
							<label id="lblStage"></label>
						</form>
						</div>
								
							</div>

					</div>
				</div>
		
		</section>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->

<script>

	function funreset(){
		
 document.getElementById("lbltitleheading").innerHTML="Admission Started for 2018. Enter Your Contact Information to Download Admission Brochure";

 document.getElementById('CountryNameInfo').style.display = "block";
document.getElementById('classCountryInfo').style.display = "block"; 
document.getElementById('CountryNameValue').style.display = "none";
document.getElementById('UserNameInfo').style.display = "none";
document.getElementById('UserNameValue').style.display = "none";
document.getElementById('EmailIdInfo').style.display = "none";
document.getElementById('EmailIdValue').style.display = "none";
document.getElementById('PhoneNumberInfo').style.display = "none";
document.getElementById('PhoneNumberValue').style.display = "none";
document.getElementById('MessageInfo').style.display = "none";
document.getElementById('MessageValue').style.display = "none";
document.getElementById('btnsubmit').style.display = "none";
document.getElementById('txtCountryValue').style.display = "none";
document.getElementById('txtUserNameValue').style.display = "none";
document.getElementById('txtEmailIdValue').style.display = "none";
document.getElementById('txtPhoneNumberValue').style.display = "none";
document.getElementById('txtMessageValue').style.display = "none"; 
 document.getElementById("lblCountryInfo").innerHTML="Please Choose Your Course";
 document.getElementById("lblUserNameInfo").innerHTML="Please Enter Your Name";
 document.getElementById("lblEmailIdInfo").innerHTML="Please Enter Your Valid Email Id";
 document.getElementById("lblPhoneNumberInfo").innerHTML="Please Enter Your Mobile Number";
 document.getElementById("lblMessageInfo").innerHTML="Enter Your Message";
document.getElementById('bottom-form').style.display = "none"; 

}


function showCountryName(){ 
	/*var CountryNameVal="Ukraine";
	for (i = 0; i < countryName.length; i++) {
    if (countryName[i].checked) {
        CountryNameVal = CountryNameVal + countryName[i].value + " ";
    }
}*/
var array = []
var checkboxes = document.querySelectorAll('input[type=checkbox]:checked')

for (var i = 0; i < checkboxes.length; i++) {
  array.push(checkboxes[i].value+"<br>")
}
document.getElementById('classCountryInfo').style.display = "block";
document.getElementById('CountryNameValue').style.display = "block";
document.getElementById('CountryNameInfo').style.display = "none";
document.getElementById('lblCountryValue').value = array;
document.getElementById('lblCountryValue').innerHTML=document.getElementById('lblCountryValue').value;
//document.getElementById('UserNameInfo').style.display = "block";
 $(UserNameInfo).fadeIn(2000);
document.getElementById('lblTitle').innerHTML ="Please Enter Your Name";
document.getElementById('txtinfo').placeholder="Please Enter Your Name";
document.getElementById('bottom-form').style.display="block";
document.getElementById('bottom-form').style.display = "block"; 
document.getElementById("lblStage").value="1";
window.scrollBy(0, 500);
}

function submitClick(){
	var cstage=document.getElementById('lblStage').value;
	if (cstage=="1"){
		if(document.getElementById('txtinfo').value===""){
			document.getElementById("lblStage").value="1";
			
		}
		else{
			document.getElementById('lblUserNameValue').value=document.getElementById('txtinfo').value;
		document.getElementById('lblUserNameValue').innerHTML=document.getElementById('lblUserNameValue').value;
		document.getElementById('UserNameValue').style.display = "block";
		//document.getElementById('EmailIdInfo').style.display = "block";
		$(EmailIdInfo).fadeIn(2000);
        document.getElementById('lblTitle').innerHTML ="Please Enter Email Id";        
        document.getElementById('txtinfo').value="";
        document.getElementById('txtinfo').placeholder="Please Enter Email Id";
		document.getElementById('lblStage').value="2";
		window.scrollBy(0, 500);
		}
		
	}	
	else if (cstage=="2"){
		if(document.getElementById('txtinfo').value===""){
			document.getElementById("lblStage").value="2";	
		}
		else{
			var x = document.getElementById('txtinfo').value;
			var atpos = x.indexOf("@");
				var dotpos = x.lastIndexOf(".");
				if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length){
					document.getElementById('lblEmailIdValue').innerHTML="Not Valid Email Id";
					document.getElementById('lblEmailIdValue').color="blue";
					document.getElementById('EmailIdValue').style.display = "block";
				}
				else{
					document.getElementById('lblEmailIdValue').value=document.getElementById('txtinfo').value;
		document.getElementById('lblEmailIdValue').innerHTML=document.getElementById('lblEmailIdValue').value;
		document.getElementById('EmailIdValue').style.display = "block";
		//document.getElementById('PhoneNumberInfo').style.display = "block";
		$(PhoneNumberInfo).fadeIn(2000);
        document.getElementById('lblTitle').innerHTML ="Please Enter Mobile Number";
        document.getElementById('txtinfo').value="";
        document.getElementById('txtinfo').placeholder="Please Enter Mobile Number";
		document.getElementById('lblStage').value="3";
		window.scrollBy(0, 500);
	}
				}
			
		}
		
	
	else if (cstage=="3"){
		if(document.getElementById('txtinfo').value===""){
			document.getElementById("lblStage").value="3";
			
		}
		else{
			document.getElementById('lblPhoneNumberValue').value=document.getElementById('txtinfo').value;
		document.getElementById('lblPhoneNumberValue').innerHTML=document.getElementById('lblPhoneNumberValue').value;
		document.getElementById('PhoneNumberValue').style.display = "block";
		//document.getElementById('MessageInfo').style.display = "block";
		$(MessageInfo).fadeIn(2000);
        document.getElementById('lblTitle').innerHTML ="Please Enter Message";
        document.getElementById('txtinfo').value="";
         document.getElementById('txtinfo').placeholder="Please Enter Your Message";
		document.getElementById('lblStage').value="4";		
	document.getElementById('enter').style.display = "none";
	document.getElementById('btnsubmit').style.display = "inline-block";
	document.getElementById('txtCountryValue').value=document.getElementById('lblCountryValue').value;
	document.getElementById('txtUserNameValue').value=document.getElementById('lblUserNameValue').value;
	document.getElementById('txtEmailIdValue').value=document.getElementById('lblEmailIdValue').value;
	document.getElementById('txtPhoneNumberValue').value=document.getElementById('lblPhoneNumberValue').value;
	window.scrollBy(0, 500);
	}
		}
		
	else if (cstage=="4"){
		//document.getElementById('lblMessageValue').value=document.getElementById('txtinfo').value;
		//.getElementById('lblMessageValue').innerHTML=document.getElementById('lblMessageValue').value;
		//document.getElementById('MessageValue').style.display = "block";
		//var lcv=document.getElementById('lblCountryValue').value;
//var lun=document.getElementById('lblUserNameValue').value;
//var le=document.getElementById('lblEmailIdValue').value;
//var lpv=document.getElementById('lblPhoneNumberValue').value;
//var lmv=document.getElementById('lblMessageValue').value;
//document.getElementById('lblTitle').innerHTML=lcv+lun+le+lpv+lmv;

	}
}

function insertData(lcv,lun,le,lpv,lmv){
	
}
$(document).keypress(
  function(event){
    if (event.which == '13') {
      event.preventDefault();
    }
});
</script>
<script>
 function CloseWindow() {
       self.close();
    }
</script>

	</body>
</html>