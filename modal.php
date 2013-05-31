<?php
echo '

<style type="text/css">
body{
text-align: center;
padding-top: 20px;
font-family: GillSansMT;
}
img{
width: 200px;
}
p{
text-align: center;
}
form{
text-align: center;
font-size: 12px;
}
</style>

<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Modal header</h3>
  </div>
  <div class="modal-body">
<p>Contact us using the form below:</p><br>
  <div class="form">
  <form name="contactform" class="clearfix" id="contactForm" method="post" action="send_form_email.php">
    First Name:
    <input  type="text" placeholder="first name" name="first_name" maxlength="80" size="30"><br><br>
    Last Name:
    <input  type="text"  placeholder="last name" name="last_name" maxlength="80" size="30"><br><br>
    Email:
    <input  type="email"  placeholder="youremail@yourdomain.com" name="email" maxlength="80" size="30"><br><br>
     Date Requested:
    <input  type="date" id="datepicker" placeholder="Choose a date" name="date"><br><br>
         Time Requested:
    <input  type="time" id="timepicker" placeholder="Choose a time" name="time"><br><br>
    Inquiry:
    <textarea name="comments"  placeholder="comments..." rows="5" cols="20"></textarea><br><br>
    <button type="submit" value="Submit" id="submit">SUBMIT</button>
  </form>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary">Save changes</button>
  </div>
</div>';
?>