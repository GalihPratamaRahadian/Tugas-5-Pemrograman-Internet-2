<?php
$id = $_GET['id'];
include 'model.php';
$model = new Model();
$data = $model->edit_absen($id);
?>

<!doctype html>
<html lang="en">

<head>
	<title>Edit Absen Mahasiswa</title>
</head>

<body>
	<h1>Edit Absen Mahasiswa</h1>
	<a href="absen.php">Kembali</a>
	<br><br>
	<form action="proses.php" method="post">
		<label>Id</label>
		<br>
		<input type="text" name="id" value="<?php echo $data->id ?>">
		<br>
		<label>Id Mahasiswa</label>
		<br>
		<input type="text" name="mhs_id" value="<?php echo $data->mhs_id ?>">
		<br>
		<label>Id Matakuliah</label>
		<br>
		<input type="text" name="matkul_id" value="<?php echo $data->matkul_id ?>">
		<br><label>Waktu Absen</label>
		<br>
		<input type="time" name="waktu_absen" value="<?php echo $data->waktu_absen ?>">
		<br>
		<label>Status</label>
		<br>
		<input type="text" name="status" value="<?php echo $data->status ?>">
		<br><br>
		<button type="submit" name="submit_edit_absen">Submit</button>
	</form>
</body>
</html>