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
<h3 style="font-size:200%; text-align:center;">Tambah Mekanik</h3>
<table style="font-size:150%;">
<?php echo form_open('mekanik/tambahdata'); ?>
<tr>
    <td> Id Mekanik </td>
    <td> <?php echo form_input('id_mekanik'); ?> </td>
</tr>
<tr>
    <td> Nama Mekanik </td>
    <td> <?php echo form_input('nama_mekanik'); ?> </td>
</tr>
<tr>
    <td> Contact Person </td>
    <td> <?php echo form_input('cp'); ?> </td>
</tr>
<tr>
    <td> </td>
    <td> <?php echo form_submit('submit', 'Tambah'); ?> </td>
</tr>
</table>
<?php echo form_close(); ?>
</form>
