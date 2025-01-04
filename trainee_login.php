<!DOCTYPE html>
<html lang="en">
  <head>
  </head>
  <style type="text/css">
    #inputbtn:hover{cursor:pointer;}
	

	
	div.ex1 {
  background-color: #FFFFFF;
  padding-top: 10px;
  padding-right: 10px;
  padding-bottom: 10px;
  padding-left: 10px;
  width: 300px;
  border: 15px solid silver;
}
  </style>
  <body style="background:url('images/4.jpg'); background-size: cover;
  background-repeat: no-repeat;background-color: #cccccc;
  height: 1100px;
  background-position: center;
  background-repeat: no-repeat;
  position: relative;">
  <div class="topnav">
  	<a href="main_index.php" class="active">Back</a>
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

    <div class="ex1" style="margin-top:130px;margin-bottom:80px;color:#34495E;">
		<img src="images/3.jpg" alt="Trulli" width="300" height="210">
             <center>
              <h1>Trainee Login</h1>
              <form class="form-group" method="POST" action="trainee_verify.php">
                <div class="row">
                  <div class="col-md-4"><label>Trainee ID: </label></div>
                  <div class="col-md-8"><input type="text" name="trainee_id" class="form-control" placeholder="enter username" required/></div><br>
                </div>
                <center><input type="submit" id="inputbtn" name="login_submit" value="Login"></center><br><br>
			
              </form>
            
            </center>
         
    </div>  
</html>