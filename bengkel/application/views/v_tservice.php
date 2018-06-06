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

<h3>Tambah Jenis Service</h3>
<table>
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
</form>
