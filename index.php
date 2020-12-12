<?php 

	
	
	if(isset($_POST['submit']))
	{   
		$username = $_POST['username'];
	    $password = $_POST['password'];
	    if (!isset($_SESSION)) {
            session_start();
        }
        require_once 'config.php';
	    $query = mysqli_query($conn,"select * FROM loginid where username='$username' && password='$password'");
	    $rows=mysqli_fetch_array($query);
        if (mysqli_num_rows($query) == 1) {

			$_SESSION['username'] = $rows['username'];
            header('location:detail.php');
        } else {
            $msg = "Username or Password is incorrect!";
            echo "<script type='text/javascript'>alert('$msg');</script>";
        }
    }

	
?>



<html>
<head>
 <meta charset="utf-8">
 
 <meta name="viewport" content="width=device-width,initial-scale=1">
    
<title>Home Delivery</title>
	
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
	
	
	
	
	</style>
	</head>
	
	

<body>

	
	<div class="image">
	<img src="img/d2.jpg" alt="delivery" width="700" height="600">
	<div class="container">
	<form class="frm" method="post">
  <div class="form-group">
    <label for="text">Username</label>
    <input type="text" class="form-control" name="username" placeholder="username" required >
  </div>
  <div class="form-group">
    <label for="text">Password</label>
    <input type="password" class="form-control" name="password" placeholder="password" required >
  </div>
		<div class="form-group">
			<input type="submit" id="btn" name="submit" value="Login" ></input>
	
</div>
		
		<div class="form-group">
  <a href="forgetpwd.php" class="txt2">
							Forget Password?
			
			</a>
</div>
		
		</form>
		
	</div>
	
	</div>
	
	
	
</body>
</html>
