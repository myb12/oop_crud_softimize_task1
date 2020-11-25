<?php 
include_once 'db_config.php';


class Functions{
	
	public $db_connect;

	function __construct(){
		$this->db_connect = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	}


	public function insert($query){
		$this->db_connect->query($query);
		$msg="Data Inserted Successfully";
		return $msg;
	}
	public function update($query){
		$this->db_connect->query($query);
		$msg="Data updated Successfully";
		return $msg;
	}

	public function select($table) {

		$query = "SELECT * FROM $table";

		$result = $this->db_connect->query($query);

		if ($result->num_rows) {
			while($row = $result -> fetch_array()) {
				$records[] = $row;
			}
			return $records;
		}

	}

	public function delete($id, $table){
		$query="DELETE FROM $table WHERE id='$id'";
		$this->db_connect -> query($query);
		$msg="Data Deleted Successfully";	
		return $msg;

	}

	function edit($id, $table){
		$query="SELECT * FROM $table WHERE id = '$id'";
		if($result=$this->db_connect -> query($query))
		{
			if($result -> num_rows)
			{
				$data_edit = $result -> fetch_array();
			}
		}
		return $data_edit;
	}

	public function select_image($id,$table,$fieldName) {

		$query = "SELECT $fieldName FROM $table WHERE id = '$id'";

		// $getImage = $this->db_connect->query($query);

		if($result=$this->db_connect -> query($query))
		{
			if($result -> num_rows)
			{
				$data_edit = $result -> fetch_array();
			}
		}
		return unlink('upload/'.$data_edit[$fieldName]);
	}


}

?>