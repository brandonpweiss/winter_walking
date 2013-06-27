<?php
echo '
  <header>
  <div id="sticky_navigation_wrapper">
    <div id="sticky_navigation">
      <nav>
    <ul>
      <li><a href="index.php">FEATURED</a></li>
      <li><a class="hide2" href="featured-product.php">OUR PRODUCTS</a></li>
      <li><a href="information.php">OUR COMPANY</a></li>
      <li id="contact1"><a href="#myModal" role="button" data-toggle="modal">CONTACT</a></li>
      <li id="contact2"><a href="#" id="footernav">CONTACT</a></li>
    </ul>
      </nav>
    </div>
  </div>
</header>';
?>


<?php
echo '
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h1 id="myModalLabel">CONTACT &nbsp;<span class="blue">WINTER WALKING</span></h1>
  </div>



<div class="modal-body">
  <div class="form">
  <form name="contactform" class="clearfix" id="contactForm" method="post" action="send_form_email.php">
   	<label>First Name</label>
    <input  type="text" placeholder="first name" name="first_name" maxlength="80" size="30"><br><br>
    	<label>Last Name</label>
    <input  type="text"  placeholder="last name" name="last_name" maxlength="80" size="30"><br><br>
    <label>Company Name</label>
    <input  type="text"  placeholder="company name" name="last_name" maxlength="80" size="30"><br><br>
    	<label>Email</label>
    <input  type="email"  placeholder="youremail@yourdomain.com" name="email" maxlength="80" size="30"><br><br>
    	<label>Comments</label>
    <textarea name="comments"  placeholder="comments..." rows="5" cols="20"></textarea><br><br>
    <button type="submit" value="Submit" id="submit">SUBMIT</button>
  </form>
  </div>

</div>
</div>';
?>