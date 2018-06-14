<title><?=$template; ?></title>
		<style type="text/css">
				p.data {
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
<h3 style="font-size:200%; text-align:center;">Edit Profil Admin</h3>
<table style="font-size:150%;>
<?php echo form_open('profil/editdata'); ?>
<tr>
    <td> Nama Admin </td>
    <td> <?php echo form_input('nama_admin'); ?> </td>
</tr>
<tr>
    <td> Username </td>
    <td> <?php echo form_input('username'); ?> </td>
</tr>
<tr>
    <td> Password </td>
    <td> <?php echo form_input('password'); ?> </td>
</tr>
<tr>
    <td> </td>
    <td> <?php echo form_submit('submit', 'Simpan Perubahan'); ?> </td>
</tr>
</table>
<?php echo form_close(); ?>
</form>
