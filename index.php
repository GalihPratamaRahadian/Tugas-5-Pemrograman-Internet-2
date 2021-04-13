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
<title>Data Mahasiswa</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
<div>
<h1>Data Nilai Mahasiswa</h1>
<a href="create.php">Tambah Data</a>
<br>
<a href="print.php" target="_blank">Cetak Data</a>
<br><br>
<table border="1">
<thead>
<tr>
<th>No.</th>
<th>NIM</th> 
<th>Nama</th>
<th>UTS</th>
<th>UAS</th>
<th>Tugas</th>
<th>NA</th>
<th>Status</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
<?php
$result = $model->tampil_data();
if ( !empty($result) ) {
foreach ($result as $data): ?>
<tr>
<td><?=$index++ ?></td>
<td><?=$data->nim ?></td>
<td><?=$data->nama ?></td>
<td><?=$data->uts ?></td>
<td><?=$data->uas ?></td>
<td><?=$data->tugas ?></td>
<td><?=$data->na ?></td>
<td><?=$data->status ?></td>
<td> 
<a name="edit" id="edit" href="edit.php?nim=<?=$data->nim ?>">Edit</a>
<a name="hapus" id="hapus" href="proses.php?nim=<?=$data->nim ?>">Delete</a>
</td>
</tr>
<?php endforeach;
} else{ ?>
<tr>
<td colspan="9">Belum ada data pada tabel nilai mahasiswa.</td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
</body>
</html>
