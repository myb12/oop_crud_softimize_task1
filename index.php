<?php
include_once 'crud.php';
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
				<form method="post" enctype="multipart/form-data" action="index.php"  > 

					<input type="hidden" name="id" value="<?php echo isset($data_edit['id'])?$data_edit['id']:""; ?>" >

					<span style="color: green;"><?php echo isset($msg)? $msg : "";?></span><br>
					<label for="name">Name:</label>
					<input class="form-control" type="text" name="name" value="<?php echo isset($data_edit['name'])?$data_edit['name']:""; ?>">

					<label for="engine">Engine:</label>
					<select name="engine" id="engine" class="form-control" >
						<option value="petrol" <?php  if(isset($data_edit['engine'])=='petrol') echo "selected"; ?>>Petrol</option>
						<option value="diesel" <?php  if(isset($data_edit['engine'])=='diesel') echo "selected"; ?>>Diesel</option>
						<option value="electric" <?php  if(isset($data_edit['engine'])=='electric') echo "selected"; ?>>Electric</option>
					</select>

					<label for="cyinder">Cylinder:</label>
					<select name="cylinder" id="cylinder" class="form-control" >
						<option value="4-cylinder" <?php  if(isset($data_edit['cylinder'])=='4-cylinder') echo "selected"; ?>>4-Cylinder</option>
						<option value="3-cylinder" <?php  if(isset($data_edit['cylinder'])=='3-cylinder') echo "selected"; ?>>3-Cylinder</option>
					</select>

					<span style="color: green;"><?php echo isset($msg)? $msg : "";?></span><br>
					<label for="displacement">Displacement:</label>
					<input class="form-control" type="text" name="displacement" value="<?php echo isset($data_edit['displacement'])?$data_edit['displacement']:""; ?>">

					<label for="transmission">Transmission:</label>
					<select name="transmission" id="transmission" class="form-control" >
						<option value="5-speed" <?php  if(isset($data_edit['transmission'])=='5-speed') echo "selected"; ?>>5-Speed</option>
						<option value="6-speed" <?php  if(isset($data_edit['transmission'])=='6-speed') echo "selected"; ?>>6-Speed</option>
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
						<option value="ABS" <?php  if(isset($data_edit['braking_system'])=='ABS') echo "selected"; ?>>ABS</option>
						<option value="EBD" <?php  if(isset($data_edit['braking_system'])=='EBD') echo "selected"; ?>>EBD</option>
					</select>


					<div>
						<form action="" method="POST" enctype="multipart/form-data">
							<label for="">Upload Your Photo</label>
							<p><input type="file" name="file" value="<?php echo isset($upload_error)? $upload_error : "";?>"></p>
						</form>	

						<button class="button" type="submit" name="submit">Submit</button>
					</div>

				</form>
			</div>
		</div>
	</div>

	<div class="container">
		<table>
			<thead>
				<th>Name</th>
				<th>Image</th>
				<th>Engine</th>
				<th>Cylinder</th>
				<th>Displacement</th>
				<th>Transmission</th>
				<th>Power</th>
				<th>Torque</th>
				<th>Fuel Capacity</th>
				<th>Braking System</th>
				<th>Action</th>
			</thead>
			<tbody>
				<?php 
				if($all_user){

					foreach ($all_user as $single_user) {
						?>
						<tr>
							<td><?php echo isset($single_user['name'])?$single_user['name']:""; ?></td>
							<td><img height="100px" width="100px" src="upload/<?php echo isset($single_user['image'])?$single_user['image']:""; ?>" alt=""> </td>
							<td><?php echo isset($single_user['engine'])?$single_user['engine']:""; ?></td>
							<td><?php echo isset($single_user['cylinder'])?$single_user['cylinder']:""; ?></td>
							<td><?php echo isset($single_user['displacement'])?$single_user['displacement']:""; ?></td>
							<td><?php echo isset($single_user['transmission'])?$single_user['transmission']:""; ?></td>
							<td><?php echo isset($single_user['power'])?$single_user['power']:""; ?></td>
							<td><?php echo isset($single_user['torque'])?$single_user['torque']:""; ?></td>
							<td><?php echo isset($single_user['fuel_capacity'])?$single_user['fuel_capacity']:""; ?></td>
							<td><?php echo isset($single_user['braking_system'])?$single_user['braking_system']:""; ?></td>
							<td class="text-right"> 

								<a class="fa fa-fw fa-edit" href="edit.php?action=EDIT&ID=<?php echo $single_user['id'];?>" onclick="return confirm('Are you sure you want to Edit?');">
								</a>

								<a class="fa fa-fw fa-trash" href="index.php?action=DEL&ID=<?php echo $single_user['id'];?>" onclick="return confirm('Are you sure you want to Remove?');">
								</a>

							</td>
						</tr>
						<?php
					}
				} ?>
			</tbody>
		</table>
	</div>

</body>
</html>