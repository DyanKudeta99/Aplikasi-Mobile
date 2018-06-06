<title><?=$header; ?></title>
		<style type="text/css">
				p.data {
		border-collapse: collapse;
		align: center;
	}
	p{
		width: 40%;
		margin : -300px 8px 0 630px;
	}
	p.data h, p.data b, p.data input {
		padding: 10px;
		align: center;
	}
</style>
<h3>Edit Profil Admin</h3>
<table>
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
