$(document).ready(function() {
   
	$("footer").slideDown("slow");

	$("h1").fitText(0.9);

	$("h3").click(function() {
		$(this).parent().find(".version_screenshot").toggle('slow');
	});

//	$(".version_screenshot:after").css("top","185px");

 });