export default {
  init() {
    // JavaScript to be fired on all pages
    function menuMorph(){
			$('.sitewrapper').toggleClass('openNav');
			$('.middle').toggleClass('hidemiddle');
			$('.bottom').toggleClass('rotateup');
			$('.top').toggleClass('rotatedown');
			$('.menu-toggle').toggleClass('collapse');
			$('#mobile-nav').toggleClass('open');
		}
		$('.menu-toggle').click(menuMorph);

    $('.ctct-disclosure a').attr('rel', 'noopener');
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
