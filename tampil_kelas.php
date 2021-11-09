<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="sha256-hHKA3d/HttC8OW3Sl093W8DoZudhHJDj++kZYo6MLzA=" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<h3>Data Jurusan</h3>
	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th>NO</th>
				<th>JURUSAN</th>
				<th>ANGKATAN</th>
				<th>AKSI</th>
			</tr>
		</thead>
		<tbody>
			<?php
			include "koneksi.php";
			$qry_jurusan=mysqli_query($conn,"select * from jurusan");
			$no=0;
			while($data_jurusan=mysqli_fetch_array($qry_jurusan)){
			$no++;?>
			<tr>
			<td><?=$no?></td><td><?=$data_jurusan['nama_jurusan']?></td> <td><?=$data_jurusan['angkatan']?></td>


			<td><a href="hapus_kelas.php?id_jurusan=<?=$data_jurusan['id_jurusan']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')"class="btn btn-danger">Hapus</a></td>

		</tr>
		<?php
		}
		?>
		</tbody>
	</table>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha256-edRDsV9ULIqKzKjpN/KjyQ7Lp4vUn9usbJuHjH8Sk+k=" crossorigin="anonymous"></script>
</body>
</html>