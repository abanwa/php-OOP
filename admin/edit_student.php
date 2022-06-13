
<?php

include("../config/app.php");

include_once("../controllers/authenticationController.php");

$authenticated = new AuthenticationController;

$authenticated->admin();

include_once("controllers/studentController.php");

include("includes/header.php"); // this is to call the header file

?>

<div class="container-fluid px-4">
    <div class="row mt-4">
    	<div class="col-md-12">

    		<?php include("../message.php"); ?>

    		<div class="card">
    			<div class="card-header">
    				<h4>Edit Student</h4>
    			</div>
    			<div class="card-body">

    				<?php

    				if (isset($_GET["id"])){

    					$student_id = validateInput($db->conn, $_GET["id"]);
    					$student = new StudentController;

    					$result = $student->edit($student_id);

    					if ($result){
    							?>

    				<form action="code/student_code.php" method="POST">
    					<input type="hidden" name="student_id" value="<?= $result["id"]; ?>">
    					<div class="mb-3">
    						<label for="full-name">Full Name</label>
    						<input type="text" name="fullname" class="form-control" value="<?= $result["fullname"]; ?>" required>
    					</div>
    					<div class="mb-3">
    						<label for="full-name">Email ID</label>
    						<input type="email" name="email" class="form-control" value="<?= $result["email"]; ?>" required>
    					</div>
    					<div class="mb-3">
    						<label for="full-name">Course</label>
    						<input type="text" name="course" class="form-control" value="<?= $result["course"]; ?>" required>
    					</div>
    					<div class="mb-3">
    						<label for="full-name">Phone No</label>
    						<input type="text" name="phone" class="form-control" value="<?= $result["phone"]; ?>" required>
    					</div>
    					<div class="mb-3">
    						<button type="submit" name="update_student" class="btn btn-primary">Update Student</button>
    					</div>
    				</form>


    							<?php
    					} else {
    						echo "<h4>No Record Found</h4>";
    					}

    				} else {
    					echo "<h4>Something went wrong</h4>";
    				}

    				?>
    				
    			</div>
    		</div>
    	</div>
    </div>			
    

    </div>


<?php

include("includes/footer.php"); // this is to call the footer file

include("includes/scripts.php"); // this is to call the scripts file


?>