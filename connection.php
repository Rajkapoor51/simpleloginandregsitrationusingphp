<?php

$con=mysqli_connect("localhost", "root", "", "userregister");
if(mysqli_connect_error()){
    echo "<script>alert('can not connect')</script>";
    exit();
};



?>