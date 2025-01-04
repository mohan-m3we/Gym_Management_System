<html>
<head>
	<title>Trainee details</title>
	 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body style="background:url('images/1.jpg'); background-size: cover;
background-repeat: no-repeat;background-color: #cccccc;
  height: 1100px;
  background-position: center;
  background-repeat: no-repeat;
  position: relative;">
 		<style>
body {font-family: Arial, Helvetica, sans-serif;background-repeat: no repeat;
  background-size: 100%;
}
form {border : 0px solid #f1f1f1;}
h2{font-size: 50px;
text-align:right; }



	div.ex1 {
  background-color: #C0C0C0;
  padding-top: 10px;
  padding-right: 10px;
  padding-bottom: 10px;
  padding-left: 10px;
  width: 800px;
  border: 15px solid black;
	}
	
	 
   table, th, td {
  border: 1px solid black;
}
td {
  text-align: center;
}
	</style>
		<div class="topnav">
	<a href="main_index.php" class="active">log out</a>
	</div>
	
	<style>
.topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
</style>


	<center>
	<b>	
		    <div class="ex1">
			<div style="background-color:#3498DB;color:000000;">
            <h3>My Details</h3></div>
				 
				 <div style="background-color:#3498DB;color:3498DB;">
				 <table class="w3-table-all w3-large">
 <?php
 session_start();
  include("func.php");
  
$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "gdb";

$con= mysqli_connect($hostname, $username, $password, $databaseName);



   $trainee_id= $_SESSION['trainee'];
     $query="select * from user_details where user_id='$trainee_id'";
    $result=mysqli_query($con,$query);
    echo " 
	
		
        <thead>
		<tr>
		<th>Memeber ID</th>
        <th>Name</th>
        <th>Date of Birth</th>
        <th>Phone No</th>
        <th>Email ID</th>
		<th>Address</th>
        </tr>   
        </thead>
        <tbody>
       
		";
    while ($row=mysqli_fetch_array($result)){
				$user_id=$row['user_id'];
				$user_name=$row['user_name'];
				$user_phone_no=$row['user_phone_no'];
				$user_dob=$row['user_dob'];	
				$user_email=$row['user_email'];
				$user_address=$row['user_address'];
      echo "<tr>
          <td>$user_id</td>
        <td>$user_name</td>
            <td>$user_phone_no</td>
            <td>$user_dob</td>
			<td>$user_email</td>
			<td>$user_address</td>
        </tr>";
    }

        echo "</tbody></table>";

    ?>
	</b>
	 </center>
	 </div>
		</div>
		
		
		<center>
	<b>
		<div class="ex1">
			<div style="background-color:#3498DB;color:000000;">
            <h3>My package details</h3></div>
			
			<div style="background-color:#3498DB;color:3498DB;">
					<table class="w3-table-all w3-large">
			<?php
			 $trainee_id= $_SESSION['trainee'];
			 $query="select * from user_package where user_id='$trainee_id'";      //My package details must be created
    $result=mysqli_query($con,$query);
    echo " 

        <thead>
		<tr>
		<th>Numbers</th>
        <th>PackagID</th>
        <th>User_ID</th>
        </tr>   
        </thead>
        <tbody>
       
		";
    while ($row=mysqli_fetch_array($result)){
          $numbers=$row ['Numbers'];
    $package_id=$row['Package_id'];
    $user_id=$row['user_id'];
        echo " <tr>
        <td>$numbers</td>
        <td>$package_id</td>
		<td>$user_id</td>
        </tr>";
        }
        echo "</tbody></table>";

    ?>
	</b>
	 </center>
	 </div>
		</div>
		
		                                    
		
		<center>
	<b>
		<div class="ex1">
			<div style="background-color:#3498DB;color:000000;">
            <h3>My Trainers</h3></div>
			
			<div style="background-color:#3498DB;color:3498DB;">
					<table class="w3-table-all w3-large">
			<?php
			 $query="select * from trainer_assign where user_id='$trainee_id'";      //My payment details must be created
    $result=mysqli_query($con,$query);
    echo "
        <thead>
		<tr>
		<th>AssignmentNo</th>
        <th>TrainerID</th>
        </tr>   
        </thead>
        <tbody>
		";
    while ($row=mysqli_fetch_array($result)){
			$assignment_no=$row ['assignment_no'];
			$trainer_id=$row['trainer_id'];
        echo " <tr>
        <td>$assignment_no</td>
        <td>$trainer_id</td>
        </tr>";
        }
        echo "</tbody></table>";

    ?>
	</b>
	 </center>
	 </div>
		</div>
   
    </body>
        </html> 