<?php
//include_once ('connection.php');
//include 'connection.php';
include 'databaseinfo.php';

$conn = OpenCon();
//echo "Connected Successfully";
$query="SELECT * FROM solarpanel";
$result=mysqli_query($conn,$query);
CloseCon($conn);
?>

<!DOCTYPE html>

<html>
<style>
body{
	background-color:#F5F5F5;
}
</style>

	<title>Solar List </title>
	<script>
	function goBack(){
		window.history.back();
	}
	</script>
	
	<body>
		<div class="solartable">
			<table align="center" style="width:1000px; line-height:40px;">
				<tr>
					<th colspan="4"><h2>Solar Panel</h2></th>
				</tr>
				<t>
				<th>Solar No.</th>
				<th>Blockchain Address</th>
				<th>STATUS</th>
				</t>
				<?php
					while($rows=mysqli_fetch_assoc($result))
					{
				?>
						<tr align="center">
							<td><?php echo $rows['Solar_ID']; ?></td>
							<td><?php echo $rows['Address']; ?></td>
							<td style="background-color:#66FF00; color:#6A6A6A; border-radius:10px;"><?php echo $rows['Status']; ?></td>
						</tr>
				<?php
					}
				?>
			</table>
		</div>
	</body>
</html>