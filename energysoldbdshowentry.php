<?php

include 'databaseinfo.php';

$conn = OpenCon();

$query="SELECT * FROM soldenergytotrader ORDER BY DateTime DESC";
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
		<table align="center" border='1px;' style="width:1000px; line-height:40px; padding:20px; margin:10px;">
			<tr>
				<th colspan="4"><h2>Transaction History</h2></th>
			</tr>
			<t>
			<th>Price (symbol.xym)</th>
			<th>Energy Amount (vagabond.energy)</th>
			<th>Total (symbol.xym)</th>
			<th>DateTime</th>
			</t>
			<?php
				while($rows=mysqli_fetch_assoc($result))
				{
			?>
					<tr align="center">
						<td><?php echo $rows['Price']; ?></td>
						<td><?php echo $rows['EnergyAmt']; ?></td>
						<td><?php echo $rows['Total']; ?></td>
						<td><?php echo $rows['DateTime']; ?></td>
					</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>