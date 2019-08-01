<?php 
include '../class.php';
$file_ending = "xls";
$filename = "datapeserta".$_GET['devisi'];
//header info for browser
header("Content-Type: application/xls");    
header("Content-Disposition: attachment; filename=$filename.xls");  
header("Pragma: no-cache"); 
header("Expires: 0");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Data peserta <?php echo $filename ?></title>
	<style type="text/css">
		body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;
 
	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>
</head>
<body>
	<center><h3><?php echo $filename ?></h3></center>
	<table>
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Nim</th>
				<th>Email</th>
				<th>Telp</th>
				<th>Alamat</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($use->getAnggotaDevisi($_GET['devisi']) as $key => $value): ?>
				<tr>
					<td><?php echo $key+1 ?></td>
					<td><?php echo $value['nama'] ?></td>
					<td><?php echo $value['nim'] ?></td>
					<td><?php echo $value['email'] ?></td>
					<td>'<?php echo $value['phone'] ?></td>
					<td>'<?php echo $value['alamat'] ?></td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>

</body>
</html>