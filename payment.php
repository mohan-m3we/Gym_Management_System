<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
	<title>Payment details</title>
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
  width: 400px;
	border: 15px solid black;}
	
		div.ex2 {
  background-color: #C0C0C0;
  padding-top: 10px;
  padding-right: 10px;
  padding-bottom: 10px;
  padding-left: 10px;
  width: 1100px;
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
	
	<div class="ex1">
    <div style="background-color:#3498DB;color:000000;">
                <h3>Make new Payment</h3>
                </div> 
	<div style="background-color:#3498DB;color:FFFFFF;">
                <form class="form-group" action="add_new_payment.php" method="post">

					<label>Trainee ID</label>
                    <input type="text" name="uid" class="form-control"><br><br>
                    <label>Amount</label>
                    <input type="text" name="amount" class="form-control"><br><br>
					<label>Payment Type</label>
                    <input type="text" name="ptype" class="form-control"><br><br>
                    <label>Payment Date</label>
                    <input type="date" name="pdate" class="form-control"><br><br><br>
					<center>
					<input type="submit" class="btn btn-primary" name="pay_submit" value="PAY">
					</center>
					</form>
     </div>
	 </div>
	 <center>
	 <b>
	 <div class="ex2">
			<div style="background-color:#3498DB;color:000000;">
             <h3>Payment Details</h3></div>
			 <div style="background-color:#3498DB;color:#000000;">
    <table class="w3-table-all w3-large">
        <thead>
     <tr>
            <th>Payment No</th>
			<th>Trainee ID</th>
            <th>Amount</th>
            <th>Payment Type</th>
			<th>Payment Date</th>
        </tr>   
        </thead>
        
        <tbody>
          <?php get_payment(); ?>
        </tbody>
    </table>
	</div>
    </div>
   </b>
   </center>
    			

    
    </body>
</html>