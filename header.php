<?php ob_start(); ?>
<?php
$page_url = $_SERVER['PHP_SELF'];

if (isset($_POST['contact-submit'])) {
$firstname = filter_var($_POST['firstName'], FILTER_SANITIZE_STRING);

$lastname = filter_var($_POST['lastName'], FILTER_SANITIZE_STRING);

$company = filter_var($_POST['company'], FILTER_SANITIZE_STRING);

$employees = filter_var($_POST['employees'], FILTER_SANITIZE_NUMBER_INT);

$state = filter_var($_POST['state'], FILTER_SANITIZE_STRING);

$phone = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);

$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

$comments = filter_var($_POST['comments'], FILTER_SANITIZE_STRING);

$wwemail = "info@winterwalking.com";

$message ="
This is a message sent via winterwalking.com's Speak to an Expert Form.

Client Info:
First Name: $firstname
Last Name: $lastname
Company Name: $company
Number of Employees Exposed: $employees
State: $state
Email: $email
Phone: $phone

Message: $comments
";

$headers = "From: Winter Walking Website <noreply@winterwalking.com>\n";
$headers .= "Reply-To: ".$firstname." <".$email.">\n";

mail($wwemail, "Speak to an Expert Requested", $message, $headers);
header('Location: thankyou.php');
die();
};


if (isset($_POST['request-info-submit'])) {
$firstname = filter_var($_POST['firstName'], FILTER_SANITIZE_STRING);

$lastname = filter_var($_POST['lastName'], FILTER_SANITIZE_STRING);

$company = filter_var($_POST['company'], FILTER_SANITIZE_STRING);

$employees = filter_var($_POST['employees'], FILTER_SANITIZE_NUMBER_INT);

$address_1 = filter_var($_POST['address_1'], FILTER_SANITIZE_STRING);

$city = filter_var($_POST['city'], FILTER_SANITIZE_STRING);

$state = filter_var($_POST['state'], FILTER_SANITIZE_STRING);

$zip = filter_var($_POST['zip'], FILTER_SANITIZE_STRING);

$phone = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);

$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

$comments = filter_var($_POST['comments'], FILTER_SANITIZE_STRING);

$wwemail = "info@winterwalking.com";

$message ="
This is a message sent via winterwalking.com's Request Product Information Kit Form.

Client Info:
First Name: $firstname
Last Name: $lastname
Company Name: $company
Number of Employees Exposed: $employees
Address: $address_1
City: $city
State: $state
Zip Code: $zip
Email: $email
Phone: $phone

Message: $comments
";

$headers = "From: Winter Walking Website <noreply@winterwalking.com>\n";
$headers .= "Reply-To: ".$firstname." <".$email.">\n";

mail($wwemail, "Product Information Kit Requested", $message, $headers);
header('Location: thankyou.php');
die();
};

/*==========================================================*/

if (isset($_POST['request-quote-submit'])) {

$firstname = filter_var($_POST['firstName'], FILTER_SANITIZE_STRING);

$lastname = filter_var($_POST['lastName'], FILTER_SANITIZE_STRING);

$company = filter_var($_POST['company'], FILTER_SANITIZE_STRING);

$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

$phone = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);

$employees = filter_var($_POST['employees'], FILTER_SANITIZE_NUMBER_INT);

$product_1  = filter_var($_POST['product_1'], FILTER_SANITIZE_STRING);

$product_1_quantity  = filter_var($_POST['product_1_quantity'], FILTER_SANITIZE_STRING);

$product_2  = filter_var($_POST['product_2'], FILTER_SANITIZE_STRING);

$product_2_quantity  = filter_var($_POST['product_2_quantity'], FILTER_SANITIZE_STRING);

$product_3  = filter_var($_POST['product_3'], FILTER_SANITIZE_STRING);

$product_3_quantity  = filter_var($_POST['product_3_quantity'], FILTER_SANITIZE_STRING);

$comments = filter_var($_POST['comments'], FILTER_SANITIZE_STRING);

$wwemail = "info@winterwalking.com";

$message ="
This is a message sent via winterwalking.com's Request a quote Form.

Client Info:

First Name: $firstname
Last Name: $lastname
Company Name: $company
Number of Employees Exposed: $employees
Email: $email
Phone: $phone

Product Info:
Product 1: $product_1
Quantity: $product_1_quantity

Product 2: $product_2
Quantity: $product_2_quantity

Product 3: $product_3
Quantity: $product_3_quantity

Message:
$comments
";

$headers = "From: Winter Walking Website <noreply@winterwalking.com>\n";
$headers .= "Reply-To: ".$firstname." <".$email.">\n";

mail($wwemail, "Product Quote Requested", $message, $headers);
header('Location: thankyou.php');
die();
};

/*==========================================================*/

if (isset($_POST['product-share-submit'])) {

/*#############SENDERS NAME##############*/
$sendName = filter_var($_POST['sendName'], FILTER_SANITIZE_STRING);
/*#############SENDERS EMAIL##############*/
$sendEmail = filter_var($_POST['sendEmail'], FILTER_SANITIZE_EMAIL);

/*#############RECIPIENTS NAME##############*/
$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
/*#############RECIPIDNTS EMAIL##############*/
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

$absolute_url = "http://www.bpwtesting.com/winter_walking/";

$message = "
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
<h1>".$p[name]."</h1>
</div>

<table style='width: 850px; text-align: center; margin-bottom: 20px;'>
  <tr>
<td style='font-size: 14px;'>".$p[description]."</td>
</tr>
</table>
<table style='width: 600px; clear:both; float:left; margin-top: 20px;'>
<tr><td>FEATURES</td></tr>
<tr><td>
".$p[features]."
</td></tr>
</table>
<div style='border: 2px solid black; padding: 20px 20px 40px 20px; background-color: white;'>
<table style='width: 200px; float:left; margin-left: 20px; margin-top: 20px;'>
<tr><td>IDEAL CONDITIONS</td></tr>
<tr><td>Ice</td><td>".$p[ice]."</td></tr><tr><td>Snow</td><td>".$p[snow]."</td></tr><tr><td>Oil</td><td>".$p[oil]."</td></tr><tr><td>fats</td><td>".$p[fats]."</td></tr><tr><td>Soaps</td><td>".$p[soaps]."</td></tr><tr><td>Chemicals</td><td>".$p[chemicals]."</td></tr><tr><td>Liquids</td><td>".$p[liquids]."</td></tr><tr><td>Mud</td><td>".$p[mud]."</td></tr><tr><td>Indoor</td><td>".$p[indoor]."</td></tr><tr><td>Outdoor</td><td>".$p[outdoor]."</td></tr><tr><td>Driving</td><td>".$p[driving]."</td></tr>
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
<td>".$xs."</td>
<td>".$s."</td>
<td>".$m."</td>
<td>".$l."</td>
<td>".$xl."</td>
<td>".$xxl."</td>
<td>".$xxxl."</td>
<td>".$xxxxl."</td>
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

$headers .= "From: Winter Walking <noreply@winterwalking.com>" . "\r\n";
$headers .= "Reply-To: No-Reply <noreply@winterwalking.com>" . "\r\n";

mail($email, "$sendName wants to share one of our products with you!", $message, $headers);
header('Location: thankyou.php');
die();
};
?>

<!-- Contact an expert -->

<div id="myModal4" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h1 id="myModalLabel">CONTACT &nbsp;<span class="blue">WINTER WALKING</span></h1>
  </div>



<div class="modal-body">
  <div class="form">
  <form name="contactform" class="clearfix" id="contactForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <div style="float: left;">
    <label>First Name</label>
    <input  type="text" placeholder="first name" name="firstName" maxlength="80" size="30"></div>
      <div style="float: right;">
      <label>Last Name</label>
    <input  type="text"  placeholder="last name" name="lastName" maxlength="80" size="30"></div>
    <div style="float: left;">
    <label>Company Name</label>
    <input  type="text"  placeholder="company name" name="company" maxlength="80" size="30"></div>
       <div style="float: right;">
       <label>Number of Employees Exposed</label>
    <input  type="text"  placeholder="Enter a Number" name="employees" maxlength="80" size="30"></div>
    <div style="float: left;">
    <label>State</label>
    <input  type="text"  placeholder="State" name="state" maxlength="80" size="30"></div>
    <div style="float: right;">
      <label>Phone</label>
    <input  type="text"  placeholder="2345678910" name="phone" maxlength="80" size="30"></div>
    <div style="clear: both; margin-top: 5px;">
      <label>Email</label>
    <input  type="email"  placeholder="youremail@yourdomain.com" name="email" maxlength="80" size="30"></div>
      <label>Comments</label>
    <textarea name="comments"  placeholder="comments..." rows="5" cols="20"></textarea><br><br>
    <button type="submit" value="Submit" name ="contact-submit" id="submit">SUBMIT</button>
  </form>
  </div>

</div>
</div>



<!-- Reqest a quote -->

<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h1 id="myModalLabel">REQUEST A &nbsp;<span class="blue">PRODUCT QUOTE</span></h1>
  </div>



<div class="modal-body">
  <div class="form">
  <form name="contactform" class="clearfix" id="contactForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <div style="float: left;">
    <label>First Name</label>
    <input  type="text" placeholder="first name" name="firstName" maxlength="80" size="30"></div>
      <div style="float: right;">
      <label>Last Name</label>
    <input  type="text"  placeholder="last name" name="lastName" maxlength="80" size="30"></div>
    <div style="float: left;">
    <label>Company Name</label>
    <input  type="text"  placeholder="company name" name="company" maxlength="80" size="30"></div>
       <div style="float: right;">
       <label>Number of Employees Exposed</label>
    <input  type="text"  placeholder="Enter a Number" name="employees" maxlength="80" size="30"></div>
    <?php
    include ('config.php');
    $p_model = $_GET["model"];
  if ($p_model)  {
    $query1 = mysqli_query ($con, "SELECT * FROM products WHERE '$p_model' = model ORDER BY name ASC");
  } else {
        $query1 = mysqli_query ($con, "SELECT * FROM products ORDER BY name ASC");
  };
    $query2 = mysqli_query ($con, "SELECT * FROM products ORDER BY name ASC");
    $query3 = mysqli_query ($con, "SELECT * FROM products ORDER BY name ASC");
    print '<div style="float: left;">';
    print '<label>Product 1</label><select name="product_1">';
    while ($prod1 = mysqli_fetch_array($query1)) {
    print '<option value="'.$prod1[name].'">'.$prod1[name].'</option>' ;
    }
    print ' </select></div>';
    print '<div style="float: right; margin-top: 5px;">';
    print '<label>Quantity</label><input  type="text"  placeholder="1000" name="product_1_quantity" maxlength="7" size="30">';
    print '</div>';
    print '<div style="float: left; margin-top: 5px;">';
    print '<label>Product 2</label><select name="product_2"><option>-</option>';
    while ($prod2 = mysqli_fetch_array($query2)) {
    print '<option value="'.$prod2[name].'">'.$prod2[name].'</option>' ;
    }
    print '</select></div>';
    print '<div style="float: right; margin-top: 5px;">';
    print '<label>Quantity</label><input  type="text"  placeholder="1000" name="product_2_quantity" maxlength="7" size="30">';
    print '</div>';
    print '<div style="float: left; margin-top: 5px;">';
    print '<label>Product 3</label><select name="product_3"><option>-</option>';
    while ($prod3 = mysqli_fetch_array($query3)) {
    print '<option value="'.$prod3[name].'">'.$prod3[name].'</option>' ;
    }
    print '</select></div>';
    print '<div style="float: right; margin-top: 5px;">';
    print '<label>Quantity</label><input  type="text"  placeholder="1000" name="product_3_quantity" maxlength="7" size="30">';
    print '</div>';
    ?>
    <br><br>
    <div style="clear: both; margin-top: 5px;">
               <label>Phone</label>
    <input  type="text"  placeholder="2345678910" name="phone" maxlength="80" size="30"></div>
    <label>Email</label>
    <input  type="email"  placeholder="youremail@yourdomain.com" name="email" maxlength="80" size="30">
    <label>Comments</label>
    <textarea name="comments"  placeholder="comments..." rows="5" cols="20"></textarea><br><br>
    <button type="submit" value="Submit" name="request-quote-submit" id="submit">SUBMIT</button>
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
  <form name="contactform" class="clearfix" id="contactForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
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