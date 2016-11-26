$(function(){
	$('#other_events').on('click',function(){
		$('#left').toggle('fade');
	});
	$('#other_events').on('blur',function(){
		$('#left').slideToggle('fast');
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