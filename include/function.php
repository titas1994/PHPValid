<?php

include 'db.php';

function createuser(){

	global $connection;
	if(isset($_POST['submit'])){

		$name = $_POST['name'];
		$username =$_POST['username'];
		$password = $_POST['password'];
		$phone = $_POST['phone'];
		/****** Prevent SQL Injection in Username and Password Field ******/
	
		$username = mysqli_real_escape_string($connection,$username);
		$password = mysqli_real_escape_string($connection,$password);

		/****** ----------------- *******/

		/****** Password encription ******/

		$hashFormat ="$2y$10$";
		$salt = "iusesomecrazystrings22";
		$hashF_and_salt = $hashFormat . $salt;
		$password = crypt( $password, $hashF_and_salt);

		/****** ----------------- *******/
		/**** Check user name and Phone number is already register in Database *****/
		$check = "SELECT * FROM userdetails where username ='$_POST[username]' OR phone='$_POST[phone]'";
		$rs = mysqli_query($connection,$check);
		if($rs->num_rows) {
		    echo "Username or Phone Number Already in Exists<br/>";
		}
		/****** ----------------- *******/
		else{
		$query ="INSERT INTO userdetails(name,username,password,phone) VALUES('$name','$username','$password','$phone')";
		$result = mysqli_query($connection,$query);
		if(!$result){
			die('query failed'. mysqli_error());
		}
		else{
			echo "User data Sucessfull create";
		}
	}
}
}
function showusertable(){
	global $connection;
	$query = "SELECT * FROM userdetails";
	$result = mysqli_query($connection,$query);
	if(!$result){
		die("connection problem". mysqli_error());
	}
	if ($result->num_rows > 0) {
    				echo "<tr><th>ID</th><th>Name</th><th>UserName</th><th>PhoneNumber</th></tr>";
    							// output data of each row
    		while($row = $result->fetch_assoc()) {
        		echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td> ".$row["username"]."</td><td>".$row["phone"]."</td>";
    		}
    			echo "</tr>";
			} 
			else {
    			echo "0 results";
			}
}
?>