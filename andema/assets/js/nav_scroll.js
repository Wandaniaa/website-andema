

$(window).scroll(function() {
if ($(document).scrollTop() > 75) {
	$('nav').addClass("fixed");
}
else {
	$('nav').removeClass("fixed");}
});
