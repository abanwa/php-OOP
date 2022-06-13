
<?php 

include("config/app.php");

include("code/authentication_code.php");

$auth->isLoggedIn();

include("includes/header.php");

include("includes/navbar.php");



 ?>


<div class="py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6">

				<?php include("message.php"); ?>

				<div class="card">
					<div class="card-header">
						<h4>Login</h4>
					</div>
					<div class="card-body">

						<form action="" method="POST">
							<div class="mb-3">
								<label for="">Email Id</label>
								<input type="email" name="email" class="form-control"/>
							</div>
							<div class="mb-3">
								<label for="">Password</label>
								<input type="password" name="password" class="form-control"/>
							</div>
							<div class="mb-3">
								<button type="submit" name="login_btn" class="btn btn-primary">Submit</button>
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
		
	</div>
	
</div>
