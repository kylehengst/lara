@extends('layouts.master')    

@section('content')

<div class="container">
	
	<div class="row">
		
		<div class="col-md-9">
		
	<!-- Place somewhere in the <body> of your page -->
	<div id="slider" class="flexslider">
		<ul class="slides">
			<li>
				<a href="#">
				<img src="http://ussc.edu.au/ussc/assets/media/images/rollovers/KennedyBanner.jpg" />
				</a>
			</li>
			<li>
				<a href="#">
				<img src="http://ussc.edu.au/ussc/assets/media/images/splash/1311_gordonflake_splash.jpg" />
				</a>
			</li>
			<li>
				<a href="#">
				<img src="http://ussc.edu.au/ussc/assets/media/images/splash/1108_institute_splash.jpg" />
				</a>
			</li>
			<li>
				<a href="#">
				<img src="http://ussc.edu.au/ussc/assets/media/images/splash/1311_PKFpanel2_splash.jpg" />
				</a>
			</li>
			<!-- items mirrored twice, total of 12 -->
		</ul>
	</div>
	<div id="carousel" class="flexslider">
		<ul class="slides">
			<li>
				<a href="#">
					<h2>JFK 50 years on</h2>
					<p>A half century after the assassination of US President John F. Kennedy, Centre experts give their impressions of the man, his legacy and the theories surrounding his death.</p>
				</a>
			</li>
			<li>
				<a href="#">
					<h2>Perth USAC CEO</h2>
					<p>The Centre's sister institution, the Perth USAsia Centre, has announced that US–Asian relations expert L. Gordon Flake will be its inaugural CEO. Flake will take up the post in January 2014</p>
				</a>
			</li>
			<li>
				<a href="#">
					<h2>Visiting Scholars</h2>
					<p>Applications for the Centre's 2014–2015 Visiting Scholar Fellowships program close 25 November. The program provides financial support to allow academics to take leave from their home institutions and spend time at the Centre.</p>
				</a>
			</li>
			<li>
				<a href="#">
					<h2>Public Knowledge</h2>
					<p>International leaders in business, academia and journalism convened at the Sydney Opera House to discuss the pressing issues facing democracy and the media. See what they had to say.</p>
				</a>
			</li>
			<!-- items mirrored twice, total of 12 -->
		</ul>
	</div>

<script>
	$(window).load(function() {
		// The slider being synced must be initialized first
		$('#carousel').flexslider({
			animation: "slide",
			controlNav: false,
			animationLoop: false,
			slideshow: false,
			itemWidth: 220,
			itemMargin: 0,
			asNavFor: '#slider',
			directionNav:false,
			pauseOnAction: false, 
			start: function(slider) {

				jQuery('#carousel li').mouseover(function() {
					var activeSlide = 'false';
					if (jQuery(this).hasClass('flex-active')) {
						activeSlide = 'true';
					}
					if (activeSlide == 'false') {
						jQuery(this).trigger("click");
					}
				});
			}
		});

		$('#slider').flexslider({
			pauseOnAction: false, 
			directionNav:false,
			animation: "slide",
			controlNav: false,
			animationLoop: false,
			slideshow: false,
			sync: "#carousel"
		});
	});
</script>			
			
		</div>
		<div class="col-md-3">
			<p>Side Bar</p>
		</div>
		
	</div>

</div>

@stop