
$(function(){

	console.log("It's working");

	// SmoothScroll on anchor tags
	$('a').smoothScroll();

	// Scroll Reveal
	window.sr = ScrollReveal();
	sr.reveal('.blackBar');

	// When you click on any of the modal titles sshow the corresponding content and hide the other content
	// Hide contents paragraph 2 and 3
	var styles = {
	    borderBottom : '2px solid black',
	    color : 'black'
	};

	$('.modalTitle1').css(styles);
	$('.modalContent2, .modalContent3').hide();

	$('.modalTitle1').on('click', function(){
		$('.modalTitle3, .modalTitle2').removeAttr( 'style' );
		$('.modalContent2').hide()
		$('.modalContent3').hide();
		$(this).css( styles);
		$('.modalContent1').fadeIn();
	});

	$('.modalTitle2').on('click', function(){
		$('.modalTitle1, .modalTitle3').removeAttr( 'style' );
		$('.modalContent1').hide()
		$('.modalContent3').hide();
		$(this).css( styles);
		$('.modalContent2').fadeIn();
	});

	$('.modalTitle3').on('click', function(){
		$('.modalTitle1, .modalTitle2').removeAttr( 'style' );
		$('.modalContent1').hide()
		$('.modalContent2').hide();
		$(this).css(styles);
		$('.modalContent3').fadeIn();
	});

});