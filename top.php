<?php
/*
Template Name:top
*/
get_header(); ?>
	<div class="image_view" style="position:relative">
		<img id="signal" src="<?php echo get_template_directory_uri(); ?>/images/t_1.png" style="position:relative;top:0;left:0;width:100%;height:auto;"/>
		<img id="signal_shadow" style="opacity:0;position:absolute;top:0;left:0;width:100%;height:auto;" />
	</div>
	<div class="image_view_menu" style="text-align:center;">
		<img onclick="push(1)"  src="<?php echo get_template_directory_uri(); ?>/images/t_1.png" style="width:18%;height:auto;border-radius:5px;"/>
		<img onclick="push(2)"  src="<?php echo get_template_directory_uri(); ?>/images/t_2.png" style="width:18%;height:auto;border-radius:5px;"/>
		<img onclick="push(3)"  src="<?php echo get_template_directory_uri(); ?>/images/t_3.png" style="width:18%;height:auto;border-radius:5px;"/>
		<img onclick="push(4)" src="<?php echo get_template_directory_uri(); ?>/images/t_4.png" style="width:18%;height:auto;border-radius:5px;"/>
		<img onclick="push(5)" src="<?php echo get_template_directory_uri(); ?>/images/t_5.png" style="width:18%;height:auto;border-radius:5px;"/>
	</div>
	<script>
		setInterval("auto()",5000);
		yet = "1";
		timer = 100;
		change = 0;
		lock = 0;
		function push(num) {
			if (num == yet || lock == 1) { return; }
			lock = 1;
			document.getElementById("signal_shadow").src = "<?php echo get_template_directory_uri(); ?>/images/t_" + num + ".png";
			fadein(0);
			yet = num;
			change = 1;
		}
		function auto() {
			if (change == 1) {
				change = 0;
				return;
			}
			lock = 1;
                        if (yet != 5) {
                                yet = parseInt(yet) + 1;
                        } else if (yet == 5) {
                                yet = 1;
                        }
			document.getElementById("signal_shadow").style.opacity = "0";
			document.getElementById("signal_shadow").src = "<?php echo get_template_directory_uri(); ?>/images/t_" + yet + ".png";
			fadein(0);
		}
		function fadein(opa) {
			if (opa >= 1) {
				document.getElementById("signal").src = "<?php echo get_template_directory_uri(); ?>/images/t_" + yet + ".png";
				lock = 0;
				return;
			}
			document.getElementById("signal_shadow").style.opacity = opa + 0.3;
			opa += 0.3;
			setTimeout("fadein(" + opa + ")", timer);
		}
	</script>
<div style="width:90%;margin: 0 auto;">
<br/>
<?php
if(have_posts()): while(have_posts()): the_post();?>
<?php the_content(); ?>
<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>
