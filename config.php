<?php
/* login.php sign-in credentials */
$loginusername = "admin";
$loginpassword =  "password";

$con = mysqli_connect("winterwalking2.db.4800490.hostedresource.com", "winterwalking2", "Winter22!", "winterwalking2");
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>