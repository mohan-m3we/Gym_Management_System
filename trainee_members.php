<!DOCTYPE html>
<?php include("func.php");?>
<html>
  <head>
    
  
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body style="background-image: url('images/2.jpg');
background-repeat: no-repeat;background-color: #cccccc;
  height: 1100px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
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
  padding-top: 5px;
  padding-right: 10px;
  padding-bottom: 5px;
  padding-left: 10px;
  width: 800px;
  border: 15px solid black;



    table, th, td {
  border: 1px solid black;
}
td {
  text-align: center;
}

	</style>

         <div class="row">



			<center>

            <div class="topnav">
				<a class="active" href="admin-panel.php" >Back</a>
                <a href="add_new_memb.php" >ADD New Trainee</a>
                <a href="delete_memb.php" >Delete Trainee</a>
                <a href="update_memb.php" >Update Trainee Details</a>
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
				 <form class="form-group" action="trainee_search.php" method="post">
          

			<center>   
		    <div class="ex1">
			
			<div style="background-color:#3498DB;color:000000;">
             <h3>Members Details</h3></div>
           
         
				
				 <b>
				 <div style="background-color:#3498DB;color:3498DB;">
	 
    <table class="w3-table-all w3-large">
        <thead>
     <tr>
         <th>MemberID</th>
         <th>Name</th>
         <th>Phone no</th>
         <th>Date of Birth</th>
         <th>Email</th>
		 <th>address</th>
        </tr>   
        </thead>
        <tbody>
          <?php get_trainee_details(); ?>
        </tbody>
    </table>
	</b>
	</center>
	</div>
	
    </div>
		 
			
			</body>
			</html>