<?php

	require("helper.php");

	//error variable

	$error=array();

	$name = validate_input_text($_POST["name"]);
	if (empty($name)) {
		$error[]="Please mention Name.";
	}

	$email = validate_input_email($_POST["email"]);
	if (empty($email)) {
		$error[]="Please mention E-mail.";
	}

    $phoneno = validate_input_text($_POST["phoneno"]);
	if (empty($phoneno)) {
		$error[]="Please mention Phone Number.";
	}

	$branch = validate_input_text($_POST["branch"]);
	if (empty($branch)) {
		$error[]="Please mention Branch.";
	}

    $year = validate_input_text($_POST["year"]);
	if (empty($year)) {
		$error[]="Please mention Year.";
	}
 
	$password_1 = validate_input_text($_POST["password_1"]);
	if (empty($password_1)) {
		$error[]="Please enter valid Password.";
	}

	$password_2 = validate_input_text($_POST["password_2"]);
	if (empty($password_2)) {
		$error[]="Please confirm the Password.";
	}



	if (empty($error)) {
		//register a new user
		$hashed_pd = password_hash($password_1,PASSWORD_DEFAULT);
		require("connection.php");

		//make a query
		$query="INSERT INTO new-user(id,Name,Email,phone number,branch,year,password_1,registered on)";
		$query.="VALUES('',?,?,?,?,?,?,?,NOW())";
        

		//initialising a statement
		$q=mysqli_stmt_init($con);

		//preparing sql statement

		mysqli_stmt_prepare($q,$query);

		//binding values

		mysqli_stmt_bind_param($q, 'sssssss',$name, $email,$phoneno,$branch,$year,$hashed_pd);
        
		//execute statement
		mysqli_stmt_execute($q);
		if (mysqli_stmt_affected_rows($q)==1) {
			print"Recorded successfully.";
		} else {
			print"Error while registering.";
		}


		
        echo("valid");
    } else {
        echo("not valid");
    }


    


    








   ?>