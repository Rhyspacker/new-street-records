$(window).load(function() {

	$('span.nav-btn').click(function () {

					$('ul.nav').toggle();
				})	
				
				$(window).resize(function (){
					
					if ( $(window).width() > 859) {
						
						$('ul.nav').removeAttr('style')
						}
					})
	
});