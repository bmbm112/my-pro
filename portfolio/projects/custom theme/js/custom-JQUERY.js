$(document).ready(function(){
	$("button").mouseenter(function(){
		$(this).each(function(){
		$(this).css("background-color","gray");
		$(this).css("cursor","pointer");
		});
	});
});

$(document).ready(function(){
	$("button").mouseleave(function(){
		$(this).each(function(){
		$(this).css("background-color","#2E64FE");
		});
	});
});