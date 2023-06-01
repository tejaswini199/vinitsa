<?php
error_reporting(0);
$formnumber = ($_GET['cformno']);

if ($formnumber=="") {
  $formnumber = "22222";
}

 ?>
<!DOCTYPE html>
<html lang=en dir=ltr>
<head>
<meta charset=utf-8>
<title></title>
<link rel=stylesheet href=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css integrity=sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u crossorigin=anonymous>
<link rel=stylesheet href=style.css>
<link rel=canonical href=https://vinnitsanmu.com/admissionform/admission-form.php>
<link rel=icon href=../images/vinnitsa.png />
<script src=https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js></script>
</head>
<body>
<div class=form-overlay>
<div class=container>
<div class=form-bg-color>
<div class="form-title text-center">
<img src=https://vinnitsanmu.com/images/logo.png class=img-responsive alt />
<h1>Application form for Vinnitsa National medical University</h1>
</div>
<div class=row>
<form id=admmiform name=admmiform action=https://dnipro-nmu.com/admissionform/ainsert.php method=post>
<section>
<div class=upperform>
<div class=text-left>
<h2>Personal Information</h2>
</div>
<div class id=hiddendivformno>
<input type=text name=formno value=<?php echo $formnumber ?>>
</div>
<div class=col-sm-6>
<div class=form-group>
<label for=FirstName>First Name</label>
<input class=form-control type=text name=firstname id=FirstName required />
</div>
</div>
<div class=col-sm-6>
<div class=form-group>
<label for>Last Name</label>
<input class=form-control type=text name=lastname id=lastName required />
</div>
</div>
<div class=col-sm-6>
<div class=form-group>
<label for=MotherName>Mother's Name</label>
<input class=form-control type=text name=mothername id=MotherName required />
</div>
</div>
<div class=col-sm-6>
<div class=form-group>
<label for=FatherName>Father's Name</label>
<input class=form-control type=text name=fathername id=FatherName required />
</div>
</div>
<div class=col-sm-6>
<div class=form-group>
<label for=DOB>Date of Birth</label>
<input class=form-control type=date name=dob id=DOB required autofocus />
</div>
</div>
<div class=col-sm-6>
<div class=form-group>
<label for=Nationality>Nationality</label>
<select class=form-control name=nationality id=Nationality>
<option value=India>Indian</option>
<option value=Other>Other</option>
</select>
</div>
</div>
</div>
</section>
<section>
<div class=emailpassport>
<div class=col-sm-6>
<div class=form-group>
<label for=email>Email</label>
<input class=form-control type=email name=email id=Email onchange=validateEmail() required />
</div>
</div>
<div class=col-sm-6>
<div class=form-group>
<label for=mobile>Mobile</label>
<input class=form-control type=text name=mobile id=mobile onchange=validateMobile() required />
<span id=mobile1></span>
</div>
</div>
<div class=col-sm-6>
<div class=form-group>
<input type=checkbox id=chkPassport onclick=myFunction2() />
Do you have Passport?
<div id=dvPassport style=display:none>
<input class=form-control type=text name=passport id=Passport placeholder="Passport Number" />
</div>
</div>
</div>
</div>
</section>
</div>
<div class=space-check>
<div class=row>
<div class=text-left>
<h2>Address Information</h2>
</div>
<div class=permanentaddress>
<div class=col-sm-6>
<div class=form-group>
<label for=permanentaddress>Permanent Address</label>
<textarea class=form-control name=permanentaddress id=PermanentAddress required rows=4 required> </textarea>
</div>
</div>
<div class=col-sm-6>
<div class=row>
<div class=col-sm-6>
<div class=form-group>
<label for=PermanentCity>City</label>
<input class=form-control name=permanentcity id=PermanentCity>
</div>
</div>
<div class=col-sm-6>
<div class=form-group>
<label for=PermanentState>State</label>
<select class=form-control name=permanentstate id=PermanentState>
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value=Assam>Assam</option>
<option value=Bihar>Bihar</option>
<option value=Chhattisgarh>Chhattisgarh</option>
<option value=Goa>Goa</option>
<option value=Gujarat>Gujarat</option>
<option value=Haryana>Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value=Jharkhand>Jharkhand</option>
<option value=Karnataka>Karnataka</option>
<option value=Kerala>Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value=Maharashtra>Maharashtra</option>
<option value=Manipur>Manipur</option>
<option value=Meghalaya>Meghalaya</option>
<option value=Mizoram>Mizoram</option>
<option value=Nagaland>Nagaland</option>
<option value=Odisha>Odisha</option>
<option value=Punjab>Punjab</option>
<option value=Rajasthan>Rajasthan</option>
<option value=Sikkim>Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value=Telangana>Telangana</option>
<option value=Tripura>Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value=Uttarakhand>Uttarakhand</option>
<option value="West Bengal">West Bengal</option>
</select>
</div>
</div>
</div>
<div class=row>
<div class=col-sm-6>
<div class=form-group>
<label for=parentmobile>Parent's Mobile</label>
<input class=form-control type=text name=parentmobile id=ParentMobile required autofocus onchange="return validatePMobile()" />
</div>
</div>
<div class=col-sm-6>
<div class=form-group>
<label for=PermanentPin>Pincode</label>
<input class=form-control type=text name=permanentpin id=PermanentPin required onchange=validatePin();myFunction1() />
</div>
</div>
</div>
</div>
<div class=col-sm-12>
<div class=checkbox-color>
<input type=checkbox name value id=checkaddress onclick=myFunction1()> <span>Check if permanent address is current address</span>
</div>
</div>
</div>
<div class=col-sm-6>
<div class=form-group>
<label for=currentaddress>Current Address</label>
<textarea class=form-control type=text name=address id=Address required rows=4 required></textarea>
</div>
</div>
<div class=col-sm-3>
<div class=form-group>
<label for=City>City</label>
<input class=form-control name=city id=City>
</div>
</div>
<div class=col-sm-3>
<div class=form-group>
<label for=State>State</label>
<select class=form-control name=state id=State>
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value=Assam>Assam</option>
<option value=Bihar>Bihar</option>
<option value=Chhattisgarh>Chhattisgarh</option>
<option value=Goa>Goa</option>
<option value=Gujarat>Gujarat</option>
<option value=Haryana>Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value=Jharkhand>Jharkhand</option>
<option value=Karnataka>Karnataka</option>
<option value=Kerala>Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value=Maharashtra>Maharashtra</option>
<option value=Manipur>Manipur</option>
<option value=Meghalaya>Meghalaya</option>
<option value=Mizoram>Mizoram</option>
<option value=Nagaland>Nagaland</option>
<option value=Odisha>Odisha</option>
<option value=Punjab>Punjab</option>
<option value=Rajasthan>Rajasthan</option>
<option value=Sikkim>Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value=Telangana>Telangana</option>
<option value=Tripura>Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value=Uttarakhand>Uttarakhand</option>
<option value="West Bengal">West Bengal</option>
</select>
</div>
</div>
<div class=col-sm-3>
<div class=form-group>
<label for=Pincode>Pincode</label>
<input class=form-control type=text name=pincode id=Pincode required onchange="return validatePincode()" rows=1 />
</div>
<p id=pincode1></p>
</div>
</div>
</div>
<div class=space-check>
<div class=text-left>
<h2>Education Qualification</h2>
</div>
<hr>
<div class=row>
<div class=text-left>
<h3>SSC Qualification</h3>
</div>
<div class=col-sm-12>
<div class=form-group>
<label for=schoolboard>School Board</label>
<select class=form-control name=schoolboard id=SchoolBoard>
<option>Andhra Pradesh Board of Intermediate Education : (BIEAP)</option>
<option>Andhra Pradesh Board of Secondary Education : (BSEAP)</option>
<option>Andhra Pradesh Open School Society : (APOSS)</option>
<option>Telangana Board of Intermediate & Education : (BIETS)</option>
<option>Telangana Board of Secondary Education : (BSETS)</option>
<option>Andhra Pradesh Open School Society : (APOSS)</option>
<option>Board of Higher Secondary Education, Delhi (BHSE Delhi)</option>
<option>Assam Higher Secondary Education Council : (AHSEC)</option>
<option>Board of Secondary Education Assam : (SEBA)</option>
<option>Bihar School Examination Board : (BSEB)</option>
<option>Bihar Board of Open Schooling and Examination : (BBOSE)</option>
<option>Bihar State Madarsa Education Board : (BSMEB)</option>
<option>Bihar Sanskrit Shiksha Board : (BSSB)</option>
<option>Board of Youth Education India (BYEI)</option>
<option>Central Board of Secondary Education : (CBSE)</option>
<option>Chhattisgarh State Open School (CGSOS)</option>
<option>Chhattisgarh Madhyamik Shiksha Mandal (CGBSE)</option>
<option>Chhattisgarh Madarsa Board</option>
<option>Council for the Indian School Certificate Examinations (CISCE)</option>
<option>Goa Board of Secondary and Higher Secondary Education (GBSHSE)</option>
<option>Gujarat Secondary and Higher Secondary Education Board : (GSEB)</option>
<option>Haryana Board Of Secondary Education (BSEH)</option>
<option>Himachal Pradesh Board of School Education (HPBOSE)</option>
<option>Indian Certificate of Secondary Education (ICSE)</option>
<option>Jammu and Kashmir State Board of School Education (JKBOSE)</option>
<option>Jharkhand Academic Council (JAC)</option>
<option>Department of Pre–University Government of Karnataka (PUE)</option>
<option>Karnataka State Secondary Education Examination Board (KSSEB)</option>
<option>Kerala Board of Public Examinations</option>
<option>Board of Higher Secondary Education Kerala (DHSE)</option>
<option>Maharashtra State Board of Secondary & Higher Secondary Education (MSBSHSE)</option>
<option>Madhya Pradesh Board of Secondary Education (MPBSE)</option>
<option>Madhya Pradesh State Open School (MPSOS)</option>
<option>Maharshi Patanjali Sanskrit Sansthan </option>
<option>Board of Secondary Education, Manipur (BSEM)</option>
<option>Council of Higher Secondary Education Manipur (COHSEM)</option>
<option>Meghalaya Board of School Education (MBOSE)</option>
<option>Mizoram Board of School Education (MBSE)</option>
<option>Nagaland Board of School Education (NBSE)</option>
<option>National Institute of Open Schooling (NIOS)</option>
<option>Council OF higher Secondary Education,Odisha (CHSE Odisha)</option>
<option>Board of Secondary Education, Odisha (BSE Odisha)</option>
<option>Rajasthan Board of Secondary Education (RBSE)</option>
<option>Other</option>
</select>
</div>
</div>
<div class=col-sm-3>
<div class=form-group>
<label for=tenthpercentage>Tenth Percentage</label>
<input class=form-control type=text name=tenthpercentage id=TenthPercentage required autofocus onchange="return validateTenthPercentage()" />
</div>
</div>
<div class=col-sm-3>
<div class=form-group>
<label for=tenthyear>Tenth Year</label>
<input class=form-control type=text name=tenthyear id=TenthYear required autofocus onchange="return validateTenthYear()" />
</div>
</div>
<div class=col-sm-3>
<div class=form-group>
<label for=tenthmarks>Tenth Marks</label>
<input class=form-control type=text name=tenthmarks id=TenthMarks required autofocus onchange=validateTenthMarks() />
</div>
</div>
<div class=col-sm-3>
<label for=outof>Out of / Total Marks</label>
<input class=form-control type=text name=tenthoutof id=TenthOutOf required autofocus onchange="return validateTenthOutOf()"/>
</div>
</div>
<hr>
<div class=row>
<div class=text-left>
<h3>HSC Qualification</h3>
</div>
<div class=col-sm-12>
<div class=form-group>
<label for=college>College/School</label>
<input class=form-control name=college id=College>
</div>
</div>
<div class=col-sm-3>
<div class=form-group>
<label for=twelthpercentage>Twelth Percentage</label>
<input class=form-control type=text name=twelthpercentage id=TwelthPercentage required autofocus onchange="return validateTwelthPercentage()" />
</div>
</div>
<div class=col-sm-3>
<div class=form-group>
<label for=twelthyear>Twelth Year</label>
<input class=form-control type=text name=twelthyear id=TwelthYear required autofocus onchange="return validateTwelthYear()" />
</div>
</div>
<div class=col-sm-3>
<div class=form-group>
<label for=twelthmarks>Twelth Marks</label>
<input class=form-control type=text name=twelthmarks id=TwelthMarks required autofocus onchange="return validateTwelthMarks()" />
</div>
</div>
<div class=col-sm-3>
<label for=twelthoutof>Out of / Total Marks</label>
<input class=form-control type=text name=twelthoutof id=TwelthOutOf required autofocus onchange="return validateTwelthOutOf()" />
</div>
<div class=col-sm-4>
<div class=form-group>
<label for=physics>Physics</label>
<input class=form-control type=text name=physics id=Physics required autofocus />
</div>
</div>
<div class=col-sm-4>
<div class=form-group>
<label for=chemistry>Chemistry</label>
<input class=form-control type=text name=chemistry id=Chemistry required autofocus />
</div>
</div>
<div class=col-sm-4>
<div class=form-group>
<label for=biology>Biology</label>
<input class=form-control type=text name=biology id=Biology required autofocus />
</div>
</div>
<div class=col-sm-6>
<div class=form-group>
<label for=pcbmarks>PCB Percentage</label>
<input class=form-control type=text name=pcbmarks id=PCB required autofocus />
</div>
</div>
<div class=col-sm-6>
<div class=form-group>
<label for=aggregate>Aggregate</label>
<input class=form-control type=text name=aggregate id=Aggregate required autofocus />
</div>
</div>
</div>
<hr>
<div class=row>
<div class=text-left>
<h3>NEET Qualification</h3>
</div>
<div class=col-sm-6>
<label for=neetyear>NEET Exam Year</label>
<input class=form-control type=text name=neetyear id=NeetYear required autofocus onchange="return validateNeetYear()" />
</div>
<div class=col-sm-6>
<label for=neetmarks>NEET Marks</label>
<input class=form-control type=text name=neetmarks id=NeetMarks required autofocus onchange="return validateNeetMarks()" />
<input type=hidden name=cWebsite value=vinnitsa id=cWebsite hidden/>
</div>
</div>
<div class=row>
<div class>
<div class=col-sm-12>
<br>
</div>
</div>
</div>
<div class="form-group text-center">
<div class=submit-btn>
<button class="btn btn-default" type=submit id=subsubmit>Submit</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
<script>function validateMobile(){var a=document.getElementById("mobile").value;if(isNaN(a)||a<1000000000||a>9999999999){document.getElementById("mobile").style.borderColor="red";return false}else{document.getElementById("mobile").style.borderColor="#CCCCCC";return true}}function validatePin(){var a=document.getElementById("PermanentPin").value;if(isNaN(a)||a<100000||a>999999){document.getElementById("PermanentPin").style.borderColor="red";return false}else{document.getElementById("PermanentPin").style.borderColor="#CCCCCC";return true}}function validatePincode(){var a=document.getElementById("Pincode").value;if(isNaN(a)||a<100000||a>999999){document.getElementById("Pincode").style.borderColor="red";return false}else{document.getElementById("Pincode").style.borderColor="#CCCCCC";return true}}function validatePMobile(){var a=document.getElementById("ParentMobile").value;if(isNaN(a)||a<1000000000||a>9999999999){document.getElementById("ParentMobile").style.borderColor="red";return false}else{document.getElementById("ParentMobile").style.borderColor="#CCCCCC";return true}}function validateTenthMarks(){var a=document.getElementById("TenthMarks").value;if(isNaN(a)){document.getElementById("TenthMarks").style.borderColor="red";return false}else{document.getElementById("TenthMarks").style.borderColor="#CCCCCC";return true}}function validateTwelthMarks(){var a=document.getElementById("TwelthMarks").value;if(isNaN(a)){document.getElementById("TwelthMarks").style.borderColor="red";return false}else{document.getElementById("TwelthMarks").style.borderColor="#CCCCCC";return true}}function validateTenthOutOf(){var a=document.getElementById("TenthOutOf").value;if(isNaN(a)){document.getElementById("TenthOutOf").style.borderColor="red";return false}else{document.getElementById("TenthOutOf").style.borderColor="#CCCCCC";return true}}function validateTwelthOutOf(){var a=document.getElementById("TwelthOutOf").value;if(isNaN(a)){document.getElementById("TwelthOutOf").style.borderColor="red";return false}else{document.getElementById("TwelthOutOf").style.borderColor="#CCCCCC";return true}}function validateNeetYear(){var a=document.getElementById("NeetYear").value;if(isNaN(a)){document.getElementById("NeetYear").style.borderColor="red";return false}else{document.getElementById("NeetYear").style.borderColor="#CCCCCC";return true}}function validateNeetMarks(){var a=document.getElementById("NeetMarks").value;if(isNaN(a)){document.getElementById("NeetMarks").style.borderColor="red";return false}else{document.getElementById("NeetMarks").style.borderColor="#CCCCCC";return true}}function validateTenthPercentage(){var a=document.getElementById("TenthPercentage").value;if(isNaN(a)||a<1||a>100){document.getElementById("TenthPercentage").style.borderColor="red";return false}else{document.getElementById("TenthPercentage").style.borderColor="#CCCCCC";return true}}function validateTwelthPercentage(){var a=document.getElementById("TwelthPercentage").value;if(isNaN(a)||a<1||a>100){document.getElementById("TwelthPercentage").style.borderColor="red";return false}else{document.getElementById("TwelthPercentage").style.borderColor="#CCCCCC";return true}}function validateTenthYear(){var a=document.getElementById("TenthYear").value;if(isNaN(a)||a<2000||a>2025){document.getElementById("TenthYear").style.borderColor="red";return false}else{document.getElementById("TenthYear").style.borderColor="#CCCCCC";return true}}function validateTwelthYear(){var a=document.getElementById("TwelthYear").value;if(isNaN(a)||a<2000||a>2025){document.getElementById("TwelthYear").style.borderColor="red";return false}else{document.getElementById("TwelthYear").style.borderColor="#CCCCCC";return true}}function myFunction2(){var a=document.getElementById("chkPassport");var b=document.getElementById("dvPassport");if(a.checked==true){b.style.display="block"}else{b.style.display="none"}}function myFunction1(){var a=document.getElementById("checkaddress");if(a.checked==true){document.getElementById("Address").value=document.getElementById("PermanentAddress").value;document.getElementById("City").value=document.getElementById("PermanentCity").value;document.getElementById("State").value=document.getElementById("PermanentState").value;document.getElementById("Pincode").value=document.getElementById("PermanentPin").value}else{document.getElementById("Address").value="";document.getElementById("City").value="";document.getElementById("State").value="";document.getElementById("Pincode").value=""}}function finalcheck(){var b=document.getElementById("finaltick");if(b.checked==true){var a=document.getElementById("mobile").style.borderColor;if(a!=red){document.getElementById("subsubmit").disabled=false}else{}}else{}}function validateEmail(){var a=document.forms.admmiform["email"].value;var b=a.indexOf("@");var c=a.lastIndexOf(".");if(b<1||c<b+2||c+2>=a.length){document.getElementById("Email").style.borderColor="red";return false}else{document.getElementById("Email").style.borderColor="#CCCCCC"}}function validateData(){if(validateEmail()&&validateMobile()&&validatePin()&&validatePincode()&&validatePMobile()&&validatePincode()&&validateTenthPercentage()&&validateTenthYear()&&validateTenthMarks()&&validateTenthOutOf()&&validateTwelthPercentage()&&validateTwelthYear()&&validateTwelthMarks()&&validateTwelthOutOf()&&validateNeetYear()&&validateNeetMarks()){return true}};</script>
<script src=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js integrity=sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa crossorigin=anonymous></script>
</body>
</html>
