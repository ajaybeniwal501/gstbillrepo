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
    
 
<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
    <meta charset="utf-8">
    <title>Customers Informations </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
    
    <style type="text/css">
        
        
        #customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: gray;
  color: white;
}
        
        .grid-container > div {
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  padding: 20px 100px;
  font-size: 30px;
}
        
        
        
   .w3-container:after,.w3-container:before,.w3-panel:after,.w3-panel:before,.w3-row:after,.w3-row:before,.w3-row-padding:after,.w3-row-padding:before,
.w3-cell-row:before,.w3-cell-row:after,.w3-clear:after,.w3-clear:before,.w3-bar:before,.w3-bar:after{content:"";display:table;clear:both}
        
        
        
    </style>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="w3-container w3-border w3-small" >

<h3>Customers Informations</h3> <hr />
<a href="customer_insert.php"><button class="w3-button w3-indigo"> Insert Record</button></a>
 <br>
 <table class="w3-table-all w3-hoverable">
<thead>
<th>No.</th>
<th>Customer Name</th>
<th>Customer Number</th>
<th>Email</th>
<th>Phone Number</th>
<th>Customer GSTIN Number</th>
<th>Fax Number</th>
<th>Address</th>
<th>Edit</th>
<th>Delete</th>
</thead>
<tbody>
<?php
$sql = "SELECT name,customer_no,email,contact_no,customer_gst,fax_number,address,id from tblusers where user_id='$u_id'";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{
?>
    <tr>
    <td><?php echo htmlentities($cnt);?></td>
    <td><?php echo htmlentities($result->name);?></td>
    <td><?php echo htmlentities($result->customer_no);?></td>
    <td><?php echo htmlentities($result->email);?></td>
    <td><?php echo htmlentities($result->contact_no);?></td>
    <td><?php echo htmlentities($result->customer_gst);?></td>
    <td><?php echo htmlentities($result->fax_number);?></td>
    <td><?php echo htmlentities($result->address);?></td>
        
        
<td><a href="customer_update.php?id=<?php echo htmlentities($result->id);?>"><button class="btn btn-primary btn-xs">&#9997;</button></a></td>
<td><a href="customer_index.php?del=<?php echo htmlentities($result->id);?>"><button class="btn btn-primary btn-xs" onClick="return confirm('Do you really want to delete');">&#10006;</button></a></td>
    </tr>
<?php
$cnt++;
}} ?>
</tbody>
</table>
</div>
</body>
</html>
<?php
if(isset($_REQUEST['del']))
{
$uid=intval($_GET['del']);
$sql = "delete from tblusers WHERE  id=:id";
$query = $dbh->prepare($sql);
$query-> bindParam(':id',$uid, PDO::PARAM_STR);
$query -> execute();
echo "<script>alert('Record Delete successfully');</script>";
echo "<script>window.location.href='customer_index.php'</script>";
}
?>
    
    
    
  
    <div class="footer">
  <p>&copy; GST Billing System</p>
</div>

</body>
</html>