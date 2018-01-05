$(document).ready(function(){
	$('.editor').text($('#PostText').val());
	$('.btn-primary').click(function(event){
		event.preventDefault();
		$('#PostText').val($('.editor').text());
		$('form').submit();
	});
});