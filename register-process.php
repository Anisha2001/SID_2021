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
        echo("valid");
    } else {
        echo("not valid");
    }


    


    








   ?>