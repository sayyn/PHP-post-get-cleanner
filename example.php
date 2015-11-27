<?php 
include 'class.cleanner.php';//include class.cleanner.php
var_dump($_GET);//before
Cleanner::Clear();
var_dump($_GET);//after
// beatifull
?>
