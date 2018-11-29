$(document).ready(function(){
	$(".spmAnchor").click(function(){
	    $("#outerLayer").hide();
	    $("#spmContentH").hide();
	    $("#spmexist").hide();
	    $("#spmConte").show();
	});
	
	$(".spmhelp").click(function(){
	    $("#outerLayer").hide();
	    $("#spmConte").hide();
	    $("#spmexist").hide();
	    $("#spmContentH").show();
	});
	
	$(".spmexisting").click(function(){
	    $("#outerLayer").hide();
	    $("#spmConte").hide();
	    $("#spmContentH").hide();
	    $("#spmexist").show();
	});
	
});