<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="normalize.css">
  <link rel="stylesheet" href="style.css">
  <meta charset="UTF-8">
  <title>Contact Winter Walking | All-Traction Footwear for Reducing Slips and Falls</title>
  <meta name="description" content="Over 30 years of slip resistant footwear, including ice grips, crampons, ice cleats, and over the boot footwear.">
    <script src="jquery.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="modernizr.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>
<body>
  <div class="tops">
  <div id="white">
  <div id="logobox">
 <a href="index.php"><img id="logo" src="img/logo.png" alt="Winter Walking we dont just make ice cleats, we perfect them"></a>
    <div id="tagline">WE DONT JUST MAKE ICE CLEATS, WE PERFECT THEM</div>
  </div>
  </div>
<!-- Request Information -->
<?php include('nav.php');?>
<?php include('header.php');?>
<div class="content">
<div id="myModal2" style="max-width: 500px; margin: 0 auto;">
  <div class="modal-header">
    <h1 id="myModalLabel" style="color: #666666">CONTACT US</span></h1>
  </div>
<div class="contactstuff" style="text-align: center;">
<div class="bold">Winter Walking</div>

<ul>
<li>P 1-888-NO-SLIPS (667-5477)</li>
<li>F 1-215-441-9642</li>
<li>E <a href="mailto:info@winterwalking.com">info@winterwalking.com</a></li>
</ul>
<br>
<ul>
<li>Winter Walking</li>
<li>400 Babylon Road</li>
<li>Horsham, PA 19044</li>
</ul>
</div>
<br>
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
    <label>Address Line 1</label>
    <input  type="text"  placeholder="123 Main Street" name="address_1" maxlength="80" size="30"></div>
    <div style="float: right;">
    <label>City</label>
    <input  type="text"  placeholder="City" name="city" maxlength="80" size="30"></div>
    <div style="float: left;">
    <label>State</label>
    <input  type="text"  placeholder="State" name="state" maxlength="80" size="30">
</div>
      <div style="float: right;">
    <label>Zip Code</label>
    <input  type="text"  placeholder="12345" name="zip" maxlength="80" size="30"></div>
    <div style="float: left;">
      <label>Phone</label>
    <input  type="text"  placeholder="2345678910" name="phone" maxlength="80" size="30"></div>
    <div style="float: right;">
      <label>Email</label>
    <input  type="email"  placeholder="youremail@yourdomain.com" name="email" maxlength="80" size="30"></div>
  <div style="clear: both; margin-top: 5px;">
      <label>Comments</label>
    <textarea name="comments"  placeholder="comments..." rows="5" cols="20"></textarea></div><br><br>
    <button type="submit" value="Submit" name ="request-info-submit" id="submit">SUBMIT</button>
  </form>
  </div>

</div>
</div>
</div>
<?php include('footer.php');?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44403652-1', 'winterwalking.com');
  ga('send', 'pageview');

</script>
</body>
</html>