<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1" />

	<title>EasyZoom, jQuery image zoom plugin</title>

	<link rel="stylesheet" href="{{asset('css/example.css')}}" />
	<link rel="stylesheet" href="{{asset('css/pygments.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/easyzoom.css')}}" />

	<!--
	EasyZoom by Matt Hinchliffe <http://maketea.co.uk>
	Find out more at GitHub <http://github.com/i-like-robots/EasyZoom>
	-->

	<!-- Google Analytics tracking code -->
	<script>
		var _gaq=[['_setAccount','UA-2508361-9'],['_trackPageview']];
		(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
		g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
		s.parentNode.insertBefore(g,s)}(document,'script'));
	</script>

</head>
<body>

	<div class="container">

			<h3>
				With thumbnail images
			</h3>

			<div class="easyzoom easyzoom--overlay easyzoom--with-thumbnails">
				<a href="example-images/3_zoom_1.jpg">
					<img src="{{asset('images/a.jpg')}}" alt="" width="640" height="360" />
				</a>
			</div>

			<ul class="thumbnails">
				<li>
					<a href="example-images/3_zoom_1.jpg" data-standard="example-images/3_standard_1.jpg">
						<img src="{{asset('images/a.jpg')}}" alt="" />
					</a>
				</li>
				<li>
					<a href="example-images/3_zoom_2.jpg" data-standard="example-images/3_standard_2.jpg">
						<img src="{{asset('images/b.jpg')}}" alt="" />
					</a>
				</li>
				<li>
					<a href="example-images/3_zoom_3.jpg" data-standard="example-images/3_standard_3.jpg">
						<img src="{{asset('images/c.jpeg')}}" alt="" />
					</a>
				</li>
				<li>
					<a href="example-images/3_zoom_4.jpg" data-standard="example-images/3_standard_4.jpg">
						<img src="{{asset('images/d.jpg')}}" alt="" />
					</a>
				</li>
			</ul>
    </div>
		
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
	<script src="{{asset('dist/easyzoom.js')}}"></script>
	<script>
		// Instantiate EasyZoom instances
		var $easyzoom = $('.easyzoom').easyZoom();

		// Setup thumbnails example
		var api1 = $easyzoom.filter('.easyzoom--with-thumbnails').data('easyZoom');

		$('.thumbnails').on('click', 'a', function(e) {
			var $this = $(this);

			e.preventDefault();

			// Use EasyZoom's `swap` method
			api1.swap($this.data('standard'), $this.attr('href'));
		});

		// Setup toggles example
		var api2 = $easyzoom.filter('.easyzoom--with-toggle').data('easyZoom');

		$('.toggle').on('click', function() {
			var $this = $(this);

			if ($this.data("active") === true) {
				$this.text("Switch on").data("active", false);
				api2.teardown();
			} else {
				$this.text("Switch off").data("active", true);
				api2._init();
			}
		});
	</script>

</body>
</html>
