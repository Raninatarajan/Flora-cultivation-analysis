<?php

$con = new mysqli('localhost','username','','blossom');
if($con ->connect_errno) {
    echo $con->connect_error;
    die('Sorry there is some problems');
}

?>