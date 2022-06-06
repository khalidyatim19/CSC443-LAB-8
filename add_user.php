<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include 'conn. php';

$sql="insert into user (first name,last name,email,pass_word)
values ('$_POST[firstname]','$_POST(lastname]','$_POST[email]',
'$_POST(password] ','$_POST(reg_date]')";
    if ('mysqli_query ($conn, $sq1)){
        die('Error: '.mysqli_error ());
    }
    echo "I record successfully added...";
?>
</body>
</html>