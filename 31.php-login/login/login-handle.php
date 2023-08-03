<?php

if (isset($_POST['submit-btn'])) {
    include "../config/db.php";

    $email = $_POST['email'];
    $pass = $_POST['password'];
        $query = "SELECT * FROM login.user WHERE user_Email='".$email."' and user_Password='".$pass."'";
        $record = mysqli_query($connect,$query);
        if (mysqli_num_rows($record)>0) {
            print_r(mysqli_fetch_row($record));
        }else{

            echo '<script>
            alert("Invalid Email Or Password")
            window.location.href = "login.php"
            </script>';
        }
}
