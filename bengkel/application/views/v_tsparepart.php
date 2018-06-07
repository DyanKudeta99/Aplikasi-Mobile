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
<h3 style="font-size:200%; text-align:center;">Tambah Data Sparepart</h3>
<table style="font-size:150%;">
<?php echo form_open('sparepart/tambahdata'); ?>
<tr>
    <td> Kode sparepart </td>
    <td> <?php echo form_input('kode_sparepart'); ?> </td>
</tr>
<tr>
    <td> Nama sparepart </td>
    <td> <?php echo form_input('nama_sparepart'); ?> </td>
</tr>
<tr>
    <td> Harga sparepart </td>
    <td> <?php echo form_input('harga_sparepart'); ?> </td>
</tr>
<tr>
    <td> </td>
    <td> <?php echo form_submit('submit', 'Tambah'); ?> </td>
</tr>
</table>
<?php echo form_close(); ?>
</form>
