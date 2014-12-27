$(window).scroll(function() {
	if ($(window).scrollTop() > 100) {

		$('#list').animate({
			"top" : "0"
		}, "slow");

	} else if ($(window).scrollTop() < 100) {
		$('#list').animate({
			"top" : "-50"
		}, "slow");
	}
}); function book1() {

	$("html, body").animate({
		scrollTop : "2100px"
	}, 800);
}
function bookM() {

	$("html, body").animate({
		scrollTop : "500px"
	}, 800);
}
function bookS() {

	$("html, body").animate({
		scrollTop : "1000px"
	}, 800);
}
function bookC() {

	$("html, body").animate({
		scrollTop : "1500px"
	}, 800);
}