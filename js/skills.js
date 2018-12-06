function setup(){
	var storeText = $(document.getElementsByClassName('displayText'));
	storeText.hide();
}
window.addEventListener('load', setup, false);

$(function(){
	$("#div1").click(function(){
		$("#text1").slideToggle(500);
	});
		
	$("#div2").click(function(){
		$("#text2").slideToggle(500);
	});
		
	$("#div3").click(function(){
		$("#text3").slideToggle(500);
	});
});
