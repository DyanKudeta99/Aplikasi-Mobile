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
<h3>Tambah Data Sparepart</h3>
<table>
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
