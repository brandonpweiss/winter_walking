<?php
/* login.php sign-in credentials */
$loginusername = "admin";
$loginpassword =  "password";

/* database info */
$con = mysqli_connect("localhost", "root", "root", "winter_walking");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>