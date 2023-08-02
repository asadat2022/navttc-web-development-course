
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../00.Data/bootstrap/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    

<table class="table table-striped table-bordered">
    
<thead>
<tr>
    <th>ID</th>
    <th>name</th>
    <th>username</th>
    <th>email</th>
    <th>phone</th>
    <th>website</th>
</tr>
</thead>

<?php 
    // include "./user.php";
    $connect = mysqli_connect('localhost','root','root','social');

    $query = 'select * from user';

    $record = mysqli_query($connect,$query);

    echo mysqli_num_rows($record);

    while ($user = mysqli_fetch_array($record)){

        echo 
        '<tr id="user_' .$user['id']. '">' .
        '<td>' .$user['id'].  '</td>' .
        '<td>' .$user['name'].  '</td>' .
        '<td>' .$user['username'].  '</td>' .
        '<td>' .$user['email'].  '</td>' .
        '<td>' .$user['phone'].  '</td>' .
        '<td>' .$user['website'].  '</td>' .
        '</tr>';
    }

    // foreach ($arr as $key => $value) {
    //     echo 
    //     '<tr id="user_' .$value['id']. '">' .
    //     '<td>' .$value['id'].  '</td>' .
    //     '<td>' .$value['name'].  '</td>' .
    //     '<td>' .$value['username'].  '</td>' .
    //     '<td>' .$value['email'].  '</td>' .
    //     '<td>' .$value['phone'].  '</td>' .
    //     '<td>' .$value['website'].  '</td>' .
    //     '</tr>';
    // }
    ?>

</table>
<script src="../00.Data/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>