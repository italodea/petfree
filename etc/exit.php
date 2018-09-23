<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['id']);
unset($_SESSION['nome']);
session_destroy();
header("location:../");

?>