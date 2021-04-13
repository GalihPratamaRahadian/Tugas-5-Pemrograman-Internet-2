<!doctype html>
<html lang="en">
<head>
	<title>Tambah Absen Mahasiswa</title>
</head>

<body>
	<h1>Tambah Absen Mahasiswa</h1>
	<a href="absen.php">Kembali</a>
	<br><br>
	<form action="proses.php" method="post">
		<label>Id</label>
		<br>
		<input type="text" name="id">
		<br>
		<label>Id Mahasiswa</label>
		<br>
		<input type="text" name="mhs_id"><br>
		<label>Id Matakuliah</label>
		<br>
		<input type="text" name="matkul_id">
		<br>
		<label>Waktu Absen</label>
		<br>
		<input type="time" name="waktu_absen">
		<br>
		<label>Status</label>
		<br>
		<input type="text" name="status">
		<br><br>
		<button type="submit" name="submit_simpan_absen">Submit</button>
		<button type="reset">Reset</button>
	</form>
</body>
</html>