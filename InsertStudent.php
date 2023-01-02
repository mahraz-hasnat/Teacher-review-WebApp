<?php
    include 'dbconnection.php';

    $name=$_POST['student_name'];
    $id=$_POST['student_id'];
    $email=$_POST['student_email'];
    $pass=$_POST['student_password'];
    $hashed_pass= password_hash($pass, PASSWORD_ARGON2I);

    $sql=mysqli_query($con,"INSERT into student(student_id,name,email,password) VALUES('$id','$name','$email','$hashed_pass')");

    header('Location: index.php');
    exit;

?>