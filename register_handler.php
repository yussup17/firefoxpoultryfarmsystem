<?php
if(isset($_POST["btn_reg"])){
    //RECEIVE DATA FROM THE USER
    $name= $_POST["x"];
    $email=$_POST["y"];
    $password=$_POST["z"];
    //to start saving, connect to your created database
    require_once "connection.php";
    //now prepare the insert query
    $insertQuery="INSERT INTO `users`(`id`, `jina`, `arafa`, `SIRI`) VALUES (null,'$name','$email','$password')";
    //complete the saving using mysqli query function
     $save=mysqli_query($connection,$insertQuery);

     //check if the savings was successful
    if(isset($save)){
        echo "user registered successfully ";

    }else{
        echo "user registration failed";
    }
}