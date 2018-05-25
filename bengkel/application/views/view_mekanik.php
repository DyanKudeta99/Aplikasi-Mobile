<html>
	<head>
		<title>Tabel Mekanik</title>
		<style type="text/css">
		body{
	background: url(assets/images/honda.jpg);
	}
		</style>
	</head>
	<body>
		<p><h3 align="center">Daftar Mekanik</h3></p>
		<p align="center">
			<table border="1">
				<tr>
					<th>id_mekanik</th>
					<th>nama_mekanik</th>
				</tr>
				<?php
                foreach ($data->result_array() as $i):
						$id_mekanik=$i['id_mekanik'];
						$nama_mekanik=$i['nama_mekanik']
				?>
				<tr>
					<td><?php echo $id_mekanik;?></td>
					<td><?php echo $nama_mekanik;?></td>
				</tr>
				<?php endforeach;
				?>
			</table>
		</p>
	</body>
</html>