<!DOCTYPE html>


<html lang="en">

<head>
<?php
include ($_SERVER['DOCUMENT_ROOT']."/part/head.php");
?>
<title> Board Management - PT. Andema Makmur Sejahtera </title>
<meta name="author" content="PT. Andema Makmur Sejahtera">
<meta name="description" content="PT. Andema Makmur Sejahtera Management board hold ">
<meta name="keywords" content="PT. Andema Makmur Sejahtera">
</head>

<body class="body-about">
	<?php 
	$page='about';
	include ($_SERVER['DOCUMENT_ROOT']."/part/header.php");
	?>
	<div class="container wrapped">	
		<div class="middle-image">
			<img class="img-responsive" src="/assets/images/about-page.jpg"/>
						
		</div>
		
			
	
		<article>
		
			<?php
				$link="board";
				include ($_SERVER['DOCUMENT_ROOT']."/part/nav_about.php");
			?>
			<hr class="orange"/>
			
		
			<div class="collapse in" id="content-struktur">
				
				<h1> Management Board</h1>
				
				<img class="img-responsive" src="/assets/images/struktur.png"/>
				
			</div> 
			
			</article> <!-- article -->
		</div>
	
	<?php include ($_SERVER['DOCUMENT_ROOT']."/part/footer.php");?>
    
	<span id="back-top"><a href="#">Back to top</a></span>
	
</body>

</html>