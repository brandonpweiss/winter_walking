<?php
$page_url = $_SERVER['PHP_SELF'];

if (isset($_POST['nav-contact-submit'])) {
$firstname = filter_var($_POST['firstName'], FILTER_SANITIZE_STRING);

$lastname = filter_var($_POST['lastName'], FILTER_SANITIZE_STRING);

$company = filter_var($_POST['company'], FILTER_SANITIZE_STRING);

$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

$comments = filter_var($_POST['comments'], FILTER_SANITIZE_STRING);

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

mail($wwemail, "Main Contact Form Message", $message, $headers);
die();
};

/*==========================================================*/

if (isset($_POST['request-contact-submit'])) {

$modelNumber = filter_var($_POST['modelNumber'], FILTER_SANITIZE_STRING);

$modelName = filter_var($_POST['modelName'], FILTER_SANITIZE_STRING);

$firstname = filter_var($_POST['firstName'], FILTER_SANITIZE_STRING);

$lastname = filter_var($_POST['lastName'], FILTER_SANITIZE_STRING);

$company = filter_var($_POST['company'], FILTER_SANITIZE_STRING);

$mail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

$employees = filter_var($_POST['employees'], FILTER_SANITIZE_STRING);

$comments = filter_var($_POST['comments'], FILTER_SANITIZE_STRING);

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

mail($wwemail, "Quote Request/Speak to an Expert Message", $message, $headers);
die();
};

/*==========================================================*/

if (isset($_POST['product-share-submit'])) {

/*#############PRODUCT DATA##############*/
$modelName2 = $_POST['modelName2'];

$modelDescription = $_POST['modelDescription'];
$modelFeatures = $_POST['modelFeatures'];
$modelImage = $_POST['modelImage'];
$modelIC1 = $_POST['modelIC1'];
$modelIC2 = $_POST['modelIC2'];
$modelIC3 = $_POST['modelIC3'];
$modelIC4 = $_POST['modelIC4'];
$modelIC5 = $_POST['modelIC5'];
$modelIC6 = $_POST['modelIC6'];
$modelIC7 = $_POST['modelIC7'];
$modelIC8 = $_POST['modelIC8'];
$modelIC9 = $_POST['modelIC9'];
$modelIC10 = $_POST['modelIC10'];
$modelIC11 = $_POST['modelIC11'];
$modelS1 = $_POST['modelS1'];
$modelS2 = $_POST['modelS2'];
$modelS3 = $_POST['modelS3'];
$modelS4 = $_POST['modelS4'];
$modelS5 = $_POST['modelS5'];
$modelS6 = $_POST['modelS6'];
$modelS7 = $_POST['modelS7'];
$modelS8 = $_POST['modelS8'];

/*#############SENDERS NAME##############*/
$sendName = filter_var($_POST['sendName'], FILTER_SANITIZE_STRING);
/*#############SENDERS EMAIL##############*/
$sendEmail = filter_var($_POST['sendEmail'], FILTER_SANITIZE_EMAIL);

/*#############RECIPIENTS NAME##############*/
$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
/*#############RECIPIDNTS EMAIL##############*/
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

$absolute_url = "http://www.bpwtesting.com/winter_walking/";

$message ="
<!doctype html>
<html lang='en'>
<head>
  <title>Winter Walking Products</title>
  <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>
  <style>
  body{
    background: url($absolute_url/img/subtle_grunge.png);
    padding-top: 20px;
    padding-bottom: 20px;
  }
  h1{
    color: #000000;
    font-size: 40px;
    margin-top: -20px;
    margin-bottom: 0px;
  }
  </style>
</head>
<body>
<div class='tables' style='width: 850px; margin:0 auto;'>
<img style='width: 274px; position: relative; margin-left: -137px; left:50%;' src='$absolute_url/img/logo.png'>
<p style='text-align:center;'>$sendName wants to share one of our products with you!</p>
<div class='productimage' style='text-align:center;'><img style='width: 225px;' src='$absolute_url/$modelImage' alt='shoe'><br>
<h1>$modelName2</h1>
</div>

<table style='width: 850px; text-align: center; margin-bottom: 20px;'>
  <tr>
<td style='font-size: 14px;'>$modelDescription</td>
</tr>
</table>
<table style='width: 600px; clear:both; float:left; margin-top: 20px;'>
<tr><td>FEATURES</td></tr>
<tr><td>
$modelFeatures
</td></tr>
</table>
<div style='border: 2px solid black; padding: 20px 20px 40px 20px; background-color: white;'>
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
</div>
<p style='margin-top: 50px; text-align: center; font-weight: bold;'>Please do not reply to this e-mail</p>
<p style='text-align: center; font-weight: bold;'>See more on <a href='http://www.winterwalking.com'>www.winterwalking.com</a></p>
</body>
</html>
";

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

$headers .= "From: Winter Walking <no-reply@winterwalking.com>" . "\r\n";
$headers .= "Reply-To: No-Reply <no-reply@winterwalking.com>" . "\r\n";

mail($email, "$sendName wants to share one of our products with you!", $message, $headers);
die();
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
    <input type="hidden" id="modelName2" name="modelName2" value="">
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