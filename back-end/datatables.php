<?php include("config.php"); ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"/>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$('.data').DataTable();
	});
</script>
</head>
<body>
<table border="1" class="data">
					<thead>
						<tr>
							<th>Nomor</th>
							<th>Judul</th>
							<th>Waktu</th>
							<th>Penulis</th>
							<th>Berita</th>
							
							<th>Gambar</th>
							<th>Tindakan</th>
						</tr>
					</thead>
					<tbody>
						
						<?php
						$sql = "SELECT * FROM berita ORDER BY id DESC";
						$query = mysqli_query($db, $sql);
						
						while($siswa = mysqli_fetch_array($query)){
							echo "<tr>";
							echo "<td>";
							echo "<td>".$siswa['judul']."</td>";
							echo "<td>".$siswa['waktu']."</td>";
							echo "<td>".$siswa['penulis']."</td>";
							echo "<td>".substr($siswa['isi'],0,80)."...."."</td>";
							//echo "<td>"substr($siswa,0, 66)."</td>";
							//echo "<td>".$siswa['agama']."</td>";
							//echo "<td>".$siswa['sekolah_asal']."</td>";
							
							echo "<td><img src='images/".$siswa['gambar']."' width='100' height='100'></td>";
							
							echo "<td>";
							echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
							echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
							echo "</td>";
							
							echo "</tr>";
						}		
						?>
						
					</tbody>
					</table>
					
					</body>
					</html>