<?php

	// session start
    session_start();

    // including DB connection
    include('connection.php');

    // declaring variables
    
    $email = "";
    $password = "";
    

    //To get form data
   
    if(isset($_POST['email'])) {
        $email = $_POST['email'];
    }
	
    if(isset($_POST['password_1'])) {
        $password_1 = $_POST['password_1'];
    }

    // if the fields are not empty
    if($email != "" && $password_1 != "") {

        $checkUser = "SELECT * FROM users WHERE email = '$email'";
        $checkUserStatus = mysqli_query($conn,$checkUser) or die(mysqli_error($conn));
    }

    if(mysqli_num_rows($checkUserStatus) > 0) { // if user exists!

        $getpassword = "SELECT * FROM `users` WHERE `email` = '$email'";
        $getpwd = mysqli_query($conn,$getpassword) or die(mysqli_error($conn));
        $getpass = mysqli_fetch_assoc($getpwd);

        $pass = $getpass['password'];


        if($password == $pass){

        $_SESSION['email'] = $email;

        header('Location: index.html');

        } else {

            header('Location:login.php?message=Wrong Password');

        }

   
} else {

    header('Location:login.php?message=Unable to login to your account.');

}


?>   
    

