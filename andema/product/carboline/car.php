<!DOCTYPE html>


<html lang="en">

<head>

    <?php include $_SERVER["DOCUMENT_ROOT"] . "/part/head.php"; ?>
    <title><?php echo "Distributor of International Paint in Aceh and Medan (Sumatera Utara)"; ?></title>
    <meta name="description"
        content="Andema is Distributors agent in Aceh and Sumatera Utara (Medan) based region. This All Catalogue of internatinal paint products from primer , intermediate, finishing and etc.">
    <meta name="author" content="PT. PT. Andema Makmur Sejahtera">
    <meta name="keywords" content="protective coating, protective paints, coating paint,international paint products">
</head>

<body class="body-product">

    <?php
    $page = "product";
    include $_SERVER["DOCUMENT_ROOT"] . "/part/header.php";
    ?>
    <?php
    require $_SERVER["DOCUMENT_ROOT"] ."/part/connect.php";
    include $_SERVER['DOCUMENT_ROOT'].'/part/pagination.php';
    //   query
    
    ?>
    <div class="container wrapped">
        <div class="middle-image">
            <img class="img-responsive" src="banner.jpg" />
        </div>
        <div class="content">
            <div class="sub-nav">
                <ul class="nav nav-pills">
                    <li class="active"><a id="catalog" title="International Paint - All Product"
                            href="/product/">Catalogue</a></li>
                    <li><a id="" title="International Paint" href="/product/international-paint/">International
                            Paint</a></li>
                    <li><a id="" title="Jotun Paint" href="/product/jotun/">Jotun Paint</a></li>
                    <li><a id="color" title="Hempel Paint" href="/product/hempel/">Hempel Paint</a></li>
                    <li><a id="color" title="PPG Coating" href="/product/ppg-coatings/">PPG-Coatings</a></li>
                    <li><a id="color" title="Carboline Paint" href="/product/carboline/">Carboline</a></li>

                </ul>
            </div>
            <hr class="orange" />

            <br>
            <h1>CARBOLINE</h1>
            <div class="row">

                <?php
                $sql = "SELECT nama,deskripsi,feature FROM carboline where deskripsi <> '' ";
                $result = $mysqli->query($sql);
                $rpp = 10; // jumlah record per halaman
                if(!isset($paging)) $paging=1;
                $tcount = $result->num_rows;
                $tpages = ($tcount) ? ceil($tcount/$rpp) : 1; // total pages, last page number
                $count = 0;
                $i = ($paging-1)*$rpp;
                $no_urut = ($paging-1)*$rpp;
                //pagination config end
                $data = $result->fetch_all(MYSQLI_ASSOC);
                while(($count<$rpp) && ($i<$tcount)) {
                    echo "<div class=\"card\">
                        <div class=\"card-header\">{$data[$i]["nama"]}</div>
                        <div class=\"card-body\">
                        <h4 class=\"card-title\">Description</h4>
                        <p class=\"card-text\">{$data[$i]["deskripsi"]}</p>
                        <h4 class=\"card-title\">Features</h4>
                        <p class=\"card-text\">{$data[$i]["feature"]}</p>
                        </div>
                        </div></br>";
                        
                        $i++; 
                        $count++;
					}
				
					$result -> free_result();
					$mysqli -> close();

				?>       
            </div>
            <?php echo paginate_one($paging, $tpages); ?>
        </div><!-- content-->
        <hr style="border-bottom:2px solid #f80;clear:both" />
    </div>

    <?php include $_SERVER["DOCUMENT_ROOT"] . "/part/footer.php"; ?>

    <span id="back-top"><a href="#">Back to top</a></span>



</body>

<html>