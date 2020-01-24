<?php include 'include/header.php'; 
	
	updateuser();

?>
<div class="container"> 

	<div class="col-sm-6">
		
<form action="update.php" method="post">
			<h1 class="text-center">Update User Details</h1>
			<div class="form-group">
				<label for="id">ID</label>
				<select name="id" id="">
					<?php
						showalldata();
					?>	
				</select>
			</div>
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="name" value="" class="form-control">
			</div>
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" name="username"
				 class="form-control" pattern="[a-z]{4,8}" title="4 to 8 lowercase letters">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" value="" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
			</div>
			<div class="form-group">
				<label for="phoneumber">Phone Number</label>
				<input type="tel" name="phone" value="" class="form-control" pattern="[0-9]{10}"  title="Ten digits code">
			</div>
			<input class="btn btn-success" type="Submit" name="submit" value="Update">
		</form>


	</div>

</div>
<?php include 'include/footer.php'; ?>