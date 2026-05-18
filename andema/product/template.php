<!DOCTYPE html>

<?php 
        require $_SERVER["DOCUMENT_ROOT"] ."/part/connect.php";
        
        $productName=str_replace('-',' ',ucfirst($name));
        $sql ="SELECT * FROM produk Where nama='$productName'"; 
		$res=$mysqli->query($sql);
		$produkFetchAll=$res->fetch_all(MYSQLI_ASSOC);
		$produk=$produkFetchAll[0];
		// $doc=[$produk["Pds"],$produk["Sds"],$produk["Ads"],$produk["Brochure"],$produk["Guide"]];
		// $doc_name=["Product Datasheet", "Safety Datasheet (MSDS)", "Safety Advice Sheet","Brochure","Application Guide"];
		$tipeProduk=$produk["tipe"];
		// if ($tipeProduk=="Linings" or $tipeProduk =="HCL"){
		// 	$sql_link="select Name from product where Tipe='Linings' or Tipe='HCL'";
		// }else{
		// 	$sql_link="select Name from product where Tipe='$tipeProduk'";
		// }
		
		$sql_link="select nama from produk where tipe='$tipeProduk' limit 10";
		$result=$mysqli->query($sql_link);
		$link=array();
		$resultFetchNUm=$result->fetch_all(MYSQLI_ASSOC);
		foreach($resultFetchNUm as $lk){
			array_push($link,$lk['nama']);
		};
		?>


<html lang="en">

<head>

    <?php include ($_SERVER['DOCUMENT_ROOT']."/part/head.php");?>
    <title><?php echo $produk['nama']." - Andema"; ?> </title>
    <meta name="description" content="<?php echo $produk['nama']." is ".explode(".",$produk['deskripsi'])[0];?>">
    <meta name="author" content="PT. Andema Makmur Sejahtera">
    <meta name="keywords" content="Hempel and KCC Paint,international paint,coating,protective coating,<?php echo $produk["nama"];?>,<?php echo $produk["nama"];?> product datasheet,<?php echo $produk["nama"];?> msds>
</head>
<body class=" body-product">


    <?php 
	
	$page="product";
	include ($_SERVER['DOCUMENT_ROOT']."/part/header.php");
	?>
    <div class="container wrapped">
        <div class="middle-image">
            <img class="img-responsive" src="/assets/images/product.jpg" />
        </div>
        <div class="content">

            <div class="col-12 col-md-9">
                <h1 style="color:#0b0b8b;"> <strong><?php echo $produk["nama"];?></strong> </h1>
                <p class="subtext"><small><?php echo $produk["chemical"];?> </small></p>
                <div class="row">
                    <div class="col-12 description">
                        <strong>Product Description</strong>
                        <p><?php echo $produk["deskripsi"];?></p>
                    </div>
                    <div class="col-6 col-md-4">
                        <img src="paint.jpg"/>
                    </div><!-- product picture -->
                    <div class="col-6 col-md-8 ps-3">
                        <div class="characteristic">
                            <?php echo base64_decode($produk['characteristic'])?>
                        </div>


                    </div>
                </div><!-- row -->

            </div>
            <!--/span-->

            <div class="col-6 col-md-3 " id="sidebar">
                <p style="color:#0b0b8b;"> <strong>Product <?php echo $tipeProduk;?> List </strong></p>
                <hr class="red">
                <div class="list-group">
                    <?php 
		  foreach($link as $lk){
			  if($lk==$produk['nama']){
				$url=implode("-",explode(" ",$lk));
				echo "<a href='$url' class='list-group-item active'>$lk</a>";
			  }else{
				  $url=implode("-",explode(" ",$lk));
				echo "<a href='$url' class='list-group-item'>$lk</a>";
			  }
		  }
			?>
                </div>
            </div>
            <!--/span-->
        </div>
    </div>
    </div><!-- cointainer wrapped -->
    <?php include ($_SERVER['DOCUMENT_ROOT']."/part/footer.php");?>

    <span id="back-top"><a href="#">Back to top</a></span>

    </body>

</html>