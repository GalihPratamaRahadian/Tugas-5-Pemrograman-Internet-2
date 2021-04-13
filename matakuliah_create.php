<!doctype html>
<html lang="en">
<head>
	<title>Tambah Mata Kuliah</title>
</head>

<body>
	<h1>Tambah Mata Kuliah</h1>
	<a href="matakuliah.php">Kembali</a>
	<br><br>
	<form action="proses.php" method="post">
		<label>Id</label>
		<br>
		<input type="text" name="id">
		<br>
		<label>Nama matakuliah</label>
		<br>
		<input type="text" name="nama">
		<br><br>
		<button type="submit" name="submit_simpan_matkul">Submit</button>
		<button type="reset">Reset</button>
	</form>
</body>
</html>