<?php
session_start();
session_destroy();
header("Location: bai21_login.html");
exit();
?>