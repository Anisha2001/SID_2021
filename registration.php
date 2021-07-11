<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign Up</title>

	<link rel="stylesheet" href="design/style1.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
	
	

	<main id="main_area">

	    <!-- Registration Area -->

		<section id="register">
			<div class="row m-0">
				<div class="col-lg-4 offset-lg-2">
					<div class="text-center pb-4">
					    <h1 class="login-title text-dark">Register here</h1>
                        <p class="p-1 m-0 font-ubuntu text-black-60">Join Us at The Spectrum Club</p>
				        <span class="font-ubuntu text-black-60">Already a Member? <a href="login.php">Log In</a></span>
				
					</div>

					<!-- Form starts -->

					<div class="d-flex justify-content-center">
						<form action="register-process.php" method="post" enctype="multipart/form-data" id="rform">
						    <div class="form-row">
								<div class="col">
									<input class="form-control" placeholder="Name" type="text" name="name" required>
								</div>
							</div>

							<div class="form-row my-3">
								<div class="col">
								    <input class="form-control" placeholder="E-mail Address*"  type="email" name="email" required>
								</div>
							</div>

							<div class="form-row my-3">
								<div class="col">
								<input class="form-control" placeholder="Phone Number*" type="text" name="phoneno" required>
								</div>
							</div>

							<div class="form-row my-3">
								<div class="col">
								<input class="form-control" placeholder="Branch*" type="text" name="branch" required>
								</div>
							</div>

							<div class="form-row my-3">
								<div class="col">
								<input class="form-control" placeholder="Year*" type="text" name="year" required>
								</div>
							</div>

							<div class="form-row my-3">
								<div class="col">
								<input class="form-control" placeholder="Password*" type="password" name="password_1" required>
								</div>
							</div>

							<div class="form-row my-3">
								<div class="col">
								<input class="form-control" placeholder="Confirm Password*" type="password" name="password_2" required>
								<small id="confirm_error" class="text-danger"></small>
								</div>
							</div>

							<div class="submit-btn text-center my-4">
								<button type="submit" class="btn btn-warning rounded-pill text-dark px-5 ">Continue</button>
							</div>

							


						</form>

					</div>
				    

				</div>

			</div>
			


		</section>



	</main>


	
















<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="design/mainpage.js"></script>



	
</body>
</html>