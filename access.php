<?php
/*
Template Name:access
*/
get_header(); ?>
<br/>

<?php
if(have_posts()): while(have_posts()): the_post();?>
<?php the_content(); ?>
<?php endwhile; endif; ?>

<script>
	google.maps.event.addDomListener(window, 'load', function() {
		var mapdiv = document.getElementById('mapCanvas');
		var myOptions = {
			zoom: 15,
			center: new google.maps.LatLng(34.775303,134.044526),
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			scaleControl: true,
			scrollwheel: false
		};
		var map = new google.maps.Map(mapdiv, myOptions);
		var marker = new google.maps.Marker({
			position: new google.maps.LatLng(34.775303,134.044526),
			map: map,
			title: 'ヘアサロン　ロア',
			icon: "<?php echo get_template_directory_uri(); ?>/images/pin.png"
		});
	});

	var agent = navigator.userAgent;
	if(agent.search(/iPhone/) != -1 || agent.search(/iPad/) != -1){
		document.getElementById("js-access-map_top").href = "http://maps.apple.com/maps?saddr=&daddr=34.775303,134.044526&z=16";
	}else{
		document.getElementById("js-access-map_top").href = "http://maps.google.com/maps?saddr=&daddr=34.775303,134.044526&z=16";
	}
</script>
<?php get_footer(); ?>
