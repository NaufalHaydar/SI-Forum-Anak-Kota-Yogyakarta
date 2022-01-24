<?php 
                    include 'koneksi.php';
                    
				?>
				
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Forum Anak Kota Yogyakarta</title>

    <link href="style.css" rel="stylesheet">

    <link href="css/responsive/responsive.css" rel="stylesheet">

</head>

<body>

    <div class="caviar-search-form d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-close-btn" id="closeBtn">
                        <i class="pe-7s-close-circle" aria-hidden="true"></i>
                    </div>
                    <form action="#" method="get">
                        <input type="search" name="caviarSearch" id="search" placeholder="Search Your Favourite Dish ...">
                        <input type="submit" class="d-none" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <header class="header_area" id="header">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg align-items-center">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#caviarNav" aria-controls="caviarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                        <div class="collapse navbar-collapse" id="caviarNav">
                            <ul class="navbar-nav ml-auto" id="caviarMenu">
                                <li class="nav-item ">
                                    <a class="nav-link" href="home.php">Home </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="forum.php">Data Forum</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="anggota.php">Data Anggota</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Logout</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="laporanforum.php">Laporan Forum</a>
                                        <a class="dropdown-item" href="laporananggota.php">Laporan Anggota</a>
                                    </div>
                                </li>
                            </ul>
                            <div class="caviar-search-btn">
                                <a id="search-btn" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <section class="caviar-hero-area" id="home">
        <div class="caviar-hero-slides owl-carousel">
            <div style="background-image: url(img/papanhitam.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-11 col-md-6 col-lg-4">
                            <div class="hero-content">
                                <h2>FAKTA</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="caviar-about-us-area section-padding-100" id="dataforumanak">
	<div class="container py-lg-3 py-sm-1">
		<form method="post" action="prosesforum.php">
			<form class="needs-validation" novalidate>
            <div class="col-md-4 mb-3">
      					<label for="validationTooltip01">ID</label>
      					<input type="text" class="form-control" id="validationTooltip01" placeholder="..." name="id">
    		</div>
			<div class="col-md-4 mb-3">
      					<label for="validationTooltip01">Nama</label>
      					<input type="text" class="form-control" id="validationTooltip01" placeholder="..." name="nama">
    		</div>
            <div class="col-md-4 mb-3">
      					<label for="validationTooltip01">Tingkatan</label>
      					<input type="text" class="form-control" id="validationTooltip01" placeholder="..." name="tingkatan">
    		</div>
            <div class="col-md-4 mb-3">
      					<label for="validationTooltip01">Jumlah Anggota</label>
      					<input type="text" class="form-control" id="validationTooltip01" placeholder="..." name="jumlah_anggota">
    		</div>
            <div class="col-md-4 mb-3">
      					<label for="validationTooltip01">Deskripsi</label>
      					<input type="text" class="form-control" id="validationTooltip01" placeholder="..." name="deskripsi">
    		</div>
			<div>
            <button class="btn btn-primary" type="submit">Submit form</button>
			<div>
			</form>
		</div>
    </section>
 
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
  
    <script src="js/bootstrap/popper.min.js"></script>

    <script src="js/bootstrap/bootstrap.min.js"></script>

    <script src="js/others/plugins.js"></script>

    <script src="js/active.js"></script>
</body>