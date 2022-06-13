
<?php

include("../../config/app.php");
include_once("../controllers/studentController.php");


// Add Student

if (isset($_POST["save_student"])){

	$inputData = [
		'fullname' => validateInput($db->conn, $_POST["fullname"]),
		'email' => validateInput($db->conn, $_POST["email"]),
		'course' => validateInput($db->conn, $_POST["course"]),
		'phone' => validateInput($db->conn, $_POST["phone"])
	];

	$student = new StudentController;
	$result = $student->create($inputData);

	if ($result){
		redirect("Student Added Successfully","admin/add_student.php");
	} else {
		redirect("Something went wrong","admin/add_student.php");
	}
}



// Update Student

if (isset($_POST["update_student"])){

	$id = validateInput($db->conn, $_POST["student_id"]);

	$inputData = [
		'fullname' => validateInput($db->conn, $_POST["fullname"]),
		'email' => validateInput($db->conn, $_POST["email"]),
		'course' => validateInput($db->conn, $_POST["course"]),
		'phone' => validateInput($db->conn, $_POST["phone"])
	];

	$student = new StudentController;
	$result = $student->update($inputData, $id);
	if ($result){
		redirect("Student Updated Successfully","admin/view_student.php");
	} else {
		redirect("Something went wrong","admin/view_student.php");
	}
}



// Delete Student

if (isset($_POST["delete_student"])){

	$id = validateInput($db->conn, $_POST["delete_student"]);
	$student = new StudentController;
	$result = $student->delete($id);
	if ($result){
		redirect("Student Deleted Successfully","admin/view_student.php");
	} else {
		redirect("Something went wrong","admin/view_student.php");
	}
}









?>

