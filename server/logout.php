<?php
session_start();
session_destroy();

echo "seccussfully logged out";
sleep(2);

header("location: ./../login.php");
?>