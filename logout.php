<?php
session_start();
header('Location: index.php?logout=successful');
unset($_SESSION['user']);
unset($_SESSION['uid']);
?>
