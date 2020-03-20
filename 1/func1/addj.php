<html>
<head>
	<title>Add Users</title>
</head>

<body>
	<a href="job.php">Go to Home</a>
	<br/><br/>

	<form action="addj.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr> 
				<td>Mobile</td>
				<td><input type="text" name="mobile"></td>
			</tr>
			<tr> 
				<tr> 
				<td>Mobile</td>
				<td><input type="text" name="main"></td>
			</tr>
			<tr> 
				<tr> 
				<td>Mobile</td>
				<td>
 <select size="3" multiple name="tab">
 	<optgroup label="Виберіть:">
    <option value="Так">Так</option>
    <option value="Ні">Ні</option>
     </optgroup>
   </select>
</td>
			</tr>
				<tr> 
				<tr> 
				<td>prop</td>
				<td><input type="text" name="prop"></td>
			</tr>
				<tr> 
				<tr> 
				<td>prop</td>
				<td><input type="text" name="num"></td>
			</tr>
				<tr> 
				<td>prop</td>
				<td><input type="text" name="spravka"></td>

			</tr>

				<td></td>
				<td><input type="submit" name="Submitj" value="Add"></td>
			</tr>
		</table>

	</form>
	<?
	if(isset($_POST['Submitj'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$paper = $_POST['paper'];
		$kickadd = $_POST['kickadd'];
		$prop = $_POST['prop'];
		$num = $_POST['num'];
		$spravka = $_POST['spravka'];
			$atest = $_POST['atest'];
			$practice = $_POST['practice'];
				$vidp = $_POST['vidp'];
					$doctor = $_POST['doctor'];
						$dog = $_POST['dog'];
							$contract = $_POST['contract'];
								$angry = $_POST['angry'];
									$tab = $_POST['tab'];
										$main = $_POST['main'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO jobs(name,email,mobile,paper,kickadd,prop, num, spravka,atest,practice,vidp,doctor,dog,contract,angry,tab,main) VALUES('$name','$email','$mobile','$paper', '$kickadd', '$prop', '$num', '$spravka', '$atest', '$practice', '$vidp', '$doctor', '$dog', '$contract', '$angry', '$tab', '$main')");
		
		// Show message when user added
				echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
	
</body>
</html>
