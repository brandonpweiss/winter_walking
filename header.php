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


$modelnumber = $_POST['productmodelnumber'];
$query = mysqli_query ($con, "SELECT * FROM products WHERE model = '$modelnumber'");
$p = mysqli_fetch_array($query);

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
<div class='productimage' style='text-align:center;'><img style='width: 225px;' src='$absolute_url/$p[img_url1]' alt='shoe'><br>
<h1>$p[name]</h1>
</div>

<table style='width: 850px; text-align: center; margin-bottom: 20px;'>
  <tr>
<td style='font-size: 14px;'>$p[description]</td>
</tr>
</table>
<table style='width: 600px; clear:both; float:left; margin-top: 20px;'>
<tr><td>FEATURES</td></tr>
<tr><td>
$p[features]
</td></tr>
</table>
<div style='border: 2px solid black; padding: 20px 20px 40px 20px; background-color: white;'>
<table style='width: 200px; float:left; margin-left: 20px; margin-top: 20px;'>";

$message .= "<tr>
                  <th>Conditions</th>
                  <th>Excellent</th>
                  <th>Good</th>
                  <th>N/A</th>
                </tr>";
              $message .= "<tr>";
                $message .= "<th>Ice</th>";
                  $message .= "<td>";
                    if ($p[ice] == 'great'){ $message .= "&#x2713;"; };
                  $message .= "</td>";
                  $message .= "<td>";
                    if ($p[ice] == 'good'){ $message .= "&#x2713;"; };
                  $message .= "</td>";
                  $message .= "<td>";
                    if ($p[ice] == 'n/a'){ $message .= "&#x2713;"; };
                  $message .= "</td>";
                $message .= "</tr>";
              $message .= "<tr>";
                $message .= "<th>Snow</th>";
                                  $message .= "<td>";
                    if ($p[snow] == 'great'){ $message .= "&#x2713;"; };
                  $message .= "</td>";
                  $message .= "<td>";
                    if ($p[snow] == 'good'){ $message .= "&#x2713;"; };
                  $message .= "</td>";
                  $message .= "<td>";
                    if ($p[snow] == 'n/a'){ $message .= "&#x2713;"; };
                  $message .= "</td>";
                $message .= "</tr>";
              $message .= "<tr>";
                $message .= "<th>Oil</th>";
                                  $message .= "<td>";
                    if ($p[oil] == 'great'){ $message .= "&#x2713;"; };
                  $message .= "</td>";
                  $message .= "<td>";
                    if ($p[oil] == 'good'){ $message .= "&#x2713;"; };
                  $message .= "</td>";
                  $message .= "<td>";
                    if ($p[oil] == 'n/a'){ $message .= "&#x2713;"; };
                  $message .= "</td>";

                $message .= "</tr>";
                $message .= "<tr>";
                  $message .= "<th>Fats</th>";
                  $message .= "<td>";
                    if ($p[fats] == 'great'){ $message .= "&#x2713;"; };
                  $message .= "</td>";
                  $message .= "<td>";
                    if ($p[fats] == 'good'){ $message .= "&#x2713;"; };
                  $message .= "</td>";
                  $message .= "<td>";
                    if ($p[fats] == 'n/a'){ $message .= "&#x2713;"; };
                  $message .= "</td>";
                $message .= "</tr>";
                $message .= "<tr>";
                  $message .= "<th>Soaps</th>";
                  $message .= "<td>";
                    if ($p[soaps] == 'great'){ $message .= "&#x2713;"; };
                  $message .= "</td>";
                  $message .= "<td>";
                    if ($p[soaps] == 'good'){ $message .= "&#x2713;"; };
                  $message .= "</td>";
                  $message .= "<td>";
                    if ($p[soaps] == 'n/a'){ $message .= "&#x2713;"; };
                  $message .= "</td>";
                $message .= "</tr>";
                $message .= "<tr>";
                  $message .= "<th>Chemicals</th>";
                  $message .= "<td>";
                    if ($p[chemicals] == 'great'){ $message .= "&#x2713;"; };
                  $message .= "</td>";
                  $message .= "<td>";
                    if ($p[chemicals] == 'good'){ $message .= "&#x2713;"; };
                  $message .= "</td>";
                  $message .= "<td>";
                    if ($p[chemicals] == 'n/a'){ $message .= "&#x2713;"; };
                  $message .= "</td>";
                $message .= "</tr>";
                $message .= "<tr>";
                  $message .= "<th>Liquids</th>";
                  $message .= "<td>";
                    if ($p[liquids] == 'great'){ $message .= "&#x2713;"; };
                  $message .= "</td>";
                  $message .= "<td>";
                    if ($p[liquids] == 'good'){ $message .= "&#x2713;"; };
                  $message .= "</td>";
                  $message .= "<td>";
                    if ($p[liquids] == 'n/a'){ $message .= "&#x2713;"; };
                  $message .= "</td>";
                $message .= "</tr>";
                $message .= "<tr>";
                  $message .= "<th>Mud</th>";
                  $message .= "<td>";
                    if ($p[mud] == 'great'){ $message .= "&#x2713;"; };
                  $message .= "</td>";
                  $message .= "<td>";
                    if ($p[mud] == 'good'){ $message .= "&#x2713;"; };
                  $message .= "</td>";
                  $message .= "<td>";
                    if ($p[mud] == 'n/a'){ $message .= "&#x2713;"; };
                  $message .= "</td>";
                $message .= "</tr>";
                $message .= "<tr>
                  <th>Usage</th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>";
                $message .= "<tr>";
                  $message .= "<th>Indoor</th>";
                  $message .= "<td>";
                    if ($p[indoor] == 'great'){ $message .= "&#x2713;"; };
                  $message .= "</td>";
                  $message .= "<td>";
                    if ($p[indoor] == 'good'){ $message .= "&#x2713;"; };
                  $message .= "</td>";
                  $message .= "<td>";
                    if ($p[indoor] == 'n/a'){ $message .= "&#x2713;"; };
                  $message .= "</td>";
                $message .= "</tr>";
                $message .= "<tr>";
                  $message .= "<th>Outdoor</th>";
                  $message .= "<td>";
                    if ($p[outdoor] == 'great'){ $message .= "&#x2713;"; };
                  $message .= "</td>";
                  $message .= "<td>";
                    if ($p[outdoor] == 'good'){ $message .= "&#x2713;"; };
                  $message .= "</td>";
                  $message .= "<td>";
                    if ($p[outdoor] == 'n/a'){ $message .= "&#x2713;"; };
                  $message .= "</td>";
                $message .= "</tr>";
                $message .= "<tr>
                  <th>Safe for Driving</th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>";
                $message .= "<tr>";
                  $message .= "<th>Driving</th>";
                  $message .= "<td>";
                    if ($p[driving] == 'great'){ $message .= "&#x2713;"; };
                  $message .= "</td>";
                  $message .= "<td>";
                    if ($p[driving] == 'good'){ $message .= "&#x2713;"; };
                  $message .= "</td>";
                  $message .= "<td>";
                    if ($p[driving] == 'n/a'){ $message .= "&#x2713;"; };
                  $message .= "</td>";
                $message .= "</tr>";
$message .= "
</table>
<table style='width: 300px; top: 20px; position: relative; clear:both;'>
                <tr>
                  <th>SIZES</th>
                  <th>MODEL</th>
                  <th>FITS MENS</th>
                  <th>FITS WOMANS</th>
                </tr>";

if ($p[XSM] && $p[XSW]) {
                  $message .="
                  <tr>
                    <th>XS</th>
                    <td>'.$p[xsmodel].'</td>
                    <td>'.$p[XSM].'</td>
                    <td>'.$p[XSW].'</td>
                  </tr>
                  ";
                }
                if ($p[SM] && $p[SW]) {
                  $message .="
                <tr>
                  <th>S</th>
                  <td>'.$p[smodel].'</td>
                  <td>'.$p[SM].'</td>
                  <td>'.$p[SW].'</td>
                </tr>
                  ";
                }
                if ($p[MM] && $p[MW]) {
                  $message .="
                <tr>
                  <th>M</th>
                  <td>'.$p[mmodel].'</td>
                  <td>'.$p[MM].'</td>
                  <td>'.$p[MW].'</td>
                </tr>
                  ";
                }
                if ($p[LM] && $p[LW]) {
                  $message .="
                <tr>
                  <th>L</th>
                  <td>'.$p[lmodel].'</td>
                  <td>'.$p[LM].'</td>
                  <td>'.$p[LW].'</td>
                </tr>
                  ";
                }
                if ($p[XLM] && $p[XLW]) {
                  $message .="
                <tr>
                  <th>XL</th>
                  <td>'.$p[xlmodel].'</td>
                  <td>'.$p[XLM].'</td>
                  <td>'.$p[XLW].'</td>
                </tr>
                  ";
                }
                if ($p[XXLM] && $p[XXLW]) {
                  $message .="
                <tr>
                  <th>XXL</th>
                  <td>'.$p[xxlmodel].'</td>
                  <td>'.$p[XXLM].'</td>
                  <td>'.$p[XXLW].'</td>
                </tr>
                  ";
                }
                if ($p[XXXLM] && $p[XXXLW]) {
                  $message .="
                <tr>
                  <th>XXXL</th>
                  <td>'.$p[xxxlmodel].'</td>
                  <td>'.$p[XXXLM].'</td>
                  <td>'.$p[XXXLW].'</td>
                </tr>
                  ";
                }
                if ($p[XXXXLM] && $p[XXXXLW]) {
                  $message .="
                <tr>
                  <th>XXXXL</th>
                  <td>'.$p[xxxxlmodel].'</td>
                  <td>'.$p[XXXXLM].'</td>
                  <td>'.$p[XXXXLW].'</td>
                </tr>
                  ";
                }
                if ($p[model] == 'JD4022 | JD4122' && $p[name] == 'GRIPS Over the Sock') {
                  $message .="
                  <tr>
                    <th>WHOLE SIZES ONLY</th>
                    <td>JD4022 | JD4122</td>
                    <td>7 - 13</td>
                    <td>7 - 13</td>
                  </tr>
                  <tr>
                    <th>WHOLE SIZES ONLY</th>
                    <td>JD4022 | JD4122</td>
                    <td>7 - 13</td>
                    <td>7 - 13</td>
                  </tr>
                  ";
                }

$message .="</table>
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
    <input type="hidden" name="productmodelnumber" value="<?php print $product_model; ?>">
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