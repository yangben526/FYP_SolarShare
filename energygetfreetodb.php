
<head>
    <meta charset="utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
	<title>User Transaction db</title>
	<link rel="stylesheet" type="text/css" href="usertransactionpagesellordermarket/css/style.css">
	<link rel="shortcut icon" type="image/x-icon" href="usertransactionpagesellordermarket/img/homepic.png"/>
	
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">

</head>

<script>
	setTimeout('history.go(-1)', 1000);
</script>

<?php
include 'databaseinfo.php';

$conn = OpenCon();
echo "Transaction Recorded at ";
echo date("Y-m-d H:i:s");

$query = "INSERT INTO buyfromsolar(Price,EnergyAmt,Total,DateTime)VALUES('$_POST[price]','$_POST[amount]','$_POST[total]',NOW())";
$result = mysqli_query($conn,$query);
CloseCon($conn);
?>