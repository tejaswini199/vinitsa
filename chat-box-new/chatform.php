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
		<link rel="stylesheet" href="style.css" type="text/css" media="screen" title="no title" charset="utf-8" as="style"/>
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
								
							
								</div>
							</div>
						<form action="http://selectyouruniversity.com/chatform/processxyz.php" method="post" autocomplete="off" name="ChatForm">
							<div class="form-group choose-country clearfix">
								<!-- <figure>
									<img src="http://www.selectyouruniversity.com/images/header-logo.png" alt="logo" />
								</figure> -->
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
									<input type="checkbox" id="counter1" name="countryName" value="Medical UG" checked>Medical UG<br>
										<input type="checkbox" id="counter2" name="countryName" value="Medical PG">Medical PG<br>																				
									</div>
									<button type="button" class="btn-1 next" onclick="showCountryName()" >
									Select 
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
	<input type="text" name="cName" id="txtUserNameValue" >
	<input type="text" name="cEmail" id="txtEmailIdValue" >		
	<input type="tel" name="cMobile" id="txtPhoneNumberValue" >
	<input type="text" name="cWebsite" id="cWebsite" hidden/>
	<input type="text" name="cMassege" id="txtMessageValue">	
</div>
							
				<div class="form-group fixed none footer-div" id="bottom-form">
					<label id="lblTitle" class="form-control hidee"></label>
					<img src="menu-icon.png" class="menu-icon">
					<input type="text" class="form-control" id="txtinfo" placeholder="" name="txtinfo" >
					<img src="enter-icon.png" class="enter-icon" id="enter" onclick="submitClick()">		
					<button type="submit" name="insert" id="btnsubmit">
						<img src="enter-icon.png" class="enter-icon" id="enter" style="pointer-events: auto;">
					</button>
					<select id="IsdCode" class="smat-dropdown-botest lato">
						<option value="+972">Israel +972</option>
					</select>				
				</div>

				<!-- <div class="form-group fixed none" id="bottom-form">
								<label id="lblTitle" class="form-control hidee"></label>
								<input type="text" class="form-control" id="txtinfo" placeholder="" name="txtinfo" >
								<i class="fa fa-caret-right" id="enter" onclick="submitClick()" ></i>					
								<button type="submit" name="insert" id="btnsubmit">
									<i class="fa fa-caret-right"></i>
								</button>
							</div> -->



				<label id="lblStage"></label>
		</form>
			</div>
								
		</div>

					</div>
				</div>
		
		</section>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		
		<!-- Include all compiled plugins (below), or include individual files as needed -->

<script>
function funreset(){
	document.getElementById("lbltitleheading").innerHTML="<p>Admission Started for 2020. Enter Your Contact Information to get Admission Brochure</p>";
	document.getElementById('IsdCode').style.display = "none";
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
	document.getElementById("lblCountryInfo").innerHTML=" Please Select course";
	document.getElementById("lblUserNameInfo").innerHTML="Please Enter Your Name";
	document.getElementById("lblEmailIdInfo").innerHTML="Please Enter Your Valid Email Id";
	document.getElementById("lblPhoneNumberInfo").innerHTML="Mobile Number";
	document.getElementById("lblMessageInfo").innerHTML="Enter Your Message";
	document.getElementById('bottom-form').style.display = "none"; 
}

function showCountryName(){ 
	/*var CountryNameVal="Ukraine";for (i = 0; i < countryName.length; i++) {if (countryName[i].checked) {CountryNameVal = CountryNameVal + countryName[i].value + " ";}}*/
	var array = [];
	var checkboxes = document.querySelectorAll('input[type=checkbox]:checked');
	for (var i = 0; i < checkboxes.length; i++) {
  		array.push(checkboxes[i].value+",")
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
	window.setTimeout(function ()
	{
		document.getElementById('txtinfo').focus();
	}, 0);
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
			window.setTimeout(function ()
    		{
        		document.getElementById('txtinfo').focus();
    		}, 0);
			//document.getElementById('EmailIdInfo').style.display = "block";
			$(EmailIdInfo).fadeIn(2000);
	        document.getElementById('lblTitle').innerHTML ="Please Enter Email Id";        
	        document.getElementById('txtinfo').value="";
	        document.getElementById('txtinfo').placeholder="Please Enter Email Id";
			document.getElementById('lblStage').value="2";
			window.scrollBy(0, 500);		
		}
		
	}	
	else if (cstage=="2")
	{
		if(document.getElementById('txtinfo').value===""){
			document.getElementById("lblStage").value="2";	
		}
		else
		{
			var x = document.getElementById('txtinfo').value;
			var atpos = x.indexOf("@");
			var dotpos = x.lastIndexOf(".");
			if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length)
			{
				document.getElementById('lblEmailIdValue').innerHTML="Not Valid Email Id";
				document.getElementById('lblEmailIdValue').color="blue";
				document.getElementById('EmailIdValue').style.display = "block";
			}
			else
			{
				document.getElementById('lblEmailIdValue').value=document.getElementById('txtinfo').value;
				document.getElementById('lblEmailIdValue').innerHTML=document.getElementById('lblEmailIdValue').value;
				document.getElementById('EmailIdValue').style.display = "block";
				window.setTimeout(function ()
	   			{
	       			document.getElementById('txtinfo').focus();
	   			}, 0);
				//document.getElementById('PhoneNumberInfo').style.display = "block";
				$(PhoneNumberInfo).fadeIn(2000);
				document.getElementById("txtinfo").classList.remove('form-control');
				document.getElementById("txtinfo").classList.add('form-control1');
				document.getElementById('IsdCode').style.display = "block";
        		document.getElementById('lblTitle').innerHTML ="Mobile Number";
        		document.getElementById('txtinfo').value="";
        		document.getElementById('txtinfo').placeholder="Mobile Number";
				document.getElementById('lblStage').value="3";
				window.scrollBy(0, 500);		
			}
		}
			
	}	
	else if (cstage=="3")
	{
		if(document.getElementById('txtinfo').value==="")
		{
			document.getElementById("lblStage").value="3";			
		}
		else
		{
			document.getElementById('lblPhoneNumberValue').value=document.getElementById('IsdCode').value +  document.getElementById('txtinfo').value;
			document.getElementById('lblPhoneNumberValue').innerHTML=document.getElementById('lblPhoneNumberValue').value;
			// document.getElementById('selected_country').style.display = "block";
			document.getElementById('PhoneNumberValue').style.display = "block";
			window.setTimeout(function ()
    		{
        		document.getElementById('txtinfo').focus();
    		}, 0);
		 	document.getElementById('IsdCode').style.display = "none";
		 	document.getElementById("txtinfo").classList.remove('form-control1');
			document.getElementById("txtinfo").classList.add('form-control');
			//document.getElementById('MessageInfo').style.display = "block";
			$(MessageInfo).fadeIn(2000);
        	document.getElementById('lblTitle').innerHTML ="Please Enter Message";
        	document.getElementById('txtinfo').value="";
         	document.getElementById('txtinfo').placeholder="Please Enter Your Message";
			document.getElementById('lblStage').value="4";
			alert("stage 3");		
			//document.getElementById('enter').style.display = "none";
			//document.getElementById('btnsubmit').style.display = "inline-block";			
			window.scrollBy(0, 500);
	
		}
	}
		
	else if (cstage=="4")
	{
		alert("stage 4");
		document.getElementById('txtMessageValue').value=document.getElementById('txtinfo').value;
		alert(document.getElementById('txtMessageValue').value);
		document.getElementById('txtCountryValue').value=document.getElementById('lblCountryValue').value;
		alert(document.getElementById('txtCountryValue').value);
		document.getElementById('txtUserNameValue').value=document.getElementById('lblUserNameValue').value;
		alert(document.getElementById('txtUserNameValue').value);
		document.getElementById('txtEmailIdValue').value=document.getElementById('lblEmailIdValue').value;
		alert(document.getElementById('txtEmailIdValue').value);
		document.getElementById('txtPhoneNumberValue').value=document.getElementById('lblPhoneNumberValue').value;
		alert(document.getElementById('txtPhoneNumberValue').value);
		document.getElementById('cWebsite').value='vinnitsa-chat';
		alert(document.getElementById('cWebsite').value);
		document.getElementById('btnsubmit').submit();
		document.forms["ChatForm"].submit()
		//document.getElementById("ChatForm").submit(); 
		
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