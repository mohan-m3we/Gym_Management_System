<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
	<title>Members details</title>
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
  padding-top: 5px;
  padding-right: 10px;
  padding-bottom: 10px;
  padding-left: 10px;
  width: 500px;
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
    <a href="admin-panel.php" >Go Back</a>
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
            <br><br><br><br><br><br><br>
			 <div class="ex1">
			<div style="background-color:#3498DB;color:000000;">
            <h3>Package Details</h3></div>
        
     <div style="background-color:#3498DB;color:#000000;">
    <table class="w3-table-all w3-large">
        <thead>
     <tr>
            <th>Package ID </th>
			<th>||</th>
            <th>Package Name</th>
			<th>||</th>
			<th>Amounts</th>
         
        </tr>   
        </thead>
        <tbody>
          <?php get_package(); ?>
        </tbody>
    </table>
    
     </div>
    </div>
    </div>
    
    
<
    </div>
    </body>
</html>