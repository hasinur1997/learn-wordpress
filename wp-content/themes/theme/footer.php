	<section id="footer">
	
		<div class="container">
		
			<div class="row"> 
			
				<div class="col-md-4"></div>
				
				<div class="col-md-4">
				
					<div class="copyright"> 
					
						<p>Copyright &copy; 2014 Design with By; Somrat islam.</p>
						
					</div>
					
				</div>
				
				<div class="col-md-4">
				
					<div class="social_icon pull-right"> 
						<i class="fa fa-facebook"></i>
						<i class="fa fa-twitter"></i>
						<i class="fa fa-linkedin"></i>
						<i class="fa fa-google-plus"></i>
					</div>
					
					
				</div>
				
			</div>
			
			
		</div>
		
		
	</section>
	
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
	
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
	
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	
	<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/gmap.js"></script>
	
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/counter.js"></script>
	
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/isotope.min.js"></script>
	
	<script type="text/javascript"> 
		$( function() {
		  // init Isotope
		  var $grid = $('.grid').isotope({
			itemSelector: '.element-item',
			layoutMode: 'fitRows'
		  });
		  // filter functions
		  var filterFns = {
			// show if number is greater than 50
			numberGreaterThan50: function() {
			  var number = $(this).find('.number').text();
			  return parseInt( number, 10 ) > 50;
			},
			// show if name ends with -ium
			ium: function() {
			  var name = $(this).find('.name').text();
			  return name.match( /ium$/ );
			}
		  };
		  // bind filter button click
		  $('.filters-button-group').on( 'click', 'button', function() {
			var filterValue = $( this ).attr('data-filter');
			// use filterFn if matches value
			filterValue = filterFns[ filterValue ] || filterValue;
			$grid.isotope({ filter: filterValue });
		  });
		  // change is-checked class on buttons
		  $('.button-group').each( function( i, buttonGroup ) {
			var $buttonGroup = $( buttonGroup );
			$buttonGroup.on( 'click', 'button', function() {
			  $buttonGroup.find('.is-checked').removeClass('is-checked');
			  $( this ).addClass('is-checked');
			});
		  });
		  
		});
		
		
		$('a[href^="#"]').on('click', function(event) {

			var target = $( $(this).attr('href') );

			if( target.length ) {
				event.preventDefault();
				$('html, body').animate({
					scrollTop: target.offset().top
				}, 1000);
			}

		});
		
		//counter 
		
		$('.counter').counterUp({
			delay: 10,
			time: 1000
		});
		
		// for map
		var map = new GMaps({
		  el: '#map',
		  lat: 23.7806365,
		  lng: 90.4193257,
		  scrollwheel:false,
		});
		
		// fixed top menu
		$(window).scroll(function(){
			if($(window).scrollTop() > 600){
				$("#menu").addClass("top-bg");
			}
			else{
				$("#menu").removeClass("top-bg");
				
			}
		});
		
		
		function onScroll(event){
    var scrollPos = $(document).scrollTop();
    $('#sidebar a').each(function () {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('nav ul li a').removeClass("active");
            currLink.addClass("active");
        }
        else{
            currLink.removeClass("active");
        }
    });
}
		
	</script>

	<?php wp_footer();?>
</body>
</html>