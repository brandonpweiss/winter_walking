<?php
if (isset($_POST['nav-contact-submit'])) {
/*#############FIRST NAME##############*/
if ($_POST['firstName'] != "") {
$firstname = filter_var($_POST['firstName'], FILTER_SANITIZE_STRING);
}else{
$errors .= '<span>Please enter your First Name.</span><br/>';
};
/*#############LAST NAME##############*/
if ($_POST['lastName'] != "") {
$lastname = filter_var($_POST['lastName'], FILTER_SANITIZE_STRING);
}else{
$errors .= '<span>Please enter your Last Name.</span><br/>';
};
/*#############COMPANY##############*/
if ($_POST['company'] != "") {
$company = filter_var($_POST['company'], FILTER_SANITIZE_STRING);
}else{
$errors .= '<span>Please enter your companies name.</span><br/>';
};
/*#############EMAIL##############*/
if ($_POST['email'] != "") {
    $sanemail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    if (!filter_var($sanemail, FILTER_VALIDATE_EMAIL)) {
   $errors .= '<span>Please enter a valid email address.</span><br/>';
} else {
    $email = $sanemail;
};

} else {
    $errors .= '<span>Please enter your email address.</span><br/>';
};
/*#############COMMENTS##############*/
$comments = filter_var($_POST['comments'], FILTER_SANITIZE_STRING);
/*#############FIN##############*/

$wwemail = "contact@winterwalking.com";

$message ="
This is a message sent via winterwalking.com's Main Contact Form.

Client Info:
First Name: $firstname
Last Name: $lastname
Company Name: $company
Email: $email

Message: $comments
";

$headers = "From: <$wwemail>\n";
$headers .= "Reply-To: <$wwemail>\n";

if ($errors != null) {
echo "<script>";
echo "alert('$errors');";
echo "</script>";
} else {
mail($wwemail, "Main Contact Form Message", $message, $headers);
};
};

/*==========================================================*/

if (isset($_POST['request-contact-submit'])) {
/*#############PRODUCT DATA##############*/
$modelNumber = filter_var($_POST['modelNumber'], FILTER_SANITIZE_STRING);
$modelName = filter_var($_POST['modelName'], FILTER_SANITIZE_STRING);
/*#############FIRST NAME##############*/
if ($_POST['firstName'] != "") {
$firstname = filter_var($_POST['firstName'], FILTER_SANITIZE_STRING);
}else{
$errors .= '<span>Please enter your First Name.</span><br/>';
};
/*#############LAST NAME##############*/
if ($_POST['lastName'] != "") {
$lastname = filter_var($_POST['lastName'], FILTER_SANITIZE_STRING);
}else{
$errors .= '<span>Please enter your Last Name.</span><br/>';
};
/*#############COMPANY##############*/
if ($_POST['company'] != "") {
$company = filter_var($_POST['company'], FILTER_SANITIZE_STRING);
}else{
$errors .= '<span>Please enter your companies name.</span><br/>';
};
/*#############EMAIL##############*/
if ($_POST['email'] != "") {
    $sanemail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    if (!filter_var($sanemail, FILTER_VALIDATE_EMAIL)) {
   $errors .= '<span>Please enter a valid email address.</span><br/>';
} else {
    $email = $sanemail;
};

} else {
    $errors .= '<span>Please enter your email address.</span><br/>';
};
/*#############EMPLOYEES##############*/
$employees = filter_var($_POST['employees'], FILTER_SANITIZE_STRING);
/*#############COMMENTS##############*/
$comments = filter_var($_POST['comments'], FILTER_SANITIZE_STRING);
/*#############FIN##############*/

$wwemail = "contact@winterwalking.com";

$message ="
This is a message sent via winterwalking.com's Request a quote/Speak to an expert form.

Client Info:
First Name: $firstname
Last Name: $lastname
Company Name: $company
Number of Employees: $employees
Email: $email

Product Info:
Name: $modelName
Model Number: $modelNumber

Message: $comments
";

$headers = "From: <$wwemail>\n";
$headers .= "Reply-To: <$wwemail>\n";

if ($errors != null) {
echo "<script>";
echo "alert('$errors');";
echo "</script>";
} else {
mail($wwemail, "Quote Request/Speak to an Expert Message", $message, $headers);
};
};

/*==========================================================*/

if (isset($_POST['product-share-submit'])) {

/*#############PRODUCT DATA##############*/
$modelNumber = $_POST['modelNumber'];
$modelName = $_POST['modelName'];

/*#############SENDERS NAME##############*/
$sendName = filter_var($_POST['sendName'], FILTER_SANITIZE_STRING);
/*#############SENDERS EMAIL##############*/
$sendEmail = filter_var($_POST['sendEmail'], FILTER_SANITIZE_EMAIL);

/*#############RECIPIENTS NAME##############*/
$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
/*#############RECIPIDNTS EMAIL##############*/
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

$message ="
$sendName wants to share one of our products with you!

<!doctype html>
<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <title>Winter Walking Products</title>
  <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>
  <style>
  @import url('style.css');
  h1{
    color: #000000;
    font-size: 40px;
    padding-bottom: 10px;
  }
  </style>
</head>
<body>
<div class='tables' style='width: 900px'>
<table style='width: 600px; margin-bottom: 20px; float:left;'>
  <tr>
    <td style='font-size: 30px; font-weight:bold;'><h1>$modelName</h1></td>
  </tr>
  <tr>
<td style='font-size: 14px;'>$modelDescription</td>
</tr>
</table>
<div class='productimage' style='float:right; margin-right: 50px;'><img style='width: 180px;' src='$modelImage' alt='shoe'></div>
<table style='width: 600px; clear:both; float:left; margin-top: 20px;'>
<tr><td>FEATURES</td></tr>
<tr><td>
$modelFeatures
</td></tr>
</table>
<table style='width: 200px; float:left; margin-left: 20px; margin-top: 20px;'>
<tr><td>IDEAL CONDITIONS</td></tr>
<tr><td>Ice</td><td>$modelIC1</td></tr><tr><td>Snow</td><td>$modelIC2</td></tr><tr><td>Oil</td><td>$modelIC3</td></tr><tr><td>fats</td><td>$modelIC4</td></tr><tr><td>Soaps</td><td>$modelIC5</td></tr><tr><td>Chemicals</td><td>$modelIC6</td></tr><tr><td>Liquids</td><td>$modelIC7</td></tr><tr><td>Mud</td><td>$modelIC8</td></tr><tr><td>Indoor</td><td>$modelIC9</td></tr><tr><td>Outdoor</td><td>$modelIC10</td></tr><tr><td>Driving</td><td>$modelIC11</td></tr>
</table>
<table style='width: 300px; top: 20px; position: relative; clear:both;'>
<tr><td>SIZES</td></tr>
<tr>
  <td>XS</td>
  <td>S</td>
  <td>M</td>
  <td>L</td>
  <td>XL</td>
  <td>XXL</td>
  <td>XXXL</td>
  <td>XXXXL</td>
</tr>
<tr>
<td>$modelS1</td>
<td>$modelS2</td>
<td>$modelS3</td>
<td>$modelS4</td>
<td>$modelS5</td>
<td>$modelS6</td>
<td>$modelS7</td>
<td>$modelS8</td>
</tr>
</table>
</div>
</body>
</html>
";

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$headers .= "From: No-Reply <no-reply@winterwalking.com>" . "\r\n";
$headers .= "Reply-To: No-Reply <no-reply@winterwalking.com>" . "\r\n";

mail($email, "$sendName wants to share one of our products with you!", $message, $headers);
};
?>

<!-- Contact Form -->

<div id="myModal2" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h1 id="myModalLabel">CONTACT &nbsp;<span class="blue">WINTER WALKING</span></h1>
  </div>



<div class="modal-body">
  <div class="form">
  <form name="contactform" class="clearfix" id="contactForm" method="post" action="<?$_SERVER['PHP_SELF'];?>">
    <label>First Name</label>
    <input  type="text" placeholder="first name" name="firstName" maxlength="80" size="30"><br><br>
      <label>Last Name</label>
    <input  type="text"  placeholder="last name" name="lastName" maxlength="80" size="30"><br><br>
    <label>Company Name</label>
    <input  type="text"  placeholder="company name" name="company" maxlength="80" size="30"><br><br>
      <label>Email</label>
    <input  type="email"  placeholder="youremail@yourdomain.com" name="email" maxlength="80" size="30"><br><br>

      <label>Comments</label>
    <textarea name="comments"  placeholder="comments..." rows="5" cols="20"></textarea><br><br>
    <button type="submit" value="Submit" name ="nav-contact-submit" id="submit">SUBMIT</button>
  </form>
  </div>

</div>
</div>



<!-- Reqest a quote/Speak to an expert form -->

<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h1 id="myModalLabel">CONTACT &nbsp;<span class="blue">WINTER WALKING</span></h1>
  </div>



<div class="modal-body">
  <div class="form">
  <form name="contactform" class="clearfix" id="contactForm" method="post" action="<?$_SERVER['PHP_SELF'];?>">
    <input type="hidden" id="modelNumber" name="modelNumber" value="">
    <input type="hidden" id="modelName" name="modelName" value="">
   	<label>First Name</label>
    <input  type="text" placeholder="first name" name="firstName" maxlength="80" size="30"><br><br>
    	<label>Last Name</label>
    <input  type="text"  placeholder="last name" name="lastName" maxlength="80" size="30"><br><br>
    <label>Company Name</label>
    <input  type="text"  placeholder="company name" name="company" maxlength="80" size="30"><br><br>
       <label>Number of Employees Exposed</label>
    <input  type="text"  placeholder="Enter a Number" name="employees" maxlength="80" size="30"><br><br>
    	<label>Email</label>
    <input  type="email"  placeholder="youremail@yourdomain.com" name="email" maxlength="80" size="30"><br><br>

    	<label>Comments</label>
    <textarea name="comments"  placeholder="comments..." rows="5" cols="20"></textarea><br><br>
    <button type="submit" value="Submit" name="request-contact-submit" id="submit">SUBMIT</button>
  </form>
  </div>

</div>
</div>


<!-- Product Share Form -->

<div id="myModal3" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h1 id="myModalLabel">SHARE</h1>
  </div>



<div class="modal-body">
  <div class="form">
  <form name="contactform" class="clearfix" id="contactForm" method="post" action="<?$_SERVER['PHP_SELF'];?>">
    <input type="hidden" id="modelName" name="modelName" value="">
    <input type="hidden" id="modelDescription" name="modelDescription" value="">
    <input type="hidden" id="modelFeatures" name="modelFeatures" value="">
    <input type="hidden" id="modelImage" name="modelImage" value="">
    <input type="hidden" id="modelIC1" name="modelIC1" value="">
    <input type="hidden" id="modelIC2" name="modelIC2" value="">
    <input type="hidden" id="modelIC3" name="modelIC3" value="">
    <input type="hidden" id="modelIC4" name="modelIC4" value="">
    <input type="hidden" id="modelIC5" name="modelIC5" value="">
    <input type="hidden" id="modelIC6" name="modelIC6" value="">
    <input type="hidden" id="modelIC7" name="modelIC7" value="">
    <input type="hidden" id="modelIC8" name="modelIC8" value="">
    <input type="hidden" id="modelIC9" name="modelIC9" value="">
    <input type="hidden" id="modelIC10" name="modelIC10" value="">
    <input type="hidden" id="modelIC11" name="modelIC11" value="">
    <input type="hidden" id="modelS1" name="modelS1" value="">
    <input type="hidden" id="modelS2" name="modelS2" value="">
    <input type="hidden" id="modelS3" name="modelS3" value="">
    <input type="hidden" id="modelS4" name="modelS4" value="">
    <input type="hidden" id="modelS5" name="modelS5" value="">
    <input type="hidden" id="modelS6" name="modelS6" value="">
    <input type="hidden" id="modelS7" name="modelS7" value="">
    <input type="hidden" id="modelS8" name="modelS8" value="">
    <label>Your Name</label>
    <input  type="text" placeholder="Your Name" name="sendName" maxlength="80" size="30"><br><br>
      <label>Your Email</label>
    <input  type="email"  placeholder="youremail@yourdomain.com" name="sendEmail" maxlength="80" size="30"><br><br><br><br>
    <label>Recipients Name</label>
    <input  type="text" placeholder="Recipients Name" name="name" maxlength="80" size="30"><br><br>
      <label>Recipients Email</label>
    <input  type="email"  placeholder="recipientsemail@recipientsdomain.com" name="email" maxlength="80" size="30"><br><br>
    <button type="submit" value="Submit" name ="product-share-submit" id="submit">SHARE</button>
  </form>
  </div>

</div>
</div>