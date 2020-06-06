let date = new Date();

let currentDay = date.getDay(); 


$(document).ready(function(){
	$('#'+currentDay).addClass('currentDayBoot');
});
