<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
	<title>Trainer details</title>
	 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body style="background:url('images/2.jpg'); background-size: cover;
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
	border: 15px solid black;}
	
	div.ex2 {
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


 
         <div class="row">
		 <div class="topnav">
             
   <a href="admin-panel.php" class="active" >Go Back</a>
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

   <b>
				<div class="ex1">
                 <div style="background-color:#3498DB;color:#ffffff;">
				 <h3>Register new Trainer</h3>
                </div> 
				
                <form class="form-group" action="add_new_trainer.php" method="post">
				<div style="background-color:#3498DB;color:FFFFFF;">
                <label>Trainer ID</label><br>
				<input type="text" name="id" class="form-control"><br><br>
                <label>Full Name:</label><br>
				<input type="text" name="name" class="form-control"><br><br>
				<label>Phone_no</label><br>
				<input type="text" name="phone" class="form-control"><br><br>
				<label>Date of Birth</label><br>
				<input type="date" name="dob" class="form-control"><br><br>
				<label>Email ID</label><br>
                <input type="text" name="email" class="form-control"><br><br>
				<label>Address</label><br>
                <input type="text" name="address" class="form-control"><br><br>
				<input type="submit" class="btn btn-primary" name="tra_submit" value="Register">
				</div>
</b>
</div>
</div>


<center>
   <b>
				<div class="ex2">
                 <div style="background-color:#3498DB;color:#ffffff;">
				 
				 <h3> Trainer Information</h3></div>
          <div style="background-color:#3498DB;color:#000000;">
    <table class="w3-table-all w3-large">
        <thead>
     <tr>
            <th>Trainer ID</th>
            <th>Name</th>
         <th>Date of Birth</th>
         <th>Phone no</th>
		 <th>Email ID</th>
		 <th>Address</th>
        </tr>   
        </thead>
        <tbody>
          <?php get_trainer(); ?>
        </tbody>
    </table>
	</div>
	</div>
	</b>
	</center>


</body>