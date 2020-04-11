<?php

include('config.php');

if(isset($_POST["item_name"]))
{


 for($count = 0; $count < count($_POST["item_name"]); $count++)
 {
$data = array(
   ':companyName'   => $_POST["companyName"][$count],
   ':address'  => $_POST["address"][$count],
   ':subTotal'  => $_POST["subTotal"][$count],
    ':taxAmount'   => $_POST["taxAmount"][$count],
    ':taxRate' => $_POST["taxRate"][$count],
   ':totalAftertax'  => $_POST["totalAftertax"][$count],
   ':amountPaid' => $_POST["amountPaid"][$count],
    ':amountDue' => $_POST["amountDue"][$count],
     ':notes'   => $_POST["notes"][$count],
  );

  $query ="INSERT INTO invoice_order (order_receiver_name, order_receiver_address, order_total_before_tax, order_total_tax, order_tax_per, order_total_after_tax, order_amount_paid, order_total_amount_due, note) 
			VALUES (:companyName,
            :address, 
            :subTotal,
            :taxAmount, 
            :taxRate,
            :totalAftertax, 
            :amountPaid,
            :amountDue, 
            :notes  
            )
 ";

$statement = $dbh->prepare($query);

  $statement->execute($data);
 }

 echo 'ok';
}



?>