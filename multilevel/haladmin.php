<?php
include('cekadmin.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>

		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin DashBoard</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">

                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

            </button>
            <a class="navbar-brand" href="#">
				<?php
				$nama = $_SESSION['username'];
                echo "<img style='height: 30px; margin-top: -5px;' src='assets/img/icon/$nama.png' class='img-circle'>";
				?> 
				<div class="pull-left">
				<p style="margin: -25px 40px 10px;">Welcome <i><?php echo $_SESSION['username']; ?></i></p>
				</div>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
				<li></i></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
		
<div class="container" style="margin-top:40px">
  <h2>Kumpulan Tutorial</h2>
  <a href = "http://ilmu-detil.blogspot.co.id/2016/03/cara-update-android-studio-ke-versi.html" class="list-group-item">
   Update Android Studi ke versi terbaru
</a>

<a href = "http://ilmu-detil.blogspot.co.id/2016/03/contoh-php-jquery-ajax-dropdown-list.html" class = "list-group-item">Jquery Ajax Dropdown List</a>
<a href = "http://ilmu-detil.blogspot.co.id/2016/02/php-deteksi-browser-dan-ip-serta-os.html" class = "list-group-item">Deteksi Browser, IP,OS beserta dengan Iconnya </a>
<a href = "http://ilmu-detil.blogspot.co.id/2016/02/php-format-tanggal-indonesia-dari-database.html" class = "list-group-item">Php Format Tanggal Bahasa Indonesia</a>
<a href = "http://ilmu-detil.blogspot.co.id/2016/01/tutorial-searching-dengan-php-mysql.html" class = "list-group-item">Tutorial Searching dengan Php MySQL</a>
<a href = "http://ilmu-detil.blogspot.co.id/2016/02/cara-membuat-image-slideshow-pada-web.html" class = "list-group-item">Membuat Image Slidehshow dengan Bootstrap</a>
<a href = "http://ilmu-detil.blogspot.co.id/2016/01/membuat-bagan-organisasi-dengan-jquery.html" class = "list-group-item">Membuat Bagan Organisasi dengan Jquery</a>
<a href = "http://ilmu-detil.blogspot.co.id/2016/01/fungsi-php-untuk-cuplikan-berita.html" class = "list-group-item">Membuat Cuplikan Berita dengan Php</a>
</div>				

</body>
</html>