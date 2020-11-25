<?php
include_once 'functions.php';

$func = new Functions; 
$table_name = "vehicles"; 
$imageFieldName = "image";
$all_user = $func -> select($table_name); 
$get_id = isset($_GET['ID'])?$_GET['ID']:""; 

if (isset($_GET['action']) && $_GET['action']=="DEL" )
{
	//if(file_exists("upload/".$all_user['image']) && !empty($all_user['image']))
	// var_dump($func -> select_image($get_id, $table_name));die;
	$deleteImage = $func -> select_image($get_id, $table_name,$imageFieldName);
	// $image_path = 'upload/'.$deleteImage['image'];
	if($deleteImage == true){

		$msg = $func -> delete($get_id, $table_name);
		header("Location: home.php");
	}else{
		$msg = $func -> delete($get_id, $table_name);
		header("Location: home.php");
	}



}

if (isset($_GET['action']) && $_GET['action']=="EDIT" )
{

	$data_edit = $func -> edit($get_id, $table_name);
}






if (isset($_POST['submit'])){

	if ($_POST['id']==NULL) {

		if(!empty($_FILES['file']['name'])){
			$file=$_FILES['file'];
			$fileName= $_FILES['file']['name'];
			$fileTmpName= $_FILES['file']['tmp_name'];
			$fileSize= $_FILES['file']['size'];
			$fileError= $_FILES['file']['error'];
			$fileType= $_FILES['file']['type'];


			$fileExt= explode('.', $fileName);
			$fileActualExt= strtolower(end($fileExt));

			$allowed = array('jpg','jpeg','png','pdf');

			if (in_array($fileActualExt,$allowed)) {

				if ($fileError === 0) {

					if ($fileSize <1000000) {
						$fileNameNew=rand().'_'.time().'.'.$fileActualExt;
						$fileDestinstion= 'upload/'.$fileNameNew;
						if (move_uploaded_file($fileTmpName,$fileDestinstion)) {
							echo 'Your Files are Uploaded Successfully!';
    			        //header("Location: uploadfile.php?uploadsuccess");
						}



					}else {
						echo 'Your file is too big!';
					}

				}else {
					echo 'There was an error uploading your files!';
				}

			}else {
				echo 'You cannot upload files of this type!';
			}

		}
		

		if (!empty($_POST['name'])){
			$name =	$_POST['name'];
		}else{
			$name_error	= "Name is required";
		}

		if (!empty($_POST['engine'])){
			$engine = $_POST['engine'];
		}else{
			$engine_error = "Engine is required";
		}

		if (!empty($_POST['cylinder'])){
			$cylinder =	$_POST['cylinder'];
		}else{
			$cylinder_error	= "Cylinder is required";
		}
		if (!empty($_POST['displacement'])){
			$displacement = $_POST['displacement'];
		}else{
			$displacement_error = "Displacement is required";
		}
		if (!empty($_POST['transmission'])){
			$transmission = $_POST['transmission'];
		}else{
			$transmission_error = "Transmission is required";
		}
		if (!empty($_POST['power'])){
			$power = $_POST['power'];
		}else{
			$power_error = "Power is required";
		}
		if (!empty($_POST['torque'])){
			$torque = $_POST['torque'];
		}else{
			$torque_error = "Torque is required";
		}
		if (!empty($_POST['fuel_capacity'])){
			$fuel_capacity = $_POST['fuel_capacity'];
		}else{
			$fuel_capacity_error = "Fuel Capacity is required";
		}
		if (!empty($_POST['braking_system'])){
			$braking_system = $_POST['braking_system'];
		}else{
			$braking_system_error = "Breaking System is required";
		}

		


		if (!empty($_POST['name']) && !empty($_POST['engine']) && !empty($_POST['displacement']))
		{
			$query="INSERT INTO vehicles(name,image,engine,cylinder,displacement,transmission,power,torque,fuel_capacity,braking_system) VALUES ('$name' ,'$fileNameNew','$engine','$cylinder', '$displacement', '$transmission','$power','$torque','$fuel_capacity','$braking_system' )";

			$msg = $func -> insert($query);
			header("Location: home.php");

		}
		

	}else{

		if(!empty($_FILES['file']['name'])){
			$file=$_FILES['file'];
			$fileName= $_FILES['file']['name'];
			$fileTmpName= $_FILES['file']['tmp_name'];
			$fileSize= $_FILES['file']['size'];
			$fileError= $_FILES['file']['error'];
			$fileType= $_FILES['file']['type'];


			$fileExt= explode('.', $fileName);
			$fileActualExt= strtolower(end($fileExt));

			$allowed = array('jpg','jpeg','png','pdf');

			
				
			
			if (in_array($fileActualExt,$allowed)) {

				if ($fileError === 0) {

					if ($fileSize <1000000) {
						$fileNameNew=rand().'_'.time().'.'.$fileActualExt;
						$fileDestinstion= 'upload/'.$fileNameNew;
						if (move_uploaded_file($fileTmpName,$fileDestinstion)) {
							echo 'Your Files are Uploaded Successfully!';
    			        //header("Location: uploadfile.php?uploadsuccess");
						}



					}else {
						echo 'Your file is too big!';
					}

				}else {
					echo 'There was an error uploading your files!';
				}

			}else {
				echo 'You cannot upload files of this type!';
			}

		}else{
			$fileNameNew = $_POST['old-image'];
		 }
		}


		$id=$_POST['id'];
		if (!empty($_POST['name'])){
			$name =	$_POST['name'];
		}else{
			$name_error	= "Name is required";
		}

		if (!empty($_POST['engine'])){
			$engine = $_POST['engine'];
		}else{
			$engine_error = "Engine is required";
		}

		if (!empty($_POST['cylinder'])){
			$cylinder =	$_POST['cylinder'];
		}else{
			$cylinder_error	= "Cylinder is required";
		}
		if (!empty($_POST['displacement'])){
			$displacement = $_POST['displacement'];
		}else{
			$displacement_error = "Displacement is required";
		}
		if (!empty($_POST['transmission'])){
			$transmission = $_POST['transmission'];
		}else{
			$transmission_error = "Transmission is required";
		}
		if (!empty($_POST['power'])){
			$power = $_POST['power'];
		}else{
			$power_error = "Power is required";
		}
		if (!empty($_POST['torque'])){
			$torque = $_POST['torque'];
		}else{
			$torque_error = "Torque is required";
		}
		if (!empty($_POST['fuel_capacity'])){
			$fuel_capacity = $_POST['fuel_capacity'];
		}else{
			$fuel_capacity_error = "Fuel Capacity is required";
		}
		if (!empty($_POST['braking_system'])){
			$braking_system = $_POST['braking_system'];
		}else{
			$braking_system_error = "Breaking System is required";
		}

		if (!empty($_POST['name']) && !empty($_POST['engine']) && !empty($_POST['cylinder']) && !empty($_POST['displacement']))
		{
			$query="UPDATE $table_name SET name='$name', image='$fileNameNew', engine='$engine' , cylinder='$cylinder', displacement='$displacement', transmission = '$transmission', power='$power', torque='$torque', fuel_capacity='$fuel_capacity', braking_system='$braking_system' WHERE id='$id'";
			//var_dump($query);die;
			$msg = $func -> update($query);
			header("Location: home.php");

			//var_dump($msg);die;
			//var_dump($_POST);die;
			



		


	}
}

?>