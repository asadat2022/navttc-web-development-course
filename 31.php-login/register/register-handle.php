<?php

if (isset($_POST['submit-btn'])) {
    include "../config/db.php";

    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $repass = $_POST['repass'];
    if ($pass === $repass) {
        $query = "INSERT INTO login.user (user_Username,user_Name,user_Password,user_Email) VALUES ('".$username."','".$name."','".$pass."','".$email."')";
        
        $record = mysqli_query($connect,$query);

        if ($record>0) {
            echo 'Login';
        }else{
            echo '<script>
            alert("Email OR Username Already Taken")
            window.location.href = "register.php"
            </script>';
        }
        // header("location:register.php");
    }else{
        echo '<script>
        alert("Password not Match")
        window.location.href = "register.php"
        </script>';
    }
}
