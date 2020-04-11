
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
    font-size:14px;
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
   


</style>
</head>
<body>

<ul>
  <li><a href="welcome.php">Home</a></li>
  
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Invoice's Fields</a>
    <div class="dropdown-content">
    <a href="company_index.php">Company Name</a>
      <a href="item_index.php">Add Item</a>
      <a href="customer_index.php">Add Customer</a>
     
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

</body>
</html>