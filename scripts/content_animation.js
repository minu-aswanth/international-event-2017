function isViewport($el) {
	H = $(window).height();
	t = $el[0].getBoundingClientRect().top;
	return (H-t);
}

var animateFunction = function() {
	$(".animateElement").each(function() {
		if(isViewport($(this)) >= 0) {
			$(this).addClass("animate");
		}
	});
}

$(document).ready(function(){
	$(window).on("scroll resize", animateFunction);
})

