<?php
$id = $_GET['id'];
include 'model.php';
$model = new Model();
$data = $model->edit_mhs($id);
?>

<!doctype html>
<html lang="en">

<head>
	<title>Edit Data Mata Kuliah</title>
</head>

<body>
	<h1>Edit Data Mata Kuliah</h1>
	<a href="matakuliah.php">Kembali</a>
	<br><br>
	<form action="proses.php" method="post">
		<label>id</label>
		<br>
		<input type="text" name="id" value="<?php echo $data->id ?>">
		<br>
		<label>Nama matakuliah</label>
		<br>
		<input type="text" name="nama" value="<?php echo $data->nama_mk ?>">
		<br><br>
		<button type="submit" name="submit_edit_matkul">Submit</button>
	</form>
</body>
</html>