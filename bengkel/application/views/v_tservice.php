<title><?=$template; ?></title>
		<style type="text/css">
				table.data {
		border-collapse: collapse;
		align: center;
	}
	table{
		width: 50%;
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

<table class="data" border="3" >
<h3 style="text-align:center; font-size:200%;">Tambah Jenis Service</h3>
<table style="font-size:150%;">
<?php echo form_open('jservice/tambahdata'); ?>
<tr>
    <td> Kode Service </td>
    <td> <?php echo form_input('Kode_service'); ?> </td>
</tr>
<tr>
    <td> Jenis Service </td>
    <td> <?php echo form_input('Jenis_service'); ?> </td>
</tr>
<tr>
    <td> Harga Service </td>
    <td> <?php echo form_input('Harga_service'); ?> </td>
</tr>
<tr>
    <td> </td>
    <td> <?php echo form_submit('submit', 'Tambah'); ?> </td>
</tr>
</table>
<?php echo form_close(); ?>
</table>
