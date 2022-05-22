<?php
$link = mysqli_connect("localhost", "root", "");

mysqli_select_db($link, "inservices");
$link->set_charset("UTF8");
   
?>