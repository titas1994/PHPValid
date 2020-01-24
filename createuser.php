<?php include 'include/header.php'; 

	createuser();

?>
<div class="container h-100">
	<div class="row h-100 justify-content-center align-items-center">
	<div class="col-10 col-md-8 col-lg-6">
			<form action="createuser.php" method="post">
				<h1>Create User</h1>
				<br>
	<div class="form-group">
		<!--<label for="name">Name</label>-->
			<input type="text" name="name" class="form-control" placeholder="Type your Name">
	</div>
	<div class="form-group">
		<input type="text" name="username" class="form-control" placeholder="Please type your UserName" pattern="[a-z]{4,8}" title="4 to 8 lowercase letters">
	</div>
	<div class="form-group">
		<input type="password" name="password" class="form-control" placeholder="Please type your Password" maxlength="10" minlength="3" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
	</div>
	<div class="form-group">
		<input type="tel" name="phone" class="form-control" placeholder="Please type your Phone Number" pattern="[0-9]{10}"  title="Ten digits code">
	</div>
	<input class="btn btn-success" type="Submit" name="submit" value="Create User">
</form>
</div>
</div>
</div>
<?php include 'include/footer.php'; ?>