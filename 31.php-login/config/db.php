<?php 

$connect = mysqli_connect("localhost",'root','root','login');

if (mysqli_connect_errno()>0) {
    echo mysqli_connect_error();
}

?>