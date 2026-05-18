<!DOCTYPE html>


<html lang="en">

<head>
	<?php
		include ($_SERVER['DOCUMENT_ROOT']."/part/head.php");
	?>
	<title> Our Sevices - PT. Andema Makmur Sejahtera</title>
	<meta name="author" content="PT. Andema Makmur Sejahtera">
	<meta name="keywords" content="all cover ranges of our service that we offer">
	<meta name="keywords" content="PT. Andema Makmur Sejahtera">
</head>

<style>
.services-section {
    max-width: 1200px;
    margin: 0 auto;
    padding: 60px 20px;
    font-family: 'Poppins', sans-serif;
    background: #f9fafb;
}

.middle-image img {
    width: 100%;
    border-radius: 12px;
    margin-bottom: 40px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.08);
}

.section-title {
    text-align: center;
    margin-bottom: 50px;
}

.section-title h2 {
    font-size: 2.8rem;
    color: #1a3d7c;
    font-weight: 700;
    margin-bottom: 10px;
}

.section-title .subtitle {
    font-size: 1.1rem;
    color: #555;
    margin-top: 5px;
}

.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
}

.service-card {
    position: relative;
    overflow: hidden;
    border-radius: 16px;
    box-shadow: 0 6px 15px rgba(0,0,0,0.08);
    transition: transform 0.3s, box-shadow 0.3s;
    cursor: pointer;
    background: #fff;
}

.service-card img {
    width: 100%;
    height: 220px;
    object-fit: cover;
    display: block;
    border-top-left-radius: 16px;
    border-top-right-radius: 16px;
}

.card-text {
    padding: 15px;
    text-align: center;
    background-color: #1a3d7c; /* corporate blue */
    color: #fff;
    border-bottom-left-radius: 16px;
    border-bottom-right-radius: 16px;
}

.card-text h4 {
    margin: 0;
    font-size: 1.2rem;
    font-weight: 600;
}

.service-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 25px rgba(0,0,0,0.12);
}
</style>

<body id="body-services">
	
	<?php 
	$page='services';
	include ($_SERVER['DOCUMENT_ROOT']."/part/header.php");
	?>
	

  <div class="services-section">
    <div class="middle-image">
        <img src="/assets/images/service-page.jpg" alt="Services Banner">
    </div>

    <div class="section-title">
        <h1>Our Services</h1>
    </div>

    <div class="services-grid">
        <div class="service-card">
            <img src="/assets/images/paint.jpg" alt="Paint Specialist">
            <div class="card-text">
                <h4>Paint Specialist</h4>
            </div>
        </div>

        <div class="service-card">
            <img src="/assets/images/epc.jpg" alt="EPC Project">
            <div class="card-text">
                <h4>EPC Project</h4>
            </div>
        </div>

        <div class="service-card">
            <img src="/assets/images/health.jpg" alt="Clinic/ Health Services">
            <div class="card-text">
                <h4>Clinic/ Health Services</h4>
            </div>
        </div>

        <div class="service-card">
            <img src="/assets/images/property.jpg" alt="Property Developer">
            <div class="card-text">
                <h4>Property Developer</h4>
            </div>
        </div>

        <div class="service-card">
            <img src="/assets/images/guard.jpg" alt="Safe Guard Services">
            <div class="card-text">
                <h4>Safe Guard Services</h4>
            </div>
        </div>

        <div class="service-card">
            <img src="/assets/images/welding.jpg" alt="Welding Specialist">
            <div class="card-text">
                <h4>Welding Specialist</h4>
            </div>
        </div>

        <div class="service-card">
            <img src="/assets/images/manpower.jpg" alt="Manpower National & Expert">
            <div class="card-text">
                <h4>Manpower National & Expert</h4>
            </div>
        </div>

        <div class="service-card">
            <img src="/assets/images/safety.jpg" alt="Safety Equipment Provider">
            <div class="card-text">
                <h4>Safety Equipment Provider</h4>
            </div>
        </div>
    </div>
</div>
	
	<?php include ($_SERVER['DOCUMENT_ROOT']."/part/footer.php");?>
    
	<span id="back-top"><a href="#">Back to top</a></span>
	
 
</body>

</html>