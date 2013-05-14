<?php
$con = mysqli_connect("127.0.0.1", "root", "password", "winter_walking");
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>