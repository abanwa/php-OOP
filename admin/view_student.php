
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
    				<h4>view Student</h4>
    			</div>
    			<div class="card-body">
    				<div class="table-responsive">
    					<table class="table table-bordered">
    						<thead>
    							<tr>
    								<th>ID</th>
    								<th>Full Name</th>
    								<th>Course</th>
    								<th>Email</th>
    								<th>Phone No</th>
    								<th>Edit</th>
    								<th>Delete</th>
    							</tr>
    						</thead>		
    						<tbody>
    							<?php

    								$student = new StudentController;
    								$result = $student->index(); // or it's for the get data

    								if ($result){

    									foreach($result as $row){
    										?>


    										<tr>
			    								<td><?= $row["id"]; ?></td>
			    								<td><?= $row["fullname"]; ?></td>
			    								<td><?= $row["course"]; ?></td>
			    								<td><?= $row["email"]; ?></td>
			    								<td><?= $row["phone"]; ?></td>
			    								<td>
			    									<a href="edit_student.php?id=<?= $row["id"]; ?>" class="btn btn-success">Edit</a>
			    								</td>
			    								<td>
			    									<!-- <a href="" class="btn btn-danger">Delete</a> -->
			    									<form action="code/student_code.php" method="POST">
			    										<button type="submit" name="delete_student" value="<?= $row["id"]; ?>" class="btn btn-danger">Delete</button>
			    									</form>
			    								</td>
			    							</tr>


    										<?php
    									}
    								} else {
    									echo "No Record Found";
    								}
    							?>
    							
    						</tbody>
    					</table>
    				</div>	
    				
    			</div>
    		</div>
    	</div>
    </div>			
    

    </div>


<?php

include("includes/footer.php"); // this is to call the footer file

include("includes/scripts.php"); // this is to call the scripts file


?>