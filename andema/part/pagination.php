<?php
/*************************************************************************
php easy :: pagination scripts set - Version One
==========================================================================
Author:      php easy code, www.phpeasycode.com
Web Site:    http://www.phpeasycode.com
Contact:     webmaster@phpeasycode.com
*************************************************************************/
function paginate_one($paging,$tpages) {
	
	$firstlabel = "&laquo;&nbsp;";
	$prevlabel  = "&lsaquo;&nbsp;";
	$nextlabel  = "&nbsp;&rsaquo;";
	$lastlabel  = "&nbsp;&raquo;";
	
	$out = "<ul class=\"pagination\">";
	
	// first
	if($paging>1) {
		$out.=  "<li><a href=\"./\">" . $firstlabel . "</a></li>";
	}
	else {
		$out.= "<li><span>" . $firstlabel . "</span></li>";
	}
	
	// previous
	if($paging==1) {
		$out.= "<li><span>" . $prevlabel . "</span></li>";
	}
	elseif($paging==2) {
		$out.= "<li><a href=\"./\">" . $prevlabel . "</a></li>";
	}
	else {
		$out.= "<li><a href=\"" . ($paging-1) . "\">" . $prevlabel . "</a></li>";
	}
	
	// current
	$out.= "<li><span class=\"current\">Page " . $paging. " of " . $tpages ."</span></li>";
	
	// next
	if($paging<$tpages) {
		$out.= "<li><a href=\"".($paging+1)."\">" . $nextlabel . "</a></li>";
	}
	else {
		$out.= "<li><span>" . $nextlabel . "</span></li>";
	}
	
	// last
	if($paging<$tpages) {
		$out.= "<li><a href=\"". $tpages . "\">" . $lastlabel . "</a></li>";
	}
	else {
		$out.= "<li><span>" . $lastlabel . "</span></li>";
	}
	
	$out.= "</ul>";
	
	return $out;
}
?>