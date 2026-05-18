<html>
<head>
	<?php 

	include ($_SERVER['DOCUMENT_ROOT']."/part/head.php");
	
	?>
	<title>Our Gallery - PT. Andema Makmur Sejahtera</title>
	<meta name="author" content="PT. Andema Makmur Sejahtera">
	<meta name="keywords" content="Galery photos of our works, material, and equipment we use during the jobs.">
	<meta name="keywords" content="PT. Andema Makmur Sejahtera">
	<link href="/assets/css/jquery.bsPhotoGallery.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
    <script src="/assets/js/jquery-1.10.2.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="/assets/js/jquery.bsPhotoGallery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
	<script>
      $(document).ready(function(){
        $('ul.first').bsPhotoGallery({
          "classes" : "col-lg-2 col-md-4 col-sm-3 col-xs-4 col-xxs-12"
          // "hasModal" : true,
          // "fullHeight" : false
        });
      });
      var image=$(this).find('img').attr("src");
      console.log(image);
    </script>
	<style>
    @import url(https://fonts.googleapis.com/css?family=Bree+Serif);

      body {
        background:#ebebeb;
      }
      ul {
          padding:0 0 0 0;
          margin:0 0 40px 0;
      }
      ul li {
          list-style:none;
          margin-bottom:10px;
      }

    .text {
      /*font-family: 'Bree Serif';*/
      color:#666;
      font-size:11px;
      margin-bottom:10px;
      padding:12px;
      background:#fff;
    }
	.justify-content-center{
	justify-content:center;
}

.thumbnail{
	justify-content:center;
	
}

.thumbnail img{
	flex:none;
    width: 95%;
    object-fit: cover; // here
	
}

.col-sm-2,.col-xs-6{
	padding-right:5px;
	padding-left:5px;
}
  </style>
</head>
<body id="body-galery">
	<?php 
	$page='galery';
	include ($_SERVER['DOCUMENT_ROOT']."/part/header.php");
    include ($_SERVER['DOCUMENT_ROOT']."/part/connect.php");
    $sql =  "SELECT * FROM galery ORDER BY tanggal desc";
    $result = $mysqli -> query($sql);
    $tcount = $result->num_rows;
    
	?>
	<div class="container">
    <div class="row" style="margin-bottom:200px;">

    </div>
	<h1> Galery Video</h1>

	<!--galery gambar -->
	<div class="row justify-content-center">
	<div class="col-sm-12">
                <div class="row">
                    

					<div class="thumb col-md-2 col-sm-3 col-xs-12">
                        <a href="https://youtu.be/BdTbPdXGRkc" data-toggle="lightbox" data-gallery="youtubevideos" class=" thumbnail">
                            <img src="/assets/thumb/1.png" class="img-fluid">
                        </a>
					</div>
					<div class="thumb col-md-2 col-sm-3 col-xs-12">
					<a href="https://youtu.be/9q3dGE5zwQQ" data-toggle="lightbox" data-gallery="youtubevideos" class=" thumbnail">
						<img src="/assets/thumb/2.jpg" class="img-fluid">
					</a>
					</div>
					<div class="thumb col-md-2 col-sm-3 col-xs-12">
					<a href="https://youtu.be/q1SBsKdbUbI" data-toggle="lightbox" data-gallery="youtubevideos" class=" thumbnail">
						<img src="/assets/thumb/3.jpg" class="img-fluid">
					</a>
					</div>
					<div class="thumb col-md-2 col-sm-3 col-xs-12">
					<a href="https://youtu.be/E8e4lJRGwIE" data-toggle="lightbox" data-gallery="youtubevideos" class=" thumbnail">
						<img src="/assets/thumb/4.jpg" class="img-fluid">
					</a>
					</div>
					<div class="thumb col-md-2 col-sm-3 col-xs-12">
					<a href="https://youtu.be/4L0iCOaZWqI" data-toggle="lightbox" data-gallery="youtubevideos" class=" thumbnail">
						<img src="/assets/thumb/5.jpg" class="img-fluid">
					</a>
					</div>
					
					
				</div> 
				<div class="row">
				
				
				</div>
			
	</div>
</div>
	
	
	
	<h1> Galery Picture</h1>
	<!-- galery gambar -->
	<div class="galery">
    <ul class="row first">
        
        <?php
        $pekerjaan='lokasi';
        $count=0;
        $data = $result->fetch_all(MYSQLI_ASSOC);
        while($count<$tcount){
            $foto=explode(".",$data[$count]['nama_foto'])[0];
            echo "<li>
                <img alt=".$data[$count]['pekerjaan']." src=/assets/galary/thumb/".$foto."_thumb.jpg data-bsp-large-src=/assets/galary/".$foto.".jpg>
                <div class='text'> <strong>[".$data[$count]['tanggal']."]</strong>".$data[$count]['deskripsi']." (".$data[$count]['lokasi'].")</div>
            </li>";
        $count++;
        };
		?>
    </ul>
    
    <h1> Galery KCC Paints</h1>
<div class="galery">
  <ul class="row kcc">
    <?php
    // folder tempat gambar KCC Paints disimpan
    $dir = $_SERVER['DOCUMENT_ROOT']."/assets/galary/kcc/";
    $thumbDir = $_SERVER['DOCUMENT_ROOT']."/assets/galary/kcc/thumb/";

    // ambil semua file gambar dengan ekstensi jpg/png/jpeg
    $files = glob($dir . "*.{jpg,jpeg,png,JPG,PNG,JPEG}", GLOB_BRACE);

    if (!empty($files)) {
        foreach ($files as $filePath) {
            // ambil nama file tanpa path
            $filename = basename($filePath);
            $namaFile = pathinfo($filename, PATHINFO_FILENAME);

            // path untuk thumbnail dan gambar besar
            $thumbPath = "/assets/galary/kcc/thumb/" . $namaFile . "_thumb.jpg";
            $largePath = "/assets/galary/kcc/" . $filename;

            echo "<li>
                    <img alt='KCC Paints' src='$thumbPath' data-bsp-large-src='$largePath'>
                    <div class='text'><strong>KCC Paints</strong> - $namaFile</div>
                  </li>";
        }
    } else {
        echo "<p style='padding:10px;'>Belum ada foto KCC Paints di folder.</p>";
    }
    ?>
  </ul>
</div>
    
	</div> <!-- end galery -->
	</div>
<!-- /container -->

<script>
	$(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });

     
</script>
        
</body>

</html>
