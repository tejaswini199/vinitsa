﻿<!DOCTYPE html>
<html lang=en>
<head>
<meta charset=utf-8>
<meta http-equiv=X-UA-Compatible content="IE=edge">
<meta name=viewport content="width=device-width, initial-scale=1">
<script src=https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js></script>
<link rel=stylesheet href=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css integrity=sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u crossorigin=anonymous>
<link rel='stylesheet prefetch' href=https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css>
<link rel=stylesheet href=style.css type=text/css media=screen title="no title" charset="utf-8"/>
</head>
<body onload=funreset()>
<section class=sec-content id=sec>
<div class=container>
<div class=row>
<div class="col-sm-offset-4 col-sm-4">
<div class=main-body>
<div class=abs>
<div class>
<span class=text>
</span>
</div>
</div>
<form action=https://bizcallcrmforms.com/contact_form/select-process-chatbox.php method=post autocomplete=off accept-charset=utf-8>
<div class="form-group choose-country clearfix">
<div>
<label name=lbltitleheading id=lbltitleheading>
</label>
</div>
<div class=bg-2>
<div class="classCountryInfo user-answer" id=classCountryInfo>
<label name=lblCountryInfo id=lblCountryInfo></label>
</div>
<div id=CountryNameInfo>
<div id=divcountryName>
<input type=checkbox id=counter1 name=countryName value="General Medicine ">General Medicine <br>
<input type=checkbox id=counter2 name=countryName value=Pediatrics>Pediatrics<br>
<input type=checkbox id=counter3 name=countryName value="Medical and Prevent Care">Medical and Prevent Care<br>
<input type=checkbox id=counter4 name=countryName value="Undergraduate course in pharmacy and clinical">Undergraduate course in pharmacy and clinical<br>
<input type=checkbox id=counter5 name=countryName value=Other>Other<br>
</div>
<button type=button class="btn-1 next" onclick=showCountryName()>
Select
</button>
</div>
</div>
<div class="CountryNameValue user-answer" id=CountryNameValue>
<label name=lblCountryValue id=lblCountryValue></label>
</div>
<div class=UserNameInfo id=UserNameInfo>
<label name=lblUserNameInfo id=lblUserNameInfo></label>
</div>
<div class="UserNameValue user-answer" id=UserNameValue>
<label name=lblUserNameValue id=lblUserNameValue></label>
</div>
<div class=EmailIdInfo id=EmailIdInfo>
<label name=lblEmailIdInfo id=lblEmailIdInfo></label>
</div>
<div class="EmailIdValue user-answer" id=EmailIdValue>
<label name=lblEmailIdValue id=lblEmailIdValue></label>
</div>
<div class=PhoneNumberInfo id=PhoneNumberInfo>
<label name=lblPhoneNumberInfo id=lblPhoneNumberInfo></label>
</div>
<div class="PhoneNumberValue user-answer" id=PhoneNumberValue>
<label name=lblPhoneNumberValue id=lblPhoneNumberValue></label>
</div>
<div class=MessageInfo id=MessageInfo>
<label name=lblMessageInfo id=lblMessageInfo></label>
</div>
<div class="MessageValue user-answer" id=MessageValue>
<label name=lblMessageValue id=lblMessageValue></label>
</div>
</div>
<div>
<input type=text name=txtCountryValue id=txtCountryValue>
<input type=text name=cName id=txtUserNameValue>
<input type=text name=cEmail id=txtEmailIdValue>
<input type=text name=cMobile id=txtPhoneNumberValue>
<input type=text name=cWebsite value=vinnitsa id=cMassege hidden/>
<input type=text name=cMassege id=txtMessageValue>
</div>
<div class="form-group fixed none footer-div" id=bottom-form>
<label id=lblTitle class="form-control hidee"></label>
<input type=text class=form-control id=txtinfo placeholder name=txtinfo>
<img src=enter-icon.png class=enter-icon id=enter onclick=submitClick()>
<button type=submit name=insert id=btnsubmit>
<img src=enter-icon.png class=enter-icon id=enter style=pointer-events:auto>
</button>
<select id=IsdCode class="smat-dropdown-botest lato" onchange=SelectCountrychatForm() style=display:block>
<option value=" +972">Israel +972</option>
<option value=+93>Afghanistan +93</option><option value=+355>Albania +355</option><option value=" +213">Algeria +213</option><option value="+1 684">AmericanSamoa +1 684</option><option value=" +376">Andorra +376</option><option value=" +244">Angola +244</option><option value="+1 264">Anguilla +1 264</option><option value=" +1268">Antigua and Barbuda +1268</option><option value=+54>Argentina +54</option><option value=+374>Armenia +374</option><option value=" +297">Aruba +297</option><option value=" +61">Australia +61</option><option value=" +43">Austria +43</option><option value=" +994">Azerbaijan +994</option><option value="+1 242">Bahamas +1 242</option><option value=" +973">Bahrain +973</option><option value=" +880">Bangladesh +880</option><option value=" +1 246">Barbados +1 246</option><option value=" +375">Belarus +375</option><option value=+32>Belgium +32</option><option value=" +501">Belize +501</option><option value=" +229">Benin +229</option><option value="+1 441">Bermuda +1 441</option><option value=" +975">Bhutan +975</option><option value=" +387">Bosnia and Herzegovina +387</option><option value=+267>Botswana +267</option><option value=" +55">Brazil +55</option><option value=+246>British Indian Ocean Territory +246</option><option value=" +359">Bulgaria +359</option><option value=" +226">Burkina Faso +226</option>
<option value=" +257">Burundi +257</option>
<option value=" +855">Cambodia +855</option>
<option value=" +237">Cameroon +237</option><option value=" +1">Canada +1</option><option value=" +238">Cape Verde +238</option><option value=" + 345">Cayman Islands + 345</option><option value=" +236">Central African Republic +236</option><option value=" +235">Chad +235</option><option value=" +56">Chile +56</option><option value=" +86">China +86</option><option value=" +61">Christmas Island +61</option><option value=" +57">Colombia +57</option><option value=" +269">Comoros +269</option><option value=" +242">Congo +242</option><option value=" +682">Cook Islands +682</option><option value=" +506">Costa Rica +506</option><option value=" +385">Croatia +385</option><option value=" +53">Cuba +53</option><option value=" +537">Cyprus +537</option><option value=" +420">Czech Republic +420</option><option value=" +45">Denmark +45</option><option value=" +253">Djibouti +253</option><option value=" +1 767">Dominica +1 767</option><option value=" +1 849">Dominican Republic +1 849</option><option value=" +593">Ecuador +593</option><option value=" +20">Egypt +20</option><option value=" +503">El Salvador +503</option><option value=" +240">Equatorial Guinea +240</option><option value=" +291">Eritrea +291</option><option value=" +372">Estonia +372</option><option value=" +251">Ethiopia +251</option><option value=" +298">Faroe Islands +298</option><option value=+679>Fiji +679</option><option value=" +358">Finland +358</option><option value=" +33">France +33</option><option value=" +594">French Guiana +594</option><option value=" +689">French Polynesia +689</option><option value=" +241">Gabon +241</option><option value>Gambia +220</option><option value=" 5">Georgia +995</option><option value=" +49">Germany +49</option><option value=" +233">Ghana +233</option><option value=" +350">Gibraltar +350</option><option value=" +30">Greece +30</option><option value=+299>Greenland +299</option><option value=" +1 473">Grenada +1 473</option><option value=" +590">Guadeloupe +590</option><option value=" +1 671">Guam +1 671</option><option value=" +502">Guatemala +502</option><option value=" +224">Guinea +224</option><option value=" +245">Guinea-Bissau +245</option><option value=" +595">Guyana +595</option><option value=" +509">Haiti +509</option><option value=" +504">Honduras +504</option><option value=+36>Hungary +36</option><option value=" +354">Iceland +354</option><option value=+91 selected>India +91</option><option value=" +62">Indonesia +62</option><option value=" +964">Iraq +964</option><option value=" +353">Ireland +353</option><option value=" +972">Israel +972</option><option value=+39>Italy +39</option><option value=" +1 876">Jamaica +1 876</option><option value=" +81">Japan +81</option><option value=" +962">Jordan +962</option><option value=" +7 7">Kazakhstan +7 7</option><option value=" +254">Kenya +254</option><option value=" +686">Kiribati +686</option><option value=" +965">Kuwait +965</option><option value=" +996">Kyrgyzstan +996</option><option value=" +371">Latvia +371</option><option value=" +961">Lebanon +961</option><option value=" +266">Lesotho +266</option><option value=" +231">Liberia +231</option><option value=" +423">Liechtenstein +423</option><option value=" +370">Lithuania +370</option><option value=" +352">Luxembourg +352</option><option value=" +261">Madagascar +261</option><option value=" +265">Malawi +265</option><option value=" +60">Malaysia +60</option><option value=" +960">Maldives +960</option><option value=" +223">Mali +223</option><option value=" +356">Malta +356</option><option value=" +692">Marshall Islands +692</option><option value=" +596">Martinique +596</option><option value=" +222">Mauritania +222</option><option value=" +230">Mauritius +230</option><option value=" +262">Mayotte +262</option><option value=" +52">Mexico +52</option><option value=" +377">Monaco +377</option><option value=" +976">Mongolia +976</option><option value=" +382">Montenegro +382</option><option value=" +1664">Montserrat +1664</option><option value=" +212">Morocco +212</option><option value=" +95">Myanmar +95</option><option value=" +264">Namibia +264</option><option value=" +674">Nauru +674</option><option value=" +977">Nepal +977</option><option value=" +31">Netherlands +31</option><option value=" +599">Netherlands Antilles +599</option><option value=" +687">New Caledonia +687</option><option value=" +64">New Zealand +64</option><option value=" +505">Nicaragua +505</option><option value=" +227">Niger +227</option><option value=" +234">Nigeria +234</option><option value=+683>Niue +683</option><option value=" +672">Norfolk Island +672</option><option value=" +1 670">Northern Mariana Islands +1 670</option><option value=" +47">Norway +47</option><option value=" +968">Oman +968</option><option value=" +92">Pakistan +92</option><option value=" +680">Palau +680</option><option value=" +507">Panama +507</option><option value=" +675">Papua New Guinea +675</option><option value=" +595">Paraguay +595</option><option value=+51>Peru +51</option><option value=" +63">Philippines +63</option><option value=" +48">Poland +48</option><option value=" +351">Portugal +351</option><option value=" +1 939">Puerto Rico +1 939</option><option value="Qatar +974">Qatar +974</option><option value=" +40">Romania +40</option><option value=" +250">Rwanda +250</option><option value=" +685">Samoa +685</option><option value=" +378">San Marino +378</option><option value=" +966">Saudi Arabia +966</option><option value=" +221">Senegal +221</option><option value=" +381">Serbia +381</option><option value=" +248">Seychelles +248</option><option value=" +232">Sierra Leone +232</option><option value=" +65">Singapore +65</option><option value=" +421">Slovakia +421</option><option value=" +386">Slovenia +386</option><option value=" +677">Solomon Islands +677</option><option value=" +27">South Africa +27</option><option value=" +500">South Georgia and the South Sandwich Islands +500</option><option value=" +34">Spain +34</option><option value=" +94">Sri Lanka +94</option><option value=" +249">Sudan +249</option><option value=" +597">Suriname +597</option><option value=" +268">Swaziland +268</option><option value=" +46">Sweden +46</option><option value=" +41">Switzerland +41</option><option value=" +992">Tajikistan +992</option><option value=" +66">Thailand +66</option><option value=" +228">Togo +228</option><option value=" +690">Tokelau +690</option><option value=" +676">Tonga +676</option><option value=" +1 868">Trinidad and Tobago +1 868</option><option value=" +216">Tunisia +216</option><option value=" +90">Turkey +90</option><option value=" +993">Turkmenistan +993</option><option value=" +1 649">Turks and Caicos Islands +1 649</option><option value=" +688">Tuvalu +688</option><option value=" +256">Uganda +256</option><option value=" +380">Ukraine +380</option><option value=" +971">United Arab Emirates +971</option><option value=" +44">United Kingdom +44</option><option value=" +1">United States +1</option><option value=" +598">Uruguay +598</option><option value=" +998">Uzbekistan +998</option><option value=" +678">Vanuatu +678</option><option value=" +681">Wallis and Futuna +681</option><option value=" +967">Yemen +967</option><option value=" +260">Zambia +260</option><option value=" +263">Zimbabwe +263</option><option value="land Islands ">land Islands </option><option value=" null">Antarctica null</option><option value=" +591">Bolivia, Plurinational State of +591</option><option value=" +673">Brunei Darussalam +673</option><option value=" +61">Cocos (Keeling) Islands +61</option><option value=" +243">Congo, The Democratic Republic of the +243</option><option value=" +225">Cote d'Ivoire +225</option><option value=" +500">Falkland Islands (Malvinas) +500</option><option value=" +44">Guernsey +44</option><option value="  +379">Holy See (Vatican City State) +379</option><option value=" +852">Hong Kong +852</option><option value=" +98">Iran, Islamic Republic of +98</option><option value=" +44">Isle of Man +44</option><option value=" +44">Jersey +44</option><option value=" +850">Korea, Democratic People's Republic of +850</option><option value=" +82">Korea, Republic of +82</option><option value=" +856">Lao People's Democratic Republic +856</option><option value=" +218">Libyan Arab Jamahiriya +218</option><option value=" +853">Macao +853</option><option value=" +389">Macedonia, The Former Yugoslav Republic of +389</option><option value=" +691">Micronesia, Federated States of +691</option><option value=" +373">Moldova, Republic of +373</option><option value=" +258">Mozambique +258</option><option value="  +970">Palestinian Territory, Occupied +970</option><option value=+872>Pitcairn +872</option><option value=+262>Réunion +262</option><option value=" +7">Russia +7</option><option value=" +590">Saint Barthélemy +590</option><option value=" +290">Saint Helena, Ascension and Tristan Da Cunha +290</option><option value=" +1 869">Saint Kitts and Nevis +1 869</option><option value=" +1 758">Saint Lucia +1 758</option><option value=" +590">Saint Martin +590</option><option value=" +508">Saint Pierre and Miquelon +508</option><option value=" +1 784">Saint Vincent and the Grenadines +1 784</option><option value=" +239">Sao Tome and Principe +239</option><option value=" +252">Somalia +252</option><option value=" +47">Svalbard and Jan Mayen +47</option><option value=" +963">Syrian Arab Republic +963</option><option value=" +886">Taiwan, Province of China +886</option><option value=" +255">Tanzania, United Republic of +255</option><option value=" +670">Timor-Leste +670</option><option value=" +58">Venezuela, Bolivarian Republic of +58</option><option value=" +84">Viet Nam +84</option><option value=" +1 284">Virgin Islands, British +1 284</option><option value=" +1 340">Virgin Islands, U.S. +1 340</option>
</select>
</div>
<label id=lblStage></label>
</form>
</div>
</div>
</div>
</div>
</section>
<script src=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js integrity=sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa crossorigin=anonymous></script>
<script>function funreset(){document.getElementById("lbltitleheading").innerHTML="<p>Admission Started for 2022. Enter Your Contact Information to Download Admission Brochure</p>";document.getElementById("IsdCode").style.display="none";document.getElementById("CountryNameInfo").style.display="block";document.getElementById("classCountryInfo").style.display="block";document.getElementById("CountryNameValue").style.display="none";document.getElementById("UserNameInfo").style.display="none";document.getElementById("UserNameValue").style.display="none";document.getElementById("EmailIdInfo").style.display="none";document.getElementById("EmailIdValue").style.display="none";document.getElementById("PhoneNumberInfo").style.display="none";document.getElementById("PhoneNumberValue").style.display="none";document.getElementById("MessageInfo").style.display="none";document.getElementById("MessageValue").style.display="none";document.getElementById("btnsubmit").style.display="none";document.getElementById("txtCountryValue").style.display="none";document.getElementById("txtUserNameValue").style.display="none";document.getElementById("txtEmailIdValue").style.display="none";document.getElementById("txtPhoneNumberValue").style.display="none";document.getElementById("txtMessageValue").style.display="none";document.getElementById("lblCountryInfo").innerHTML="Please Choose Your Course";document.getElementById("lblUserNameInfo").innerHTML="Please Enter Your Name";document.getElementById("lblEmailIdInfo").innerHTML="Please Enter Your Valid Email Id";document.getElementById("lblPhoneNumberInfo").innerHTML="Please Enter Your Mobile Number";document.getElementById("lblMessageInfo").innerHTML="Enter Your Message";document.getElementById("bottom-form").style.display="none"}function showCountryName(){var c=[];var b=document.querySelectorAll("input[type=checkbox]:checked");for(var a=0;a<b.length;a++){c.push(b[a].value+"<br>")}document.getElementById("classCountryInfo").style.display="block";document.getElementById("CountryNameValue").style.display="block";document.getElementById("CountryNameInfo").style.display="none";document.getElementById("lblCountryValue").value=c;document.getElementById("lblCountryValue").innerHTML=document.getElementById("lblCountryValue").value;$(UserNameInfo).fadeIn(2000);document.getElementById("lblTitle").innerHTML="Please Enter Your Name";document.getElementById("txtinfo").placeholder="Please Enter Your Name";document.getElementById("bottom-form").style.display="block";document.getElementById("bottom-form").style.display="block";document.getElementById("lblStage").value="1";window.setTimeout(function(){document.getElementById("txtinfo").focus()},0);window.scrollBy(0,500)}function submitClick(){var c=document.getElementById("lblStage").value;if(c=="1"){if(document.getElementById("txtinfo").value===""){document.getElementById("lblStage").value="1"}else{document.getElementById("lblUserNameValue").value=document.getElementById("txtinfo").value;document.getElementById("lblUserNameValue").innerHTML=document.getElementById("lblUserNameValue").value;document.getElementById("UserNameValue").style.display="block";window.setTimeout(function(){document.getElementById("txtinfo").focus()},0);$(EmailIdInfo).fadeIn(2000);document.getElementById("lblTitle").innerHTML="Please Enter Email Id";document.getElementById("txtinfo").value="";document.getElementById("txtinfo").placeholder="Please Enter Email Id";document.getElementById("lblStage").value="2";window.scrollBy(0,500)}}else{if(c=="2"){if(document.getElementById("txtinfo").value===""){document.getElementById("lblStage").value="2"}else{var a=document.getElementById("txtinfo").value;var b=a.indexOf("@");var d=a.lastIndexOf(".");if(b<1||d<b+2||d+2>=a.length){document.getElementById("lblEmailIdValue").innerHTML="Not Valid Email Id";document.getElementById("lblEmailIdValue").color="blue";document.getElementById("EmailIdValue").style.display="block"}else{document.getElementById("lblEmailIdValue").value=document.getElementById("txtinfo").value;document.getElementById("lblEmailIdValue").innerHTML=document.getElementById("lblEmailIdValue").value;document.getElementById("EmailIdValue").style.display="block";window.setTimeout(function(){document.getElementById("txtinfo").focus()},0);$(PhoneNumberInfo).fadeIn(2000);document.getElementById("txtinfo").classList.remove("form-control");document.getElementById("txtinfo").classList.add("form-control1");document.getElementById("IsdCode").style.display="block";document.getElementById("lblTitle").innerHTML="Please Enter Mobile Number";document.getElementById("txtinfo").value="+91";document.getElementById("txtinfo").placeholder="Please Enter Mobile Number";document.getElementById("lblStage").value="3";window.scrollBy(0,500)}}}else{if(c=="3"){if(document.getElementById("txtinfo").value===""){document.getElementById("lblStage").value="3"}else{document.getElementById("lblPhoneNumberValue").value=document.getElementById("txtinfo").value;document.getElementById("lblPhoneNumberValue").innerHTML=document.getElementById("lblPhoneNumberValue").value;document.getElementById("PhoneNumberValue").style.display="block";window.setTimeout(function(){document.getElementById("txtinfo").focus()},0);document.getElementById("IsdCode").style.display="none";document.getElementById("txtinfo").classList.remove("form-control1");document.getElementById("txtinfo").classList.add("form-control");$(MessageInfo).fadeIn(2000);document.getElementById("lblTitle").innerHTML="Please Enter Message";document.getElementById("txtinfo").value="";document.getElementById("txtinfo").placeholder="Please Enter Your Message";document.getElementById("lblStage").value="4";document.getElementById("enter").style.display="none";document.getElementById("btnsubmit").style.display="inline-block";document.getElementById("txtCountryValue").value=document.getElementById("lblCountryValue").value;document.getElementById("txtUserNameValue").value=document.getElementById("lblUserNameValue").value;document.getElementById("txtEmailIdValue").value=document.getElementById("lblEmailIdValue").value;document.getElementById("txtPhoneNumberValue").value=document.getElementById("lblPhoneNumberValue").value;window.scrollBy(0,500)}}else{if(c=="4"){}}}}}function insertData(e,d,b,a,c){}$(document).keypress(function(a){if(a.which=="13"){a.preventDefault()}});</script>
<script>function CloseWindow(){self.close()}</script>
<script type=text/javascript>function SelectCountrychatForm(){document.getElementById("txtinfo").value=document.getElementById("IsdCode").value};</script>
</body>
</html>