 var currentQuestion=1;
$(function(){
	var e=$(".code").each(function(index, el) {
		console.log(index);
		$(this).attr('id', 'code'+(index+1));
		CodeMirror.fromTextArea(document.getElementById("code"+(index+1)),{
		mode:"javascript",
		smartIndent:true,
		readOnly:true,
		lineNumbers:true,
		matchBrackets: true,
    	styleActiveLine: true
		});
	});
	
	$('#other_events').on('click',function(){
		$('#left').toggle('fade');
	});
	$('#other_events').on('blur',function(){
		$('#left').slideToggle('fast');
	});
	$(".next").click(function(event) {
		showQuestion(currentQuestion+1);
	});
	$(".prev").click(function(event) {
		showQuestion(currentQuestion-1);
	});
	$(".reset-button").click(function(event) {
		$("input[name=q"+currentQuestion+"]:checked").each(function() {
			$(this).attr('checked', false);
		});
	});
	$(".attempt-later-button").click(function(event) {
		$("#j"+currentQuestion).removeClass('attempted').removeClass('not-attempted').addClass('attempt-later');

	});
	$(".flat-button").on('click',function(){
		
		showQuestion(parseInt($(this).attr('data-show')));
	});
	$(".flat-button").dblclick(function(e){
    	e.preventDefault();
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
		    clock.setTime($('.clock').attr('data-duration')); // get time from data-duration attrib
		    clock.start();

		});
function hasItem(item){
	return $("body").has(item).length;
}
function showQuestion(questionNumber){
	if(questionNumber==currentQuestion)return;
	console.log(currentQuestion+"-----"+questionNumber);
	if(hasItem("#q"+(questionNumber))){
			
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
			// Issue resolved....
		$("#q"+currentQuestion).fadeOut(100,function(){
			currentQuestion=questionNumber;
			$("#q"+currentQuestion).fadeIn(400);
			$("#j"+currentQuestion).removeClass("attempt-later");
		});
		
	}

}