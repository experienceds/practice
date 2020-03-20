<?php

include_once("config.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$name=$_POST['name'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$paper = $_POST['paper'];
	$kickadd = $_POST['kickadd'];
	$prop = $_POST['prop'];
	$num = $_POST['num'];
		$spravka = $_POST['spravka'];
		
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE users SET name='$name',email='$email',mobile='$mobile', mobile='$mobile', kickadd='$kickadd', prop='$prop', num='$num', spravka='$spravka' WHERE id=$id");
	

	header("Location: index.php");
}
?>
<?php

$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
	$name = $user_data['name'];
	$email = $user_data['email'];
	$mobile = $user_data['mobile'];
	$paper = $_POST['paper'];
	$kickadd = $_POST['kickadd'];
	$prop = $_POST['prop'];
	$num = $_POST['num'];
	$spravka = $_POST['spravka'];
		
}
?>
<html>
<head>	
	<title>Edit User Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" value=<?php echo $name;?>></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value=<?php echo $email;?>></td>
			</tr>
			<tr> 
				<td>Mobile</td>
				<td><input type="text" name="mobile" value=<?php echo $mobile;?>></td>
			</tr>
			<tr>
				<tr> 
				<td>Paper</td>
				<td><input type="text" name="paper" value=<?php echo $paper;?>></td>
			</tr>
			<tr>
				<tr> 
				<td>Paper</td>
				<td><input type="text" name="kickadd" value=<?php echo $kickadd;?>></td>
			</tr>
			<tr>
					<tr>
				<tr> 
				<td>Paper</td>
				<td><input type="text" name="prop" value=<?php echo $prop;?>></td>
			</tr>
			<tr>
						<tr> 
				<td>Paper</td>
				<td><input type="text" name="spravka" value=<?php echo $spravka;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>

