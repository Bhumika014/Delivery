<?php 

	
	
	
	
?>



<html>
<head>
<meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<title>Reset Password</title>
	
<style>
	body{background-color: #616A6B
	}
	.image{
		clear:both;
	}
	
	.container{
		align-content: center;
		float:right;
	}
	.frm{
    left:92%;
    margin-left: -25%;
    position: absolute;
    margin-top:10%;
	border: 2px solid #000;
	background-color: #E0E0E0;
	padding: 20px 20px 70px 20px;
	border-radius: 20px;
	font-size:20px;
	font-family: Arial, Helvetica, sans-serif;
	}
	
	
	.form-group input[type=text], select {
  width: 100%;
  padding:10px;
  display: inline-block;
  border: 1px solid #000;
  border-radius: 4px;
  box-sizing: border-box;
  margin-bottom: 10px;
	
}
	.form-group input[type=password], select {
  width: 100%;
  padding: 10px;
  display: inline-block;
  border: 1px solid #000;
  border-radius: 4px;
  box-sizing: border-box;
  margin-bottom: 10px;
	
}
	.form-group input[type=email], select {
  width: 100%;
  padding: 10px;
  display: inline-block;
  border: 1px solid #000;
  border-radius: 4px;
  box-sizing: border-box;
  margin-bottom: 10px;
	
}
 
	
	#btn{
		float:right;
		border-radius:5px;
		pading:5px;
		background-color: #616A6B;
		color: #FFFFFF;
		font-size:18px;
		border: 1px solid #000000;
	}

	.txt2{
		float:left;
		font-size: 12px;
		
	}
	
	@media screen and (max-width:1024px){
		.image{width:50%;}
		.container {width:50%;}
	}
	
	</style>
	</head>
	
	

<body>

	
	<div class="image">
	<img src="img/d2.jpg" alt="delivery" width="700" height="600">
	<div class="container">
		
	<form class="frm" method="post">
  <div class="form-group">
	  <h3>Reset Password</h3>
    <label for="text">Enter Email</label>
    <input type="email" class="form-control" name="email" placeholder="Enter your Register email" required >
  </div>
		<div class="form-group">
    <label for="text">New Password</label>
    <input type="password" class="form-control" name="newpassword" placeholder="enter new password" required >
  </div>
		<div class="form-group">
    <label for="text">Confirm Password</label>
    <input type="password" class="form-control" name="confirmpassword" placeholder="confirm password" required >
  </div>
 
		<div class="form-group">
			<input type="submit" id="btn" name="submit" value="Reset Password" ></input>
	
</div>
		
		
		
		</form>
		
	</div>
	
	</div>
	
	
	
</body>
</html>
