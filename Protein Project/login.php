<?php 
if(!isset($_POST['submit']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $conn=mysqli_connect("localhost","root","","register");
    $insert="select*from user where(email='$email')AND(password='$password')";
    $output=mysqli_query($conn,$insert);
    $result=mysqli_num_rows($output);
    if($result){
        header("location:index.html");
    }
    else{
        echo "failure";
    }
}
?>