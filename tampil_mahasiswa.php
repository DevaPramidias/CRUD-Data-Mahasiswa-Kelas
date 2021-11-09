<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="sha256-hHKA3d/HttC8OW3Sl093W8DoZudhHJDj++kZYo6MLzA=" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<h3>Data Mahasiswa</h3>
	<table class="table table-hover table-stripped">
		<thead>
			<tr>
				<th>NO</th>
				<th>NAMA</th>
				<th>TANGGAL LAHIR</th>
				<th>JENIS KELAMIN</th>
				<th>ALAMAT</th>
				<th>USERNAME</th>
				<th>JURUSAN</th>
				<th>AKSI</th>
			</tr>
		</thead>
		<tbody>
			<?php
			include "koneksi.php";
			$qry_mahasiswa=mysqli_query($conn,"select * from mahasiswa join jurusan on jurusan.id_jurusan=mahasiswa.id_jurusan");
			$no=0;
			while($data_mahasiswa=mysqli_fetch_array($qry_mahasiswa)){
			$no++;?>
				<tr>
					<td><?=$no?></td><td><?=$data_mahasiswa['nama']?></td> <td><?=$data_mahasiswa['tanggal_lahir']?></td> <td><?=$data_mahasiswa['jenis_kelamin']?></td> <td><?=$data_mahasiswa['alamat']?></td> <td><?=$data_mahasiswa['username']?></td> <td><?=$data_mahasiswa['nama_jurusan']?></td>
					<td><a href="ubah_mahasiswa.php?id_mhs=<?=$data_mahasiswa['id_mhs']?>" class="btn btn-success">Ubah</a> | <a href="hapus_mhs.php?id_mhs=<?=$data_mahasiswa['id_mhs']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
					
				</tr>
				<?php
				}
				?>
		</tbody>
	</table>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha256-edRDsV9ULIqKzKjpN/KjyQ7Lp4vUn9usbJuHjH8Sk+k=" crossorigin="anonymous"></script>
</body>
</html>