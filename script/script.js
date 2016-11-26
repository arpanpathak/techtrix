 var currentQuestion=1;
$(function(){
	$('#other_events').on('click',function(){
		$('#left').toggle('fade');
	});
	$('#other_events').on('blur',function(){
		$('#left').slideToggle('fast');
	});
	$(".next").click(function(event) {
		if(hasItem("#q"+(currentQuestion+1))){
			if($("input[name=q"+currentQuestion+"]:checked").length){
				$("#j"+currentQuestion).removeClass('not-attempted');
				if(!$("#j"+currentQuestion).hasClass('attempt-later'))
					$("#j"+currentQuestion).addClass('attempted');
			}
			else{
				if(!$("#j"+currentQuestion).hasClass('attempt-later')){
					$("#j"+currentQuestion).removeClass('attempted');
					$("#j"+currentQuestion).addClass('not-attempted');
				}
			}
			$("#q"+currentQuestion).fadeOut(100, function() {
				$("#q"+(++currentQuestion)).fadeIn(400);
				$("#j"+currentQuestion).removeClass("attempt-later");
			});
		}
	});
	$(".prev").click(function(event) {
		if(hasItem("#q"+(currentQuestion-1))){
			if($("input[name=q"+currentQuestion+"]:checked").length){
				$("#j"+currentQuestion).removeClass('not-attempted');
				if(!$("#j"+currentQuestion).hasClass('attempt-later'))
					$("#j"+currentQuestion).addClass('attempted');
			}
			else{
				if(!$("#j"+currentQuestion).hasClass('attempt-later')){
					$("#j"+currentQuestion).addClass('not-attempted');
				}
			}
			$("#q"+currentQuestion).fadeOut(100, function() {

				$("#q"+(--currentQuestion)).fadeIn(400);
				$("#j"+currentQuestion).removeClass("attempt-later");
			});
		}
	});
	$(".reset-button").click(function(event) {
		$("input[name=q"+currentQuestion+"]:checked").each(function() {
			$(this).attr('checked', false);
		});
	});
	$(".attempt-later-button").click(function(event) {
		$("#j"+currentQuestion).removeClass('attempted').removeClass('not-attempted').addClass('attempt-later');

	});
});
var clock;
		
		$(document).ready(function() {
			var clock;

			clock = $('.clock').FlipClock({
		        clockFace: 'MinuteCounter',
		        autoStart: false,
		        callbacks: {
		        	stop: function() {
		        		$('.message').html('The clock has stopped!')
		        		location.href="http://www.google.com";
		        	}
		        }
		    });
			clock.setCountdown(true);
		    clock.setTime(120);
		    clock.start();

		});
function hasItem(item){
	return $("body").has(item).length;
}