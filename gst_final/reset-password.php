
<?php

error_reporting(0);
include('config.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GST Billing - Forgot/Reset</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<script type="text/javascript">
function checkpass()
{
if(document.changepassword.newpassword.value!=document.changepassword.confirmpassword.value)
{
alert('New Password and Confirm Password field does not match');
document.changepassword.confirmpassword.focus();
return false;
}
return true;
} 

</script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
     <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; max-width: 500px;
  margin: auto; }
    </style>
</head>
<body>
    <div class="wrapper">
	<div class="row">
			<h2 align="center">GST Billing System</h2>
	<hr />
		
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Rest Password</div>
				<div class="panel-body">
					<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
					<form role="form" action="" method="post" name="changepassword" onsubmit="return checkpass()">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="newpassword" type="password" value="" required="true">
							</div>
							
							<div class="form-group">
								<input class="form-control" placeholder="Confirm Password" name="confirmpassword" type="password" value="" required="true">
							</div>
							<div class="checkbox">
								<button type="submit" value="" name="submit" class="btn btn-primary btn-block">Reset</button><span style="padding-left:250px"><a href="index.php" class="btn btn-primary btn-block">Login</a></span>

							</div>
						
							</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>	
	
<?php
if(isset($_POST['submit']))
  {
    $username=$_SESSION['username'];
    $password=md5($_POST['newpassword']);

        $query=mysqli_query($link,"update users set password='$password' where username='$username' ");
   if($query)
   {
echo "<script>alert('Password successfully changed');</script>";

   }
  
  }
  ?>


<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>
