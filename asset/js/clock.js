$(document).ready(function() {
// Create two variable with the names of the months and days in an array
var monthNames = [ "Jaanuari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember" ]; 
var dayNames= ["Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu"]

// Create a newDate() object
var newDate = new Date();
// Extract the current date from Date object
newDate.setDate(newDate.getDate());
// Output the day, date, month and year   
$('#Date').html(dayNames[newDate.getDay()] + " " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getFullYear());

setInterval( function() {
	// Create a newDate() object and extract the seconds of the current time on the visitor's
	var Today = new Date();
	var currentHours = Today.getHours();
    var currentMinutes = Today.getMinutes();
    var currentSeconds = Today.getSeconds();
    var Time = hours;
    Time += ((min < 10) ? ":0" : ":") + min;
    Time += ((sec < 10) ? ":0" : ":") + sec;
	// Add a leading zero to seconds value
	$("#jam").html("<span id='hours'>"+ currentHours + "</span>:<span id='minutes'>" + currentMinutes + "</span>:<span id='seconds'>" + currentSeconds + '</span>');
	},1000);

});