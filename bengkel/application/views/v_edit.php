<title><?=$template; ?></title>
		<style type="text/css">
				p.data {
		border-collapse: collapse;
		align: center;
	}
	table{
		width: 40%;
		margin : auto;
		margin-top : 5%;
	}
	table.data th, table.data td {
		padding: 10px;
		align: center;
	}
	table.data td{
	background-color : white;
	}
</style>
<h3 style="font-size:200%; text-align:center;">Edit Data Service</h3>
<?php foreach($service as $u){ ?>
	<form action="<?php echo base_url(). 'service/update'; ?>" method="post">
<table style="font-size:150%;">
<tr>
	<td>Nama Sparepart</td>
	<td>
		<input type="text" name="nama_sparepart" value="<?php echo $u->Nama_sparepart ?>">
	</td>
	</tr>
	<tr>
		<td>Harga Sparepart</td>
		<td><input type="text" name="harga" value="<?php echo $u->Harga_sparepart ?>"></td>
	</tr>
	<tr>
		<td>Jenis Service</td>
		<td><input type="text" name="pekerjaan" value="<?php echo $u->Jenis_service ?>"></td>
	</tr>
	<tr>
		<td>Harga Service</td>
		<td><input type="text" name="pekerjaan" value="<?php echo $u->Harga_service ?>"></td>
	</tr>
	<tr>
		<td>Nama Mekanik</td>
		<td><input type="text" name="pekerjaan" value="<?php echo $u->nama_mekanik ?>"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
<?php echo form_close(); ?>
</form>
