<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
     Dashboard Masjid Al-Barkah
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"/>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	

<script type="text/javascript">
	$(document).ready(function(){
		$('.data').DataTable();
	});
</script>
  
    <style type="text/css">
		#css-serial {
					counter-reset: serial-number;  /* Atur penomoran ke 0 */
					}
		#css-serial td:first-child:before {
					counter-increment: serial-number;  /* Kenaikan penomoran */
					content: counter(serial-number);  /* Tampilan counter */
					}
  </style>
  
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../assets/img/logo-small.png">
          </div>
        </a>
        <div class="simple-text logo-normal">
          ADMIN
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </div>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
		  <li class="active">
			<a href="list-berita.php">
              <i class="nc-icon nc-bank"></i>
              <p>Berita Terkini</p></a>
          </li>	
		  <li>
			<a href="list-kajian.php">
              <i class="nc-icon nc-istanbul"></i>
              <p>Kajian</p></a>
 		  <li>
			<a ui-sref="login">
              <i class="nc-icon nc-istanbul"></i>
              <p>Logout</p></a>
          </li>	
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand">Dashboard / Berita</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Setting</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <!-- <div class="panel-header panel-header-sm">
  
  
</div> -->



      <div class="content">
        <div class="row">
          <div class="col-md-12">
		  
		    <div class="col-md-12">
				<div class="card card-plain">
				  <div class="card-header">
					<center>
					<h3 class="card-title"> Berita Terkini dari Masjid Agung Al-Barkah Bekasi</h3>
					</center>
					<br></br>
				  </div>
				  
			<div class="card">
			<center>
              <div class="card-header">
                <h4 class="card-title"> Tambahkan Berita</h4>
              </div>
				<div class="card-body">
				  	<nav>
						<a href="form-daftar.php">
						<i class="nc-icon nc-simple-add"></i>
						Tambah Baru
						</a>
					</nav>
				</div>
				</center>
			</div>
				 
				  
				  
				</div>
			</div>
		  
            <div class="card">
              <div class="card-header">
                <center>
				<h4 class="card-title"> Tabel Berita</h4>
				</center>
              </div>
				<div class="card-body">
				  <div class="table-responsive">
					<table border="1" class="table" id="css-serial">
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
					<p>Total: <?php echo mysqli_num_rows($query) ?></p>
				</div>
			  </div>
            </div>
			
          </div>
        </div>
      </div>
	  
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li>
                  <a href="https://www.instagram.com/haydar_ardabell/" target="_blank">Ahmad Haydar Ardabelli</a>
                </li>
                <li>
                  <a href="https://www.instagram.com/amalazza/" target="_blank">Nurul Amala Azza</a>
                </li>
				<li>
				<a>| Powered By Creative Tim |</a>
				</li>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                ©
                <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="fa fa-heart heart"></i> by Al-Barkah Developer Tim
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>

</html>