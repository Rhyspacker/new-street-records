$(window).load(function() {

	$('.nav-btn').click(function () {

					$('ul.nav').toggle();
				})	
				
				$(window).resize(function (){
					
					if ( $(window).width() > 859) {
						
						$('ul.nav').removeAttr('style')
						}
					})

				$("#burger-container").on('click', function(){
       			$(this).toggleClass("open");
    			});
	
});


