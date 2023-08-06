<?php

$conn = mysqli_connect("localhost", "root", "", "village");
if(!$conn){
    die("Error: " .mysqli_connect_error());
}

?>