<?php
//include_once ('connection.php');
//include 'connection.php';
include 'databaseinfo.php';

$conn = OpenCon();
//echo "Connected Successfully";
$query="SELECT * FROM electricity_bill";
$result=mysqli_query($conn,$query);
CloseCon($conn);
?>

<!DOCTYPE html>
<html>
	<title>
		 Transaction History 
	</title>
	<script>
	function goBack(){
		window.history.back();
	}
	</script>
	
	<body>
		<button onclick="goBack()">Exit</button>
		<table align="center" boder='1px' style="width:1000px; line-height:40px;">
			<tr>
				<th colspan="4"><h2>Transaction History</h2></th>
			</tr>
			<t>
			<th align="left">Bill ID</th>
			<th align="left">Power Usage (kW)</th>
			<th align="left">Amount (xem.nem)</th>
			<th align="left">Date Issued</th>
			</t>
			<?php
				while($rows=mysqli_fetch_assoc($result))
				{
			?>
					<tr>
						<td><?php echo $rows['Bill_ID']; ?></td>
						<td><?php echo $rows['Energy_consumpkw']; ?></td>
						<td><?php echo $rows['amount']; ?></td>
						<td><?php echo $rows['Date']; ?></td>
					</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>