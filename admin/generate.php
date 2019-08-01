<?php include '../class.php'; 
$data = $use->getUser();
?>

<div style="margin-top: 10px;"></div>
<?php foreach ($data as $key => $value1): ?>
<div style="width: 28%;float: left; border: 2px solid black;padding: 10px;margin-bottom: 10px; margin-right: 10px;">
	<p style="margin: 0;font-size: 16px;font-weight: bold;font-family: segoe-ui">Username : <?php echo $value1['username'] ?></p>
	<p style="margin: 0;font-size: 16px;font-weight: bold;font-family: segoe-ui">Password : <?php echo $value1['password'] ?></p>
	<p style="margin: 0;font-size: 14px;font-weight: bold;font-family: segoe-ui;color: red">
		URL Login : S.id/daftarDNCC
	</p>
</div>
<?php endforeach ?>
