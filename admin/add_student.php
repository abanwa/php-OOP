
<?php

include("../config/app.php");

include_once("../controllers/authenticationController.php");

$authenticated = new AuthenticationController;

$authenticated->admin();

include("includes/header.php"); // this is to call the header file

?>

<div class="container-fluid px-4">
    <div class="row mt-4">
    	<div class="col-md-12">

    		<?php include("../message.php"); ?>

    		<div class="card">
    			<div class="card-header">
    				<h4>Add Student</h4>
    			</div>
    			<div class="card-body">
    				<form action="code/student_code.php" method="POST">
    					<div class="mb-3">
    						<label for="full-name">Full Name</label>
    						<input type="text" name="fullname" class="form-control" required>
    					</div>
    					<div class="mb-3">
    						<label for="full-name">Email ID</label>
    						<input type="email" name="email" class="form-control" required>
    					</div>
    					<div class="mb-3">
    						<label for="full-name">Course</label>
    						<input type="text" name="course" class="form-control" required>
    					</div>
    					<div class="mb-3">
    						<label for="full-name">Phone No</label>
    						<input type="text" name="phone" class="form-control" required>
    					</div>
    					<div class="mb-3">
    						<button type="submit" name="save_student" class="btn btn-primary">Save Student</button>
    					</div>
    				</form>
    			</div>
    		</div>
    	</div>
    </div>			
    

    </div>


<?php

include("includes/footer.php"); // this is to call the footer file

include("includes/scripts.php"); // this is to call the scripts file


?>