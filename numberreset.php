<?php
session_start();
unset($_SESSION["number"]);
session_destroy();
header("Location: number.php");
exit;
?>