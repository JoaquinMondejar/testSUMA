$(document).ready(function () {

	
	let elementClicked;
	$('#contentDowloadOption').hide();
	$('#backgroundShadow').hide();


	$('#downloadOption a').click(function(event){
		$('#contentDowloadOption').fadeIn();
		$('#downloadOption').hide();
		$("body").css({'overflow' : 'hidden' });
		event.stopPropagation();

	});

	$('#closeSide').click(function(){
		$('#downloadOption').show();
		$('#contentDowloadOption').fadeOut();
		$("body").css({'overflow' : '' });

	});

	$('#contentDowloadOption').click(function(){
		elementClicked = true;
	});

	$("#contentDowloadOption").click(function(event) {
		event.stopPropagation();
	});

	$(document).click(function() {
		$('#downloadOption').show();
		$('#contentDowloadOption').fadeOut();
		$("body").css({'overflow' : '' });

	});



});

