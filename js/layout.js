window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}


function setup(){
	var storeText = $(document.getElementsByClassName('displayText'));
	storeText.hide();
}
window.addEventListener('load', setup, false);

$(function(){
	$("#division1").click(function(){
		$("#textbox1").slideToggle(500);
	});
		
	$("#division2").click(function(){
		$("#textbox2").slideToggle(500);
	});
		
	$("#division3").click(function(){
		$("#textbox3").slideToggle(500);
	});
});