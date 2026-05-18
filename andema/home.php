<!DOCTYPE html>
<html lang="en">

<head>
<style>
.col-lg-4:hover img {
    transform: scale(1.08);
}
.col-lg-4:hover {
    transform: translateY(-8px);
    box-shadow: 0 10px 22px rgba(0, 0, 0, 0.12);
}

.project-card {
    background: #fff;
    border-radius: 16px;
    box-shadow: 0 6px 20px rgba(0,0,0,0.08);
    overflow: hidden;
    max-width: 340px;
    transition: all 0.35s ease;
  }

  .project-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 28px rgba(0,0,0,0.12);
  }

  .project-card .img-wrap {
    overflow: hidden;
  }

  .project-card img {
    width: 100%;
    height: 220px;
    object-fit: cover;
    transition: transform 0.4s ease;
  }

  .project-card:hover img {
    transform: scale(1.06);
  }

  .project-card .content {
    padding: 22px;
    text-align: center;
  }

  .project-card h3 {
    color: #003145;
    font-size: 20px;
    font-weight: 700;
    margin-bottom: 10px;
  }

  .project-card p {
    color: #555;
    font-size: 15px;
    line-height: 1.6;
  }

  /* Responsive */
  @media (max-width: 768px) {
    .project-card {
      max-width: 100%;
    }
    .project-card img {
      height: 200px;
    }
  }
</style>

	<?php
	$title="PT. Andema Makmur Sejahtera - Hempel and KCC Paint Distributor";
	include "part/head.php";
	echo "<title>$title</title>";
	?>
	<meta name="description" content="PT. Andema Makmur is Hempel Paint and KCC Paint Distributor in aceh and sumatera utara (medan), Coating Specialties, and also Active in 
	EPC since 2002.">
	<meta name='keyword' content="andema, protective coating, Hempel and KCC paint, coating paint">
	<script src="/assets/js/scroll.js"></script>
	 <link href="/assets/css/full-slider.css" rel="stylesheet" type="text/css">
 </head>

<body id="body-home">
		<?php
		$page="home";
		include "part/header.php";?>
	      <!-- Full Page Image Background Carousel Header -->
		<div id="myCarousel" class="carousel slide">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			  <li data-target="#myCarousel" data-slide-to="3"></li>
			  <li data-target="#myCarousel" data-slide-to="4"></li>
			   <li data-target="#myCarousel" data-slide-to="5"></li>
			</ol>

			<!-- Wrapper for Slides -->
			<div class="carousel-inner">
				<div class="item active">
					<!-- Set the first background image using inline CSS below. -->
					<div class="fill" style="background-image:url('/assets/images/slide1.jpg');"></div>
					<div class="carousel-caption">
						<!--<h2></h2>-->
					</div>
				</div>
				<div class="item">
					<!-- Set the second background image using inline CSS below. -->
					<div class="fill" style="background-image:url('/assets/images/slide2.jpg');"></div>
					<div class="carousel-caption">
						<!--<h2></h2>-->
					</div>
				</div>
				<div class="item">
					<!-- Set the third background image using inline CSS below. -->
					<div class="fill" style="background-image:url('/assets/images/slide3.jpg');"></div>
					<div class="carousel-caption">
						<!--<h2></h2>-->
					</div>
				</div>
				<div class="item">
					<!-- Set the third background image using inline CSS below. -->
					<div class="fill" style="background-image:url('/assets/images/slide4.jpg');"></div>
					<div class="carousel-caption">
						<!--<h2></h2>-->
					</div>
				</div>
				<div class="item">
					<!-- Set the third background image using inline CSS below. -->
					<div class="fill" style="background-image:url('/assets/images/slide5.jpg');"></div>
					<div class="carousel-caption">
						<!--<h2></h2>-->
					</div>
				</div>
				<div class="item">
					<div class="fill" style="background-image:url('/assets/images/slide6.jpg');"></div>
					<div class="carousel-caption">
					</div>
				</div>
			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="icon-prev"></span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="icon-next"></span>
			</a>
		</div>
    
<section style="padding: 80px 0 40px 0; background-color: #fff;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px; text-align: center;">
        
        <!-- TITLE -->
        <div style="position: relative; display: inline-block; margin-bottom: 60px;">
            <h2 style="font-size: 36px; font-weight: 800; color: #003145; background-color: #fff; padding: 10px 40px; border: 4px solid #d50000; display: inline-block; z-index: 2; position: relative;">
                Discover Our Company
            </h2>
            <div style="position: absolute; top: 50%; left: 0; width: 100%; height: 4px; background-color: #d50000; transform: translateY(-50%); z-index: 1;"></div>
        </div>

        <!-- INTRO -->
        <div style="max-width: 900px; margin: 0 auto; text-align: justify; line-height: 1.9; color: #444;">
            <h1 style="color: #003145; font-weight: 700; font-size: 30px; text-align: center; margin-bottom: 25px;">
                PT. ANDEMA MAKMUR SEJAHTERA
            </h1>

            <p style="font-size: 17px; margin-bottom: 20px;">
                PT. Andema Makmur Sejahtera is a trusted distributor of <strong>HEMPEL</strong> and <strong>KCC Paints</strong>, 
                specializing in Paint Specialties, Engineering Procurement & Construction dan General Contractor with the range and extensive network covering the entire territory of Indonesia including the eastern part of Indonesia, including Maluku, North Maluku, Papua, West Papua and its surroundings
            </p>

            <p style="font-size: 17px; margin-bottom: 20px;">
               We are committed to providing an excellent service and to delivering a good quality products at a competitive price.
            </p>

            <blockquote style="font-style: italic; color: #777; background: transparent; padding: 15px 0; margin-top: 30px; font-size: 16px; line-height: 1.8;">
    “Our philosophy for excellent services is to provide a positive experience for each customer by giving efficient, accurate and prompt service, by listening to and understanding the client's needs, by meeting or exceeding these needs and by meeting our commitments and promises.”
</blockquote>
        </div>
    </div>
</section>


<section style="padding: 40px 0; background-color: #f7f9fc;">
  <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
    
    <!-- Section Title -->
    <div style="text-align: center; margin-bottom: 50px;">
      <h2 style="font-size: 34px; font-weight: 800; color: #003145; margin-bottom: 12px;">Latest Projects</h2>
      <div style="width: 80px; height: 4px; background: #d50000; margin: 0 auto; border-radius: 2px;"></div>
    </div>

    <!-- Project Cards -->
    <div class="row" style="display: flex; flex-wrap: wrap; justify-content: center; gap: 40px;">
      
      <!-- CARD -->
      <div class="project-card">
        <div class="img-wrap">
          <img src="/assets/images/painting_pim.jpg" alt="PT Pupuk Iskandar Muda">
        </div>
        <div class="content">
          <h3>PT. Pupuk Iskandar Muda</h3>
          <p>Pipe Painting (NPK Chemical Plant)</p>
        </div>
      </div>

      <div class="project-card">
        <div class="img-wrap">
          <img src="/assets/images/belawan.jpeg" alt="WIKA-HUTAMA.JO Project">
        </div>
        <div class="content">
          <h3>WIKA-HUTAMA.JO</h3>
          <p>Dock Reclamation, Container Yard, and Utilities Terminal Belawan Phase 2</p>
        </div>
      </div>

      <div class="project-card">
        <div class="img-wrap">
          <img src="/assets/images/alue.jpg" alt="JGC Indonesia Project">
        </div>
        <div class="content">
          <h3>JGC Indonesia</h3>
          <p>Liquid Coating Underground Pipe</p>
        </div>
      </div>
    </div>
  </div>
</section>



	
		               
        <!-- FOOTER -->
	</div>
	<h1 style="text-align:center;width:100%;background-color:#003145;color:#fff"> Our Client</h1>
	 <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 980px; height: 100px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 980px; height: 100px; overflow: hidden;">
            <div>
                <img alt="Our client arun" data-u="image" src="/assets/img/arun-lng.jpg" />
            </div>
            <div style="display: none;">
                <img alt="Our client pupuk iskandar muda" data-u="image" src="/assets/img/pim.gif" />
            </div>
            <div style="display: none;">
                <img alt="our client medco energy" data-u="image" src="/assets/img/medco.jpg" />
            </div>
            <div style="display: none;">
                <img alt="our client exxon mobil" data-u="image" src="/assets/img/exxon.png" />
            </div>
            <div style="display: none;">
                <img alt="our client semen andalas" data-u="image" src="/assets/img/andalas.png" />
            </div>
            <div style="display: none;">
                <img alt="our client indonesia ferry" data-u="image" src="/assets/img/asdp.png" />
            </div>
            <div style="display: none;">
                <img alt="our client mifa bersaudara" data-u="image" src="/assets/img/mifa.png" />
            </div>
            <div style="display: none;">
                <img alt="our client synohydro" data-u="image" src="/assets/img/sinohydro.png" />
            </div>
            <a data-u="any" href="http://www.jssor.com" style="display:none">Scrolling Logo Thumbnail Slider</a>
            <div style="display: none;">
                <img alt="our client huadian energy company" data-u="image" src="/assets/img/huadian.gif" />
            </div>
            <div style="display: none;">
                <img alt="our client Welthungerhilfe" data-u="image" src="/assets/img/welt.jpg" />
            </div>
            <div style="display: none;">
                <img alt="our client pertamina" data-u="image" src="/assets/img/pertamina.jpg" />
            </div>
            <div style="display: none;">
                <img alt="our client pln" data-u="image" src="/assets/img/pln.jpg" />
            </div>
            <div style="display: none;">
                <img alt="our client salamander energy" data-u="image" src="/assets/img/salamander.png" />
            </div>
            <div style="display: none;">
                <img alt="our client dow agrosciences" data-u="image" src="/assets/img/dow.png" />
            </div>
            
        </div>
    </div>
	
	
<?php include "part/footer.php";?>
		
	
	<script type="text/javascript">
        jssor_1_slider_init();
    </script>
    <!-- #endregion Jssor Slider End -->

	<!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>



    <!-- Script to Activate the Carousel -->

</body>

</html>








