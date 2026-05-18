<!DOCTYPE html>


<html lang="en">

<head>
<?php 

include ($_SERVER['DOCUMENT_ROOT']."/part/head.php");
?>
<title> Our Project - PT. Andema Makmur Sejahtera </title>
<meta name="author" content="PT. Andema Makmur Sejahtera">
<meta name="keywords" content="List all the project and our work in EPC services that has been done since we start to open business">
<meta name="keywords" content="PT. Andema Makmur Sejahtera">
</head>

<body class="body-project" min-height="2000 px">
	<?php 
	$page="project";
	include ($_SERVER['DOCUMENT_ROOT']."/part/header.php");
	?>
	<?php 
//        includekan fungsi paginasi
        include $_SERVER['DOCUMENT_ROOT'].'/part/pagination.php';
//        koneksi ke database
		include ($_SERVER['DOCUMENT_ROOT']."/part/connect.php");
		$sql =  "SELECT * FROM proyeks";
		$result = $mysqli -> query($sql);
		
		
//        query
        //pagination config start
        $rpp = 10; // jumlah record per halaman
		if(!isset($paging)) $paging=1;

        $tcount = $result->num_rows;
        $tpages = ($tcount) ? ceil($tcount/$rpp) : 1; // total pages, last page number
        $count = 0;
        $i = ($paging-1)*$rpp;
        $no_urut = ($paging-1)*$rpp;
        //pagination config end



        ?>	
		
			
		<div class="container wrapped">
			<div class="middle-image">
				<img class="img-responsive" src="/assets/images/project-page.jpg"/>
			</div>
			<div class="blue-bar"><h2 style="color:#fff;text-align:center;margin-bottom:30px;">Project Experiences</h2></div>
			
			 <div class="table-responsive">          
			  <table class="table">
				<thead>
				  <tr>
					<th>#</th>
					<th>Client</th>
					<th>Project</th>
					<th>Location</th>
					<th>Year</th>
				  </tr>
				</thead>
				<tbody>
				<?php
				$data = $result->fetch_all(MYSQLI_ASSOC);
				while(($count<$rpp) && ($i<$tcount)) {
					
					?>
						<tr>
								<td width="40px">
									<?php echo ++$no_urut;?> 
								</td>

								<td width="200px">
									<?php echo $data[$i]['klien']; ?> 
								</td>
								<td width="100px" >
									<?php 
									
									$pekerjaan=explode (",", $data[$i]['pekerjaan']);
									
									foreach($pekerjaan as $item_kerja){
										echo "- $item_kerja <br>";
									}
									
									?>
								</td>
							<td width="100px" class="">
									<?php echo $data[$i]['lokasi'];?>
								</td>
					
							<td width="100px" class="text-center">
									<?php echo $data[$i]['tahun'];?>
								</td>
							
							</tr>
				<?php
                        $i++; 
                        $count++;
					}
				
					$result -> free_result();
					$mysqli -> close();

				?>
				</tbody>
			  </table>
			  </div>
			  <?php echo paginate_one($paging, $tpages); ?>
			
					
		</div><!-- wrapped container-->

			
	<?php include ($_SERVER['DOCUMENT_ROOT']."/part/footer.php");?>
    
	<span id="back-top"><a href="#">Back to top</a></span>
	
					
    


</body>

</html>