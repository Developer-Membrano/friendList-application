<?php

    $con = mysqli_connect("localhost","root","","myfriend");

    if(!$con){
        die('Connection Failed'. mysqli_connect_error());
    }

?>