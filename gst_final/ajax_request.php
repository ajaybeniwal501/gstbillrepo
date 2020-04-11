<?php 
	require('config.php');
	
	if(isset($_POST['id']) && $_POST['id'] !='')
	{
		$countryID = $_POST['id'];
		$sql = "select * from tblusers where name = '".$countryID."' ";
		$rs = mysqli_query($link,$sql);
		
        $result = mysqli_query($link,$sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row["name"]. ", ".  $row["address"]. ", " . $row["contact_no"] ;
    }
} else {
    echo "0 results";
}

$link->close();
    }
?>
