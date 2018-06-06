<title><?=$header; ?></title>
		<style type="text/css">
				p.data {
		border-collapse: collapse;
		align: center;
	}
	p{
		width: 20%;
		margin : -300px 8px 0 630px;
	}
	p.data h, p.data b, p.data input {
		padding: 10px;
		align: center;
	}
</style>
<h3>Tambah Mekanik</h3>
<table>
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
