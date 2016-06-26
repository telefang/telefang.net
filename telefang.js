$(document).ready(function() {
	$("a").mouseover(function() {
		$("#infobox").html($(this).attr("data-caption"));
	});
	$("a").mouseout(function() {
		$("#infobox").html("Welcome.");
	});
});
