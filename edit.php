<?php
include_once 'crud.php';
include_once 'utilities.php';
session_start();
if(!is_logged_in())
{
	header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Example</title>
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
	<link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
	<link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
	<style>
		body {
			margin-top: 30px;
		}
	</style>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script>
		function previewFile(input){
			var file = $("input[type=file]").get(0).files[0];

			if(file){
				var reader = new FileReader();

				reader.onload = function(){
					$("#previewImg").attr("src", reader.result);
				}

				reader.readAsDataURL(file);
			}
		}
	</script>

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="column column-60 column-offset-20">
				<h2>Task 1 - CRUD</h2>
				<p>A sample project to perform CRUD operations using PHP OOP</p>
			</div>
		</div>

		<div class="row">
			<div class="column column-60 column-offset-20">
				<form method="post" enctype="multipart/form-data" action="home.php"  > 

					<input type="hidden" name="id" value="<?php echo isset($data_edit['id'])?$data_edit['id']:""; ?>" >

					<span style="color: green;"><?php echo isset($msg)? $msg : "";?></span><br>
					<label for="name">Name:</label>
					<input class="form-control" type="text" name="name" value="<?php echo isset($data_edit['name'])?$data_edit['name']:""; ?>">

					<label for="engine">Engine:</label>
					<select name="engine" id="engine" class="form-control" >
						<option value="petrol" <?php  if($data_edit['engine']=='petrol') echo "selected"; ?>>Petrol</option>
						<option value="diesel" <?php  if($data_edit['engine']=='diesel') echo "selected"; ?>>Diesel</option>
						<option value="electric" <?php  if($data_edit['engine']=='electric') echo "selected"; ?>>Electric</option>
					</select>

					<label for="cyinder">Cylinder:</label>
					<select name="cylinder" id="cylinder" class="form-control" >
						<option value="4-cylinder" <?php  if($data_edit['cylinder']=='4-cylinder') echo "selected"; ?>>4-Cylinder</option>
						<option value="3-cylinder" <?php  if($data_edit['cylinder']=='3-cylinder') echo "selected"; ?>>3-Cylinder</option>
					</select>

					<span style="color: green;"><?php echo isset($msg)? $msg : "";?></span><br>
					<label for="displacement">Displacement:</label>
					<input class="form-control" type="text" name="displacement" value="<?php echo isset($data_edit['displacement'])?$data_edit['displacement']:""; ?>">

					<label for="transmission">Transmission:</label>
					<select name="transmission" id="transmission" class="form-control" >
						<option value="5-speed" <?php  if($data_edit['transmission']=='5-speed') echo "selected"; ?>>5-Speed</option>
						<option value="6-speed" <?php  if($data_edit['transmission']=='6-speed') echo "selected"; ?>>6-Speed</option>
					</select>

					<span style="color: green;"><?php echo isset($msg)? $msg : "";?></span><br>
					<label for="power">Power:</label>
					<input class="form-control" type="text" name="power" value="<?php echo isset($data_edit['power'])?$data_edit['power']:""; ?>">

					<span style="color: green;"><?php echo isset($msg)? $msg : "";?></span><br>
					<label for="torque">Torque:</label>
					<input class="form-control" type="text" name="torque" value="<?php echo isset($data_edit['torque'])?$data_edit['torque']:""; ?>">

					<span style="color: green;"><?php echo isset($msg)? $msg : "";?></span><br>
					<label for="fuel_capacity">Fuel Capacity:</label>
					<input class="form-control" type="text" name="fuel_capacity" value="<?php echo isset($data_edit['fuel_capacity'])?$data_edit['fuel_capacity']:""; ?>">

					<label for="braking_system">Braking System:</label>
					<select name="braking_system" id="braking_system" class="form-control" >
						<option value="ABS" <?php  if($data_edit['braking_system']=='ABS') echo "selected"; ?>>ABS</option>
						<option value="EBD" <?php  if($data_edit['braking_system']=='EBD') echo "selected"; ?>>EBD</option>
					</select>
					<div>
						<form action="" method="POST" enctype="multipart/form-data">
							<label for="">Upload Your Photo</label>
							<p><input type="file" name="file" value="<?php echo isset($upload_error)? $upload_error : "";?>" onchange="previewFile(this);"></p>
						</p>
						<img id="previewImg" src="">
						<p>
							<input type="hidden" name="old-image" value="<?php echo isset($data_edit['image'])?$data_edit['image']:""; ?>">
						</form>
						<div > 
							<label for="">Old Image</label>
							<img src="upload/<?php echo isset($data_edit['image'])?$data_edit['image']:""; ?>" alt="" height="100px" width="100px" a>
						</div>
						<button class="button" type="submit" name="submit">Submit</button>
					</div>

				</form>
			</div>
		</div>
	</div>


</body>
</html>