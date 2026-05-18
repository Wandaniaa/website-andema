<?php
$page_1 = ($page == 'home' ? 'active':'');
$page_2 = ($page == 'about' ? 'class="active"':'');
$page_3 = ($page == 'project' ? 'class="active"':'');
$page_4 = ($page == 'product' ? 'class="active"':'');
$page_5 = ($page == 'services' ? 'class="active"':'');
$page_6 = ($page == 'galery' ? 'class="active"':'');
$page_7 = ($page == 'contact' ? 'class="active"':'');
?>

<div>
			<div class="page-header">
				<div class="header-image">
					<img alt="andema banner logo" class="img-responsive" src="/assets/images/banner.png"/>
					
						<!-- <form class="navbar-form ">
							<div class="form-group">
							<input type="text" class="form-control" placeholder="Search">
							</div>
							<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
						</form> -->
					
						<!--
						<div class="form-group">	
						
						<gcse:search></gcse:search>
					</div>-->
					
					

				</div>
			</div>
				<!-- PRIMARY NAV -->
			<nav class="navbar navbar-default">
				
					<div id="main-nav"> 
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-content" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						 </button>
							<a class="navbar-brand <?php echo $page_1; ?>" href="/"><i class="fa-solid fa-house"></i></a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="navbar-content">
							<ul class="nav navbar-nav">
								<li <?php echo $page_2; ?>><a href="/about/">About Us </a></li>
								<li <?php echo $page_3; ?>><a href="/project/">Project</a></li>
								<li <?php echo $page_4;?>><a href="/product/">Product</a></li>
								<li <?php echo $page_5;?>><a href="/services/">Services</a></li>
								<li <?php echo $page_6;?>><a href="/galery/">Galery</a></li>
								<li <?php echo $page_7;?>><a href="/contact/">Contact Us</a></li>
							<li><a href="/blog/">Blog</a></li>
							   
							
							</ul>
						
							
						</div>
						<!-- /.navbar-collapse -->
					</div>
				
			</nav> <!--END PRIMARY NAV-->

</div>