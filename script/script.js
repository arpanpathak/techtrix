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
			$("#q"+currentQuestion).fadeOut(100, function() {
				$("#q"+(++currentQuestion)).fadeIn(400);
			});
		}
	});
	$(".prev").click(function(event) {
		if(hasItem("#q"+(currentQuestion-1))){
			$("#q"+currentQuestion).fadeOut(100, function() {
				$("#q"+(--currentQuestion)).fadeIn(400);
			});
		}
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