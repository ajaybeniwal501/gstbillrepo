<?php
include('config.php');
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}




?>




<?php

 
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Please enter the new password.";     
    } elseif(strlen(trim($_POST["new_password"])) < 6){
        $new_password_err = "Password must have atleast 6 characters.";
    } else{
        $new_password = trim($_POST["new_password"]);
    }
    
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm the password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
        
    if(empty($new_password_err) && empty($confirm_password_err)){
        $sql = "UPDATE users SET password = ? WHERE id = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);
            
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_id = $_SESSION["id"];
            
            if(mysqli_stmt_execute($stmt)){
               
                
                    echo '<script>alert("Password Changed Successfully. ")</script>'; 
             
                
               
                
               
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            mysqli_stmt_close($stmt);
        }
    }
    
    mysqli_close($link);
}
?>















<?php
$u_id=$_SESSION['id'];
$username=$_SESSION['username'];


	
?>
 


<html>
<head>
    
    
   <style>
   
          
        
/* Footer CSS */
       .footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #008B8B;
   color: white;
   text-align: center;
}
   
   
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  font-size: 14px;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 50px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 195px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}
    
    
    
    
   /*  Right Dropdown css */
    
    .dropdown1 {
  float: right;
  overflow: hidden;
}

.dropdown1 .dropbtn {
  font-size: 15px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 60px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown1:hover .dropbtn {
  background-color: red;
}

.dropdown1-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 158px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

    .dropdown1-content1 {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 202px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

    
    
.dropdown1-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown1-content a:hover {
  background-color: #ddd;
}

.dropdown1:hover .dropdown1-content {
  display: block;
}
   

    

        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; max-width: 500px;
  margin: auto; }
        
    
    
       
       
/* form css */
       <style>
input[type=password], select {
  width: 40%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 10px solid #ccc;
  border-radius: 40px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 50%;
  background-color:#0066cc;
  color: white;
  padding: 8px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}




}
</style>
    
</head>
<body>


<ul>
  <li><a href="welcome.php">Home</a></li>
  
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Invoice's Fields</a>
    <div class="dropdown-content">
    <a href="company_index.php">Company Name</a>
      <a href="item_index.php">Item's</a>
      <a href="customer_index.php">Customer's</a>
     
    </div>
  </li>
    <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Create Invoice</a>
    <div class="dropdown-content">
    <a href="create_invoice5.php">For 5 Items</a>
      <a href="create_invoice10.php">For 10 Items</a>
      <a href="create_invoice20.php">For 20 Items</a>
      <a href="create_invoice.php">For Unlimited Items</a>
    </div>
  </li>
    <li><a href="invoice_list.php">View Invoice</a></li>
    
    
     <div class="dropdown1">
  <button class="dropbtn" onclick="myFunction()">Profile
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown1-content" id="myDropdown">
      <a href="profile.php">View Profile</a>
      <a href="change-password.php">Change Password</a>
    <a href="logout.php">Log Out</a>
  </div>
  </div> 
    
    
</ul>

<br>
  <br>
    <br>
    <br>
    

    <div class="wrapper">
<div>
        <h2>Reset Password</h2>
        <p>Please fill out this form to reset your password.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
            <div class="form-group <?php echo (!empty($new_password_err)) ? 'has-error' : ''; ?>">
                <label>New Password : &nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="password" name="new_password" class="form-control" value="<?php echo $new_password; ?>"><br><br>
                <span class="help-block"><?php echo $new_password_err; ?></span>
            </div><br>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password :</label>
                <input type="password" name="confirm_password" class="form-control"><br><br>
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div><br>
            <div class="form-group">
                <input type="submit" class="btn btn-info" value="Submit">
               
               
            </div>
        </form>
    </div>    
</div>
  <div class="footer">
  <p>&copy; GST Billing System</p>
</div>

</body>
</html>





