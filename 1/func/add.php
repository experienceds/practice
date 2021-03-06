<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>
<html>
<head>
	<title>Add Users</title>
	    <link rel="stylesheet" href="../css/add_user.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/animate.min.css">
	<style type="text/css">
		.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  user-select: none;
}

.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
}

.container:hover input ~ .checkmark {
  background-color: #ccc;
}

.container input:checked ~ .checkmark {
  background-color: #2196F3;
}

.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

.container input:checked ~ .checkmark:after {
  display: block;
}

.container .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
	</style>
</head>

<body>
	    <div class="content_add">
        <div class="left_panel">
        	 <div class="info_db">
                <div class="title">
                	<div class="persona">
                <h1></h1>;expi
                <p><i class="fas fa-circle"></i></p>
            </div>
                    <h1>Информация</h1>
                </div>
                <p>Пользователей в базе: <?=$users?></p>
            </div>
            <hr>
	<a href="index.php">Go to Home</a>
	<div class="action_user">
                <a class="active" href="user_list.php">
                    <i class="fal fa-users"></i>
                    &nbsp;&nbsp;
                    База пользователей
                </a>
                <a href="add_user.php" class="btn-add">
                    <i class="fal fa-user-plus"></i>
                    &nbsp;&nbsp;
                    Добавить пользователя
                </a>
                <a href="ban_list.php">
                    <i class="fal fa-users-class"></i>
                    &nbsp;&nbsp;
                    Список банов
                </a>
                <a href="logout.php">
                    <i class="fal fa-sign-out-alt"></i>
                    &nbsp;&nbsp;
                    Выйти
                </a>
            </div>
            <div id="bug">
                <a class="bug" href="https://vk.com/qn1s_it" target="_blank">
                    Нашли баг?
                </a>
        
	<br/><br/>
</div></div>
 <div class="add_user_main_panel">
            <div class="header">
            	    
                <div class="title">
                </div>
            </div>
            <div class="add_users">
            	                    <h1>Добавить пользователя</h1>
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>ПІБ</td>
				<td><input type="text" name="name"></td>
			</tr>
			<br>
			<tr> 
				<td>Прописка</td>
				<td><select name="email" id="rank">
                        <option hidden disabled selected></option>
                        <option value="Так">Так</option>
                        <option value="Ні">Ні</option>
                    </select></td>
			</tr>
			<tr> 

				<td>Курс</td>
				<td><select name="kickadd" id="rank">
                        <option hidden disabled selected></option>
                        <option value="1-курс">1</option>
                        <option value="2-курс">2</option>
                         <option value="3-курс">3</option>
                        <option value="4-курс">4</option>
                    </select></td>
			</tr>
				<tr> 
				<td>№ паспорта</td>
				<td><input type="text" name="paper"></td>
			</tr>
			<tr> 
				<tr> 
				<td>Стать</td>
				<td>
<select name="kickadd" id="rank">
                        <option hidden disabled selected></option>
                        <option value="Чоловік">Чоловік</option>
                        <option value="Жінка">Жінка</option>

                    </select>
</td>
			</tr>
				<tr> 
				<tr> 
				<td>Прописка</td>
				<td><input type="text" name="prop"></td>
			</tr>
				<tr> 
				<tr> 
				<td>Справка з воєнкомату</td>
				<td><input type="text" name="num"></td>
			</tr>
				<tr> 
				<td>Прияняття і відрахування з коледжу.</td>
				<td><input type="text" name="spravka"></td>

			</tr>

				<td></td>
				<td><input class="add_btn" type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
    </div>
        </div>
	    <div id="alert" class="animated bounceInDown"></div>
    <div class="backwrap gradient">
        <div class="back-shapes">
            <img src="../icons/crosshairs.png" class="floating" style="top:66.59856996935649%;left:13.020833333333334%;animation-delay:-0.9s;" />
            <img src="../icons/laugh-beam.png" class="floating" style="top:31.46067415730337%;left:33.59375%;animation-delay:-4.8s;" />
            <img src="../icons/code.png" class="floating" style="top:76.50663942798774%;left:38.020833333333336%;animation-delay:-4s;" />
            <img src="../icons/wheelchair.png" class="floating" style="top:21.450459652706844%;left:14.0625%;animation-delay:-2.8s;" />
            <img src="../icons/wheelchair.png" class="floating" style="top:58.12053115423902%;left:56.770833333333336%;animation-delay:-2.15s;" />
            <img src="../icons/wheelchair.png" class="floating" style="top:8.682328907048008%;left:72.70833333333333%;animation-delay:-1.9s;" />
            <img src="../icons/code.png" class="floating" style="top:31.3585291113381%;left:58.541666666666664%;animation-delay:-0.65s;" />
            <img src="../icons/code.png" class="floating" style="top:69.96935648621042%;left:81.45833333333333%;animation-delay:-0.4s;" />
            <img src="../icons/crosshairs.png" class="floating" style="top:15.117466802860061%;left:32.34375%;animation-delay:-4.1s;" />
            <img src="../icons/crosshairs.png" class="floating" style="top:13.074565883554648%;left:45.989583333333336%;animation-delay:-3.65s;" />
            <img src="../icons/code.png" class="floating" style="top:55.87334014300306%;left:27.135416666666668%;animation-delay:-2.25s;" />
            <img src="../icons/code.png" class="floating" style="top:49.54034729315628%;left:53.75%;animation-delay:-2s;" />
            <img src="../icons/code.png" class="floating" style="top:34.62717058222676%;left:49.635416666666664%;animation-delay:-1.55s;" />
            <img src="../icons/code.png" class="floating" style="top:33.19713993871297%;left:86.14583333333333%;animation-delay:-0.95s;" />
            <img src="../icons/wheelchair.png" class="floating" style="top:28.19203268641471%;left:25.208333333333332%;animation-delay:-4.45s;" />
            <img src="../icons/crosshairs.png" class="floating" style="top:39.7344228804903%;left:10.833333333333334%;animation-delay:-3.35s;" />
            <img src="../icons/laugh-beam.png" class="floating" style="top:77.83452502553627%;left:24.427083333333332%;animation-delay:-2.3s;" />
            <img src="../icons/laugh-beam.png" class="floating" style="top:2.860061287027579%;left:47.864583333333336%;animation-delay:-1.75s;" />
            <img src="../icons/laugh-beam.png" class="floating" style="top:71.3993871297242%;left:66.45833333333333%;animation-delay:-1.25s;" />
            <img src="../icons/laugh-beam.png" class="floating" style="top:31.256384065372828%;left:76.92708333333333%;animation-delay:-0.65s;" />
            <img src="../icons/laugh-beam.png" class="floating" style="top:46.47599591419816%;left:38.90625%;animation-delay:-0.35s;" />
            <img src="../icons/code.png" class="floating" style="top:3.4729315628192032%;left:19.635416666666668%;animation-delay:-4.3s;" />
            <img src="../icons/code.png" class="floating" style="top:3.575076608784474%;left:6.25%;animation-delay:-4.05s;" />
            <img src="../icons/code.png" class="floating" style="top:77.3237997957099%;left:4.583333333333333%;animation-delay:-3.75s;" />
            <img src="../icons/code.png" class="floating" style="top:0.9193054136874361%;left:71.14583333333333%;animation-delay:-3.3s;" />
            <img src="../icons/wheelchair.png" class="floating" style="top:23.6976506639428%;left:63.28125%;animation-delay:-2.1s;" />
            <img src="../icons/wheelchair.png" class="floating" style="top:81.30745658835546%;left:45.15625%;animation-delay:-1.75s;" />
            <img src="../icons/wheelchair.png" class="floating" style="top:60.9805924412666%;left:42.239583333333336%;animation-delay:-1.45s;" />
            <img src="../icons/wheelchair.png" class="floating" style="top:29.009193054136876%;left:93.90625%;animation-delay:-1.05s;" />
            <img src="../icons/wheelchair.png" class="floating" style="top:52.093973442288046%;left:68.90625%;animation-delay:-0.7s;" />
            <img src="../icons/wheelchair.png" class="floating" style="top:81.51174668028601%;left:83.59375%;animation-delay:-0.35s;" />
            <img src="../icons/wheelchair.png" class="floating" style="top:11.542390194075587%;left:91.51041666666667%;animation-delay:-0.1s;" />
        </div>
    </div>
	<?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$paper = $_POST['paper'];
		$kickadd = $_POST['kickadd'];
		$prop = $_POST['prop'];
		$num = $_POST['num'];
		$spravka = $_POST['spravka'];
		
	
		include_once("config.php");
				
		$result = mysqli_query($mysqli, "INSERT INTO users(name,email,mobile,paper,kickadd,prop, num, spravka) VALUES('$name','$email','$mobile','$paper', '$kickadd', '$prop', '$num', '$spravka')");
		

		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
</html>
