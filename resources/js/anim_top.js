	var time_animate = 300;
	var time_increment = 100;
	$(function(){
		console.log('animating top');
		// line1
		$( ".line_top_1" ).animate({
			width: '548px'
		}, time_animate, function() {

			timeIncrement();
			// line 2
			$( ".line_top_2" ).animate({
				width: '448px'
			}, time_animate , function() {

				timeIncrement();
				// line 3
				$( ".line_top_3" ).animate({
					width: '340px'
				}, time_animate, function() {
					
					timeIncrement();
					// line4
					$( ".line_top_4" ).animate({
						width: '258px'
					}, time_animate, function() {
						// Animation complete.
					});

				});

			});

		});
	});

	function timeIncrement(){
		console.log('timeIncrement()');
		time_animate += time_increment;
	}