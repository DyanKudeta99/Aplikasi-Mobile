<title><?=$header; ?></title>
<style type="text/css">
p.data {
		border-collapse: collapse;
		top: 10px;
	}
	p{
		margin : -300px 8px 0 580px;
	}
	p.data th, p.data td, p.data a {
		padding: 10px;
	}
	
</style>
		<p>
		<table class="data" border="3" align="center" >
		<a href="<?=site_url('tsparepart');?>">Tambah Sparepart</a>
			<tr style="background-color: red; color: white;">
				<th>Kode Sparepart</th>
				<th>Nama Sparepart</th>
				<th>Harga Sparepart</th>
			</tr>
			<?php
			foreach ($sparepart as $b => $row) { ?>
				<tr style="font-size: 15px;">
					<td><?=$row->Kode_sparepart;?></td>
					<td><?=$row->Nama_sparepart;?></td>
					<td><?=$row->Harga_sparepart;?></td>
				</tr>
			<?php
			} ?>
		</table>
		</p>