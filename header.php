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