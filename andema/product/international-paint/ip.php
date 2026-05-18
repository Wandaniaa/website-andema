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
    //   query
     
    $sql = "SELECT nama, tipe FROM produk";
    $result = $mysqli->query($sql);
    $lining = [];
    $primer = [];
    $inter = [];
    $finish = [];
    $temp = [];
    $tolerant = [];
    $subsea = [];
    $struct = [];
    $fire = [];
    $primerfin = [];
    $dt = $result->fetch_all(MYSQLI_NUM);
    $c = 0;
    while ($c < count($dt)) {
        if ($dt[$c][1] == "Primer") {
            array_push($primer, $dt[$c][0]);
        } elseif ($dt[$c][1] == "Intermediate") {
            array_push($inter, $dt[$c][0]);
        } elseif ($dt[$c][1] == "Finish") {
            array_push($finish, $dt[$c][0]);
        } elseif ($dt[$c][1] == "Primer-Finish") {
            array_push($primerfin, $dt[$c][0]);
        } elseif ($dt[$c][1] == "Surface Tolerant") {
            array_push($tolerant, $dt[$c][0]);
        } elseif ($dt[$c][1] == "Lining") {
            array_push($lining, $dt[$c][0]);
        } elseif ($dt[$c][1] == "Structural Concrete: Repair and Protection") {
            array_push($struct, $dt[$c][0]);
        } elseif ($dt[$c][1] == "Subsea, Abrasion Resistant and Splashzone") {
            array_push($subsea, $dt[$c][0]);
        } elseif ($dt[$c][1] == "Passive Fire Protection") {
            array_push($fire, $dt[$c][0]);
        } elseif ($dt[$c][1] == "Temperature Resistance") {
            array_push($temp, $dt[$c][0]);
        }
        $c++;
    }
    $segments =array($primer,$inter,$finish,$primerfin,$tolerant, $fire, $temp,$lining,$struct,$subsea);
    $name_sg=array('null_value','primer','intermediate','finish','primer-finish','tolerant','passive-fire','temperature','lining','structural','subsea')
    ?>
    <div class="container wrapped">
        <div class="middle-image">
            <img class="img-responsive" src="/assets/images/product.jpg" />
        </div>
        <div class="content">
            <div class="sub-nav">
            <ul class="nav nav-pills">
                    <li class="active"><a id="catalog" title="International Paint - All Product" href="#">Catalogue</a></li>
                    <li><a id="" title="International Paint" href="/product/international-paint/">International Paint</a></li>
                    <!--<li><a id="" title="Jotun Paint" href="/product/jotun/">Jotun Paint</a></li>-->
                    <li><a id="color" title="Hempel Paint" href="/product/hempel/">Hempel Paint</a></li>
                    <li><a id="color" title="PPG Coating" href="/product/ppg-coatings/">PPG-Coatings</a></li>
                    <!--<li><a id="color" title="Carboline Paint" href="/product/carboline/">Carboline</a></li>-->
                    <li><a id="color" title="Carboline Paint" href="/product/carboline/">KCC Paint</a></li>

                </ul>
            </div>
            <hr class="orange" />
            <br>
            <h1>INTERNATIONAL PAINT</h1>


            <div class="row">

                <?php
               
                $count_sq=0;
                foreach ($segments as $sq){
                    $count_sq++;
          
                
                ?>
                
                <div class="col-6 col-lg-4">
                    
                    <h2><?php echo strtoupper($name_sg[$count_sq])?>
                    <a class="btn btn-secondary" role="button" data-toggle="collapse"
                        data-target=<?php echo "#collapse".$count_sq?> aria-expanded="false" aria-controls=<?php echo "collapse".$count_sq?> >
                        View All »
                    </a>
                    </h2>
                    <hr class="orange">
                        <div class="list-group text-trimmer">
                            <?php for ($c=0;$c<5;$c++) {
                                    $url = implode("-", explode(" ", $sq[$c]));
                                    if (strlen($sq[$c])>30){
                                        $str1=substr($sq[$c], 0, 30).'...';
                                    }else{
                                        $str1=$sq[$c];
                                    }
                                    echo "<a href=/product/international-paint/$url class='list-group-item'>$str1</a>";
                                } ?>
                                <div class="collapse" id=<?php echo "collapse".$count_sq?>>
                                   
                                    <?php for ($c=5;$c<count($sq);$c++) {
                                                 if (strlen($sq[$c])>30){
                                                    $str2=substr($sq[$c], 0, 30).'...';
                                                }else{
                                                    $str2=$sq[$c];
                                                }
                                                $url = implode("-", explode(" ", $sq[$c]));
                                                echo "<a href='$name_sg[$count_sq]/$url' class='list-group-item'>$str2</a>";
                                            }
                                         ?>
                                </div>
                        </div>
                </div>
                <?php }?>
            </div>
        </div><!-- content-->
        <hr style="border-bottom:2px solid #f80;clear:both" />
    </div>

    <?php include $_SERVER["DOCUMENT_ROOT"] . "/part/footer.php"; ?>

    <span id="back-top"><a href="#">Back to top</a></span>



</body>

<html>