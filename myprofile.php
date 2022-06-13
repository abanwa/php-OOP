
<?php

include("config/app.php");
//include("code/authentication_code.php");

include_once("controllers/authenticationController.php");

$authenticated = new AuthenticationController;

$data = $authenticated->authDetail();

include("includes/header.php");

include("includes/navbar.php");

?>




<div class="py-5">
	<div class="container">

		<?php include("message.php"); ?>

		<h1>My profile Page</h1>
		<hr>

		<h4>Full Name: <?= $data["fname"]." ".$data["lname"]; ?></h4>
		<h4>Email:&nbsp;&nbsp;<?= $data["email"]; ?></h4>
		<h4>Created At :&nbsp;&nbsp;<?= date("l d-m-Y h:m a", strtotime($data["created_at"])); ?></h4>
		
	</div>
	
</div>



<?php include("includes/footer.php") ?>


