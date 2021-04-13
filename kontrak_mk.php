<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">

<<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="index.php">Data Nilai <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="mahasiswa.php">Data Mahasiswa</a>
      <a class="nav-item nav-link" href="absen.php">Absensi</a>
      <a class="nav-item nav-link" href="matakuliah.php">Mata Kuliah</a>
      <a class="nav-item nav-link" href="kontrak_mk.php">Kontrak Mata Kuliah</a>
    </div>
  </div>
</nav>

<head>
<title>Data Kontrak Kuliah</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<h1>Kontrak Kuliah</h1>
<a href="kontrak_mk_create.php">Tambah Data</a>
<br>
<a href="kontrak_mk_print.php" target="_blank">Cetak Data</a>
<br><br>
<table border="1">
  <thead>
    <tr>
      <th>No.</th>
      <th> Matakuliah Id</th>
      <th>Mahasiswa Id</th>
      <th>Aksi</th>
    </tr>
  </thead>
<tbody>

<?php
$result = $model->tampil_data_kontrak();
if ( !empty($result) ) {
  foreach ($result as $data): ?>
    <tr>
      <td><?=$index++ ?></td>
      <td><?=$data->mk_id ?></td>
      <td><?=$data->mhs_id ?></td>
      <td><a name="edit_kontrak" id="edit_kontrak" href="kontrak_mk_edit.php?id=<?=$data->id ?>">Edit</a>
      <a name="hapus_kontrak" id="hapus_kontrak" href="proses.php?id=<?=$data->id ?>">Delete</a>
      </td>
    </tr>
<?php 
endforeach;
}else{ 

?>
<tr>
<td colspan="9">Maaf Data Belum Dimasukan.</td>
</tr>
<?php 

} 

?>
</tbody>
</table>
</div>
</body>
</html>