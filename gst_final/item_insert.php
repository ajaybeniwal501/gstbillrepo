<?php
include('config.php');
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>

<?php
$u_id=$_SESSION['id'];
$username=$_SESSION['username'];

$show=mysqli_query($link,"select * from users where user_id='$u_id'");
	
?>
 


<html>
<head>
   
   
    <meta charset="utf-8">
    <title>GST Billing </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://www.w3schools.com/w3css/4/w3.css" rel="stylesheet">
   
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

    
   <style>
ul {
  list-style-type: none;
  margin: 0;
  font-size: 14px;
  padding: 0;
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
  padding: 14px 47px;
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
  min-width: 200px;
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
    

    
/* Slideshow CSS */

       
       
       
       * {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}

.slideshow-container {
  position: relative;
  background: #f1f1f1f1;
}

.mySlides {
  display: none;
  padding: 100px;
  text-align: center;
}

.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -30px;
  padding: 16px;
  color: #888;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

.next {
  position: absolute;
  right: 0;
  border-radius: 3px 0 0 3px;
}

.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
  color: white;
}

.dot-container {
    text-align: center;
    padding: 20px;
    background: #ddd;
}

.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

q {font-style: italic;}

.author {color: cornflowerblue;}
        
       
       
       
        input[type=text], select {
  width: 100%;
  padding: 6px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 2px solid #ccc;
  border-radius: 6px;
  box-sizing: border-box;
}
        
   input[type=submit] {
  width: 7%;
  background-color:#1E90FF;
  color: white;
  padding: 5px 10px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
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

<!--   
<?php echo "$username"; ?>
    <br>
    <?php
    echo "$u_id";
    ?>
    -->
    
 



<div class="w3-container">
<div class="row">
<div class="w3-container">
<h3>Insert Items</h3>
<hr />
</div>
</div>
<form name="insertrecord" method="post">
<div class="w3-row">
<div class="w3-third w3-container"><b>Item Code</b>
<input type="text" name="item_code"  required>
</div>
<div class="w3-third w3-container"><b>Item Name</b>
<input type="text" name="item_name"  required>
</div>
</div>
<div class="w3-row">

<div class="w3-third w3-container"><b>Item Description</b>
<input type="text" name="item_desc" required>
</div>
</div>
   

<div class="w3-container" style="margin-top:1%">
<div class=" w3-row ">
<input type="submit" name="insert" value="Submit"> &nbsp;
    
    <input type="submit" onclick="window.location.href = 'item_index.php';" value="Cancel"/>

</div>
   
    
</div>
</form>

   
  
    <div class="footer">
  <p>&copy; GST Billing System</p>
</div>
    </div>
</body>
</html>


<?php

if(isset($_POST['insert']))
{
$code=$_POST['item_code'];
$name=$_POST['item_name'];

$desc=$_POST['item_desc'];

    
$sql="INSERT INTO item(item_code,item_name,item_desc,user_id) VALUES(:code,:name,:desc,'$u_id')";
$query = $dbh->prepare($sql);
$query->bindParam(':code',$code,PDO::PARAM_STR);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':desc',$desc,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo "<script>alert('Record inserted successfully');</script>";
echo "<script>window.location.href='item_index.php'</script>";
}
else
{
echo "<script>alert('Something went wrong. Please try again');</script>";
echo "<script>window.location.href='index.php'</script>";
}
}
?>

