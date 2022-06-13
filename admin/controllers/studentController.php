<?php


class StudentController {

	public function __construct(){
		$db = new DatabaseConnection;
		$this->conn = $db->conn;
	}

	public function create($inputData){

		$data = "'".implode("','", $inputData)."'";
		//echo $data;

		$studentQuery = "INSERT INTO students (fullname, email, course, phone) VALUES ($data)";
		$result = $this->conn->query($studentQuery);
		if ($result){
			return true;
		} else {
			return false;
		}
	}


	public function index(){

		$studentQuery = "SELECT * FROM students";
		$result = $this->conn->query($studentQuery);
		if ($result->num_rows > 0){
			return $result;
		} else {
			return false;
		}
	}


	public function edit($id){

		$student_id = validateInput($this->conn, $id);
		$studentQuery = "SELECT * FROM students WHERE id = '$student_id' LIMIT 1";
		$result = $this->conn->query($studentQuery) or die($this->conn->error);
		if ($result->num_rows == 1){
			$data = $result->fetch_assoc();
			return $data;
		} else {
			return false;
		}
	}


	public function update($inputData, $id){

		$student_id = validateInput($this->conn, $id);
		$fullname = $inputData["fullname"];
		$email = $inputData["email"];
		$course = $inputData["course"];
		$phone = $inputData["phone"];

		$studentQuery = "UPDATE students SET fullname = '$fullname', email = '$email', course = '$course', phone = '$phone' WHERE id = '$student_id' LIMIT 1";
		$result = $this->conn->query($studentQuery);
		if ($result){
			return true;
		} else {
			return false;
		}
	}


	public function delete($id){

		$student_id = validateInput($this->conn, $id);
		$student_delete_query = "DELETE FROM students WHERE id = '$student_id' LIMIT 1";
		$result = $this->conn->query($student_delete_query);
		if ($result){
			return true;
		} else {
			return false;
		}
	}


}









?>