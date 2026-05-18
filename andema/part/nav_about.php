<?php
$sub_1 = ($link == 'about' ? 'class="active"':'');
$sub_2 = ($link == 'visi' ? 'class="active"':'');
$sub_3 = ($link == 'board' ? 'class="active"':'');
$sub_4 = ($link == 'core' ? 'class="active"':'');
$sub_5 = ($link == 'achieve' ? 'class="active"':'');
$sub_6 = ($link == 'download' ? 'class="active"':'');
$sub_7 = ($link == 'csr' ? 'class="active"':'');
?>

<div class="sub-nav">
	<ul class="nav nav-pills">
		<li <?php echo $sub_1;?>><a id="about" href="/about/">About</a></li>
		<li <?php echo $sub_2;?>><a id="visi" href="/about/vision_and_mission/">Vision & Mision</a></li>
		<li <?php echo $sub_3;?>><a id="board" href="/about/board_management/">Management Board</a></li>
		<li <?php echo $sub_4;?>><a id="core" href="/about/core_values/">Core Values</a></li>
		<li <?php echo $sub_5;?>><a id="achieve" href="/about/achievement/">Achievement</a></li>
		<li <?php echo $sub_6;?>><a id="legality" href="/about/download/">Legality Papers</a></li>
		<li <?php echo $sub_7;?>><a id="csr" href="/about/csr/">CSR</a></li>
	</ul>
</div>