<!DOCTYPE html>

<?php
include("func.php");
// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "gdb";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query
$query = "SELECT * FROM `user_details`";

// for method 1

$result1 = mysqli_query($connect, $query);



?>
<html>
  <head>
    <title>Add new trainer asign</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  </head>
  

   
         <body style="background:url('images/3.jpg'); background-size: cover;
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
  width: 300px;
  border: 15px solid black;
	}
	
	div.ex2 {
  background-color: #C0C0C0;
  padding-top: 10px;
  padding-right: 10px;
  padding-bottom: 10px;
  padding-left: 10px;
  width: 900px;
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
				<a href="trainer_assign.php" class="active">Back</a>
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




	<hr>
  
		    <div class="ex1">
			
			<div style="background-color:#3498DB;color:3498DB;">
			
                <h3>Register new Trainer Assigning
				</h3>
            </div> 
                
				<b><div style="margin-top:10px;margin-bottom:80px;color:#000000;">
                <form class="form-group" action="add_trainer_assign.php" method="post">
                <label>user ID</label><br>
				<input type="text" name="uid" class="form-control"><br><br>
				<label>Trainer_ID</label><br>
				<input type="text" name="tid" class="form-control"><br><br>
				<input type="submit" class="btn btn-primary" name="pat_submit" value="Register" >      <a href="func.php" class="btn btn-light"></a>
				</b>
                </form>
				</div>
				</div>
              
			<center>   
		    <div class="ex2">
			
			<div style="background-color:#3498DB;color:000000;">
             <h3>Trainer Assign Details</h3></div>
           
         
				
				 <b>
				 <div style="background-color:#3498DB;color:3498DB;">
	 
    <table class="w3-table-all w3-large">
        <thead>
     <tr>
         <th>Assignment No</th>
         <th>Trainer ID</th>
		 <th>Trainer Name</th>
		  <th>Member ID</th>
		 <th>Member Name</th>
        </tr>   
        </thead>
        <tbody>
          <?php get_trainer_assign(); ?>
        </tbody>
    </table>
	</b>
	</center>
	</div>
	</div>
		 
 
      
	  </body>
	  </html>