<?php
if(!isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirmpassword=$_POST['confirmpassword'];
    $conn=mysqli_connect("localhost","root","","register");
    $insert="insert into user(name,email,password,confirmpassword)VALUES('$name','$email','$password','$confirmpassword')";
    $output=mysqli_query($conn,$insert);
}
?>
