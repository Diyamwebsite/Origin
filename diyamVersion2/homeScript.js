$(document).ready(function(){
	$("#btnContact").click(function(){
	    $("#middelContent").hide();
	    $("#contactContent").show();
	});
	
	$("#portfolio").click(function(){
	    $("#middelContent").hide();
	    $("#contactContent").hide();
	    $("#port").show();
	});
});