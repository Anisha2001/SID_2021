<?php

	// session start
    session_start();

    // include DB connection
    include('connection.php');

    // declaring variables
    $name = "";
    $email = "";
	$phone = "";
	$branch = "";
	$year = "";
    $password_1 = "";
    $password_2 = "";
    $salt = uniqid();

    // get form data
    if(isset($_POST['name'])) {
        $name = $_POST['name'];
    }
    if(isset($_POST['email'])) {
        $email = $_POST['email'];
    }
	if(isset($_POST['phoneno'])) {
        $phone = $_POST['phoneno'];
    }
	if(isset($_POST['branch'])) {
        $branch = $_POST['branch'];
    }
	if(isset($_POST['year'])) {
        $year = $_POST['year'];
    }
    if(isset($_POST['password_1'])) {
        $password_1 = $_POST['password_1'];
    }
    if(isset($_POST['password_2'])) {
        $password_2 = $_POST['password_2'];
    }

   
	if($name != "" && $email != "" && $password_1 != "" && $password_2 != "") { // if the form fields are not empty!
        
        $checkUser = "SELECT * FROM users WHERE email = '$email'";
        $checkUserStatus = mysqli_query($conn,$checkUser) or die(mysqli_error($conn));

        if(mysqli_num_rows($checkUserStatus) > 0) { // if user exists!

            header('Location: registration.php?message=You have already registered!');

        } else {

            if($password_1 == $password_2) { // if the password fields match!
            
                $insertUser = "INSERT INTO users(name,email,phoneno,branch,year,password) VALUES('$name','$email','$phone','$branch','$year','$password_1')";
                $insertUserStatus = mysqli_query($conn,$insertUser) or die(mysqli_error($conn));
    
                if($insertUserStatus) { // if the user is successfully registered!
      
                    header('Location:login.php?message=You have registered successfully!');
    
                }  else { // if user is not registered successfully!
    
                    header('Location:registration.php?message=Unable to register!');
    
                }
    
            } else { // if password fields dont match!
    
                header('Location:registration.php?message=Password fields do not match!');
    
            }

        }


    } else { // if any of the fields are empty!

        header('Location: ../register.php?message=Please fill the fields properly!');  

    }
?>

    





