<title><?=$template; ?></title>
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
			<p class="data" border="3">
			<form action="<?=site_url('setting/update');?>" method="POST" align="center">
			<h2>Edit Profil Admin</h2>
				<b>Nama</b><br>
				<input type = 'varchar' name = 'nama_admin'></br></br>
				<b>Username</b><br>
				<input type = 'varchar' name = 'username'></br></br>
				<b>Password</b><br>
				<input type = 'text' name = 'password'></br></br>
				<input type = 'submit' name = 'btnSave' value="Simpan Perubahan">
			</form>
			</p>