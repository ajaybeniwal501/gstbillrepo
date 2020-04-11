<?php
include('config.php');
session_start();
include('Invoice.php');
include('header/header.php');

 
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
<!--
<?php echo "$username"; ?>
    <br>
    <?php
    echo "$u_id";
    ?>
    
-->


<div class="form-group">
					
            <input type=button style="margin: 20px 0px 0px 600px; "  class="btn btn-info" onclick="window.location.href = 'welcome.php';" value="Home"/>
                    </div>

<title>GST Billing System</title>
<script src="js/invoice.js"></script>
<link href="css/style.css" rel="stylesheet">
<div class="container content-invoice">
	<form method="post" id="insert_form">
		<div class="load-animate animated fadeInUp">
			<div class="row">
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<h2 class="title">GST Billing System</h2>
					
				</div>		    		
			</div>
            
            
            
            
                
        <?php
$sql = "SELECT company_name,state,address,contact_no from company where user_id='$u_id'";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{
?>
        
   
            
            
			<input id="currency" type="hidden" value="$">
			<div class="row">
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<h3>From,</h3>
					<?php echo htmlentities($result->company_name);?>,<br>
 <?php echo htmlentities($result->address);?> ,<br> <?php echo htmlentities($result->state);?>,<br>
 Phone Number : <?php echo htmlentities($result->contact_no);?><br><br><br><br>
				</div>  
                
                
    <?php } } ?>            
                
                
                
                   <?php
	$sql = "select * from tblusers where user_id='$u_id'";
	$rs = mysqli_query($link,$sql);
	
	
?>
                
                
                
                
                
                
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 pull-right">
					<h3>To,</h3>
					
                    <select id="country" name="companyName">
                 
                        <option value=""><h2>Select Customer</h2></option>
				<?php 
					while($rows = mysqli_fetch_assoc($rs))
					{
						echo '<option value="'.$rows['name'].'">'.$rows['name'].'</option>'; 
					}
				?>
			</select>
                    <br><br>
                  <div class="form-group">
						<textarea class="form-control address" rows="3" name="address" id="address" placeholder="Address"></textarea>
					</div>
                </div>
					
				
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<table class="table table-bordered table-hover" id="invoiceItem">	
						<tr>
							<th width="5%">Select</th>
							<th width="38%">Item Name</th>
							<th width="20%">Quantity</th>
							<th width="22%">Price</th>								
							<th width="20%">Total</th>
						</tr>							
						<tr>
							<td><input class="itemRow" type="checkbox"></td>
							
							<td><input type="text" name="productName[]" id="productName_1" class="form-control" autocomplete="off"></td>			
							<td><input type="number" name="quantity[]" id="quantity_1" class="form-control quantity" autocomplete="off"></td>
							<td><input type="number" name="price[]" id="price_1" class="form-control price" autocomplete="off"><br></td>
							<td><input type="number" name="total[]" id="total_1" class="form-control total" autocomplete="off"></td>
						</tr>						
					</table>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					<button class="btn btn-success " id="removeRows" type="button">- Delete</button>
					<button class="btn btn-success" id="addRows" type="button">+ Add More</button>
				</div>
			</div>
			<div class="row">	
				<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
					<h3>Notes: </h3>
					<div class="form-group">
						<textarea class="form-control txt" rows="5" name="notes" id="notes" placeholder="Your Notes"></textarea>
					</div>
					<br>
					<div class="form-group">
						<input type="hidden" value="<?php echo $_SESSION['userid']; ?>" class="form-control" name="userId">
										
					</div>
					
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<span class="form-inline">
						<div class="form-group">
							<label>Subtotal: &nbsp;</label>
							<div class="input-group">
								<div class="input-group-addon currency">$</div>
								<input value="" type="number" class="form-control" name="subTotal" id="subTotal" placeholder="Subtotal">
							</div>
						</div>
						<div class="form-group">
							<label>Tax Rate: &nbsp;</label>
							<div class="input-group">
								<input value="" type="number" class="form-control" name="taxRate" id="taxRate" placeholder="Tax Rate">
								<div class="input-group-addon">%</div>
							</div>
						</div>
						<div class="form-group">
							<label>Tax Amount: &nbsp;</label>
							<div class="input-group">
								<div class="input-group-addon currency">$</div>
								<input value="" type="number" class="form-control" name="taxAmount" id="taxAmount" placeholder="Tax Amount">
							</div>
						</div>							
						<div class="form-group">
							<label>Total: &nbsp;</label>
							<div class="input-group">
								<div class="input-group-addon currency">$</div>
								<input value="" type="number" class="form-control" name="totalAftertax" id="totalAftertax" placeholder="Total">
							</div>
						</div>
						<div class="form-group">
							<label>Amount Paid: &nbsp;</label>
							<div class="input-group">
								<div class="input-group-addon currency">$</div>
								<input value="" type="number" class="form-control" name="amountPaid" id="amountPaid" placeholder="Amount Paid">
							</div>
						</div>
						<div class="form-group">
							<label>Amount Due: &nbsp;</label>
							<div class="input-group">
								<div class="input-group-addon currency">$</div>
								<input value="" type="number" class="form-control" name="amountDue" id="amountDue" placeholder="Amount Due">
							</div>
						</div>
					</span>
				</div>
			</div>
			<div class="clearfix"></div>	
             <div class="form-group">
						<input type="submit" name="submit" class="btn btn-info" value="Save Invoice" />
                </div>
                <div class="form-group">
					
            <input type=button class="btn btn-info" onclick="window.location.href = 'invoice_list.php';" value="Cancel"/>
                    </div>
		</div>
	</form>			
</div>




  
                <script type="text/javascript">
	$(document).ready(function(){
		$("#country").change(function(){
			var getCountryID = $(this).val();
			
			if(getCountryID !='')
			{
				$("#loader").show();
				$(".address").html("");
				
				$.ajax({
					type:'post',
					data:{id:getCountryID},
					url: 'ajax_request.php',
					success:function(returnData){
						$("#loader").hide();	
						$(".address").html(returnData);
					}
				});	
			}
			
		})
	});
</script>

   
  
        <?php

//insert.php;

if(isset($_POST["companyName"]))
{

$data = array(
   ':companyName'   => $_POST["companyName"],
   ':address'  => $_POST["address"],
   ':subTotal'  => $_POST["subTotal"],
    ':taxAmount'   => $_POST["taxAmount"],
    ':taxRate' => $_POST["taxRate"],
   ':totalAftertax'  => $_POST["totalAftertax"],
   ':amountPaid' => $_POST["amountPaid"],
    ':amountDue' => $_POST["amountDue"],
     ':notes'   => $_POST["notes"],
  );

  $query ="INSERT INTO invoice_order (order_receiver_name, order_receiver_address, order_total_before_tax, order_total_tax, order_tax_per, order_total_after_tax, order_amount_paid, order_total_amount_due, note,user_id) 
			VALUES (:companyName,
            :address, 
            :subTotal,
            :taxAmount, 
            :taxRate,
            :totalAftertax, 
            :amountPaid,
            :amountDue, 
            :notes,
            $u_id
            )
 ";

$statement = $dbh->prepare($query);

  $statement->execute($data);
    $last_id = $dbh->lastInsertId();
    

   for($count = 0; $count < count($_POST["productName"]); $count++)
 {
  $data1 = array(
   ':productName'   => $_POST["productName"][$count],
   ':quantity'  => $_POST["quantity"][$count],
   ':price' => $_POST["price"][$count],
  ':total'   => $_POST["total"][$count]
  );

  $query1 = "
   INSERT INTO invoice_order_item (orderid,item_name, order_item_quantity, order_item_price, order_item_final_amount,user_id) 
			VALUES ( $last_id,:productName, :quantity, :price, :total,$u_id)
  ";

  $statement1 = $dbh->prepare($query1);

  $statement1->execute($data1);
 
 }

 
 echo "<script>alert('Invoice Saved successfully');</script>";
echo "<script>window.location.href='invoice_list.php'</script>";


}



?>
        
        

