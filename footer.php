<?php
// if (isset($_POST['footer-contact-submit'])) {
// /*#############FIRST NAME##############*/
// if ($_POST['firstName'] != "") {
// $firstname = filter_var($_POST['firstName'], FILTER_SANITIZE_STRING);
// }else{
// $errors .= '<span>Please enter your First Name.</span><br/>';
// };
// /*#############LAST NAME##############*/
// if ($_POST['lastName'] != "") {
// $lastname = filter_var($_POST['lastName'], FILTER_SANITIZE_STRING);
// }else{
// $errors .= '<span>Please enter your Last Name.</span><br/>';
// };
// /*#############COMPANY##############*/
// if ($_POST['company'] != "") {
// $company = filter_var($_POST['company'], FILTER_SANITIZE_STRING);
// }else{
// $errors .= '<span>Please enter your companies name.</span><br/>';
// };
// /*#############EMAIL##############*/
// if ($_POST['email'] != "") {
//     $sanemail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

//     if (!filter_var($sanemail, FILTER_VALIDATE_EMAIL)) {
//    $errors .= '<span>Please enter a valid email address.</span><br/>';
// } else {
//     $email = $sanemail;
// };

// } else {
//     $errors .= '<span>Please enter your email address.</span><br/>';
// };
// /*#############PHONE##############*/
// if ($_POST['phoneNumber'] != "") {
//     $sanphone = filter_var($_POST['phoneNumber'], FILTER_SANITIZE_NUMBER_INT);

//     if (!filter_var($sanphone, FILTER_VALIDATE_INT)) {
//    $errors .= '<span>Please enter a valid phone number.</span><br/>';
// } else {
//    $phone = $sanphone;
// };

// } else {
//     $errors .= '<span>Please enter your phone number.</span><br/>';
// };
// /*#############COMMENTS##############*/
// if ($_POST['comments'] != "") {
// $comments = filter_var($_POST['comments'], FILTER_SANITIZE_STRING);
// }else{
// $errors .= '<span>Please enter a comment or message.</span><br/>';
// };
// /*#############FIN##############*/

// $wwemail = "contact@winterwalking.com";

// $message ="
// This is a message sent via winterwalking.com's Footer Contact Form.

// Client Info:
// First Name: $firstname
// Last Name: $lastname
// Company Name: $company
// Phone Number: $phone
// Email: $email

// Message: $comments
// ";

// $headers = "From: <$wwemail>\n";
// $headers .= "Reply-To: <$wwemail>\n";

// if ($errors != null) {
// echo "<script>";
// echo "alert('$errors');";
// echo "</script>";
// } else {
// mail($wwemail, "Footer Contact Form Message", $message, $headers);
// };
// };
?>

<footer>
	<div class="wrap clearfix">
		<div class="column" id="column1">
			<div class="columninner">
		<h2>INFORMATION</h2>

<div class="bold">Winter Walking</div>

<ul>
<li>Winter Walking</li>
<li>400 Babylon Road</li>
<li>Horsham, PA 19044</li>
</ul>
<ul>
<li>P 1-888-NO-SLIPS (667-5477)</li>
<li>F 1-215-441-9642</li>
<li>E <a href="mailto:info@winterwalking.com">info@winterwalking.com</a></li>
<li>Connect on <a href="http://www.linkedin.com/company/2453879?trk=vsrp_companies_res_name&trkInfo=VSRPsearchId%3A1622272341383685259121%2CVSRPtargetId%3A2453879%2CVSRPcmpt%3Aprimary">LinkedIn</a></li>
</ul>

<p class="copyright">All content copyright 2013 © Winter Walking.  Do not reuse or reproduce without permission.</p>

</div>
</div>
<div class="column" id="column2">
	<div class="columninner">
<h2>HOW TO ORDER</h2>
<ul>
<li><a href="#myModal" role="button" data-toggle="modal">&#62;REQUEST A PRODUCT QUOTE</a></li>
<li><a href="#myModal2" role="button" data-toggle="modal">&#62;REQUEST A PRODUCT INFORMATION KIT</a></li>
<li><a href="#myModal4" role="button" data-toggle="modal">&#62;CONTACT AN EXPERT</a></li>
</ul>

<p>For individual purchases and retail customers,
please visit <a href="http://www.wintercleats.com" target="_blank">www.wintercleats.com</a></p>
</div>
</div>
<a name="footer"></a>
<div class="column" id="column3">
<div class="columninner">
<img src="img/wwbiglogo.png" alt="Winter Walking">
<!-- <div class="contactform">
<form method="post" action="$_SERVER['PHP_SELF'];?>">
	<div id="line1">
	<input type="text" name="firstName" placeholder="FIRST NAME">
	<input type="text" name="lastName" placeholder="LAST NAME">
	</div>
	<input type="text" name="company" placeholder="COMPANY NAME">
	<input type="text" name="phoneNumber" placeholder="PHONE NUMBER">
	<input type="email" name="email" placeholder="EMAIL ADDRESS">
	<input type="text" name="comments" placeholder="COMMENTS">
	<input class="send" type="submit" name="footer-contact-submit" value="SEND">
</form>
</div> -->
</div>
</div>

	</div>

</footer>