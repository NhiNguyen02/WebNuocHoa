<?php
<<<<<<< HEAD
    $conn =mysqli_connect('localhost:3307','root','','webnuochoa');
=======

$db_name = 'mysql:host=localhost; dbname=webnuochoa';
$user_name = 'root';
$user_password = '';

$conn = new PDO($db_name, $user_name, $user_password);

    //$conn =mysqli_connect('localhost','root','','webnuochoa');

>>>>>>> c09912d3d36db8289e32ea15d5282f064940ae3e
?>
