<?php





include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM jobs ORDER BY id DESC");
?>

<html>
<head>    
    <title>Homepage</title>
</head>

<body>
    
<a href="add.php">Add New User</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>UID</th> <th>Mobile</th> <th>Email</th> <th>Update</th> <th>Update</th> <th>Update</th> <th>Update</th> <th>Update</th> <th>Update</th>  
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['id']."</td>";
        echo "<td>".$user_data['mobile']."</td>";
        echo "<td>".$user_data['email']."</td>";    
        echo "<td>".$user_data['paper']."</td>"; 
         echo "<td>".$user_data['kickadd']."</td>";  
         echo "<td>".$user_data['prop']."</td>"; 
          echo "<td>".$user_data['num']."</td>"; 
           echo "<td>".$user_data['spravka']."</td>"; 
             echo "<td>".$user_data['atest']."</td>"; 
               echo "<td>".$user_data['akred']."</td>"; 
                 echo "<td>".$user_data['practice']."</td>"; 
                   echo "<td>".$user_data['vidp']."</td>"; 
                     echo "<td>".$user_data['doctor']."</td>"; 
                       echo "<td>".$user_data['dog']."</td>"; 
                         echo "<td>".$user_data['contract']."</td>"; 
                           echo "<td>".$user_data['angry']."</td>"; 
                              echo "<td>".$user_data['tab']."</td>"; 
                                 echo "<td>".$user_data['main']."</td>"; 


        echo "<br><td><a href='editj.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>
