<?php
if(isset($_POST['name'])){
    $name = $_POST['name'];
    $Gender = $_POST['Gender'];
    $email = $_POST['email'];
    $Phonenumber = $_POST['Phonenumber'];
    $password = $_POST['password'];

    

    $conx=mysqli_connect("localhost","root","","nicedemo");


    $sql="INSERT INTO `register`(`name`, `Gender`, `email`, `Phonenumber`, `password`) VALUES ('$name','$Gender','$email','$Phonenumber','$password')";

    $result=mysqli_query($conx,$sql);

    if($result == TRUE){
        echo "success";
    }else{
        echo "failed";
    }
}

