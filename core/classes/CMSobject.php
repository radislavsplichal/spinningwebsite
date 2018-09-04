<?php
namespace CMSCore;
include_once 'DatabaseHandler.php';
class CMSObject implements DatabaseHandler{
	public $conn;
	public function establishConnection(){
		// configuration of the database
		include 'config.php';
		// Create connection
		$this->conn = new mysqli($servername, $username, $password,$dbname);

		// Check connection
		if ($this->conn->connect_error) {
			die("Connection failed: " . $this->$conn->connect_error);
			throw new Exception('SQL Connection Error'.$sql.$this->$conn->error);
		}
	}
	public function executeQuerry($sql){
		if ($this->conn->query($sql) === TRUE){
			$result = $this->conn->query($sql);
			echo "Success!";
			$response = ['OK'];
			return $responseArray = $arrayName = array('responseMessage' => $response,'responseContent' => $result);
		} else {
			// throw new Exception('SQL Querry Error'.$sql.$this->conn->error);
			$response = ['Connection Error',$this->conn->error];
			$result = $this->conn->query($sql);
			return $responseArray = $arrayName = array('responseMessage' => $response,'responseContent' => $result);
		}
	}
	public function createObject($type,$objectName,$arguments) {
		$this->establishConnection();
		// values need to be separated by "','" and concatanated by .
		$sql= "CREATE $type $objectName ($arguments);";
		echo $sql;
		$this->executeQuerry($sql);
	}
	public function saveObject ($type,$arguments,$values) {
		$this->establishConnection();
		// values need to be separated by "','" and concatanated by .
		$sql= "INSERT INTO $type ($arguments) VALUES ('$values');";
		$this->executeQuerry($sql);
	}
	public function deleteObject($id,$type){
		$this->establishConnection();
		$sql = "DELETE FROM $type WHERE id ='$id' ";
		$this->executeQuerry($sql);
	}
	public function editObject($id,$type,$arguments,$values){
		$this->establishConnection();
		for ($i=0;$i<count($arguments);$i++) {
			$sql = "UPDATE $type SET $arguments[$i] = '$values[$i]' WHERE id='$id'";
			$this->executeQuerry($sql);
		}
	}
	public function readObject($sql){
		$this->establishConnection();
		echo $sql;
		$response = $this->executeQuerry($sql);
		return $response;
	}

}
?>
