<?php
session_start();
$_SESSION["isLogin"] =false;
session_destroy();
?>