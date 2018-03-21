<?php get_header(); ?>
	<div style="position:relative">
		<img id="signal" src="<?php echo get_template_directory_uri(); ?>/images/1.png" style="position:relative;top:0;left:0;width:100%;height:auto;"/>
		<img id="signal_shadow" style="opacity:0;position:absolute;top:0;left:0;width:100%;height:auto;" />
	</div>
	<div style="text-align:center;">
		<img onclick="push(1)" src="<?php echo get_template_directory_uri(); ?>/images/1.png" style="width:25%;height:auto;border-radius:5px;"/>
		<img onclick="push(2)" src="<?php echo get_template_directory_uri(); ?>/images/2.png" style="width:25%;height:auto;border-radius:5px;"/>
		<img onclick="push(3)" src="<?php echo get_template_directory_uri(); ?>/images/3.png" style="width:25%;height:auto;border-radius:5px;"/>
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
			document.getElementById("signal_shadow").src = "<?php echo get_template_directory_uri(); ?>/images/" + num + ".png";
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
                        if (yet != 3) {
                                yet = parseInt(yet) + 1;
                        } else if (yet == 3) {
                                yet = 1;
                        }
			document.getElementById("signal_shadow").style.opacity = "0";
			document.getElementById("signal_shadow").src = "<?php echo get_template_directory_uri(); ?>/images/" + yet + ".png";
			fadein(0);
		}
		function fadein(opa) {
			if (opa >= 1) {
				document.getElementById("signal").src = "<?php echo get_template_directory_uri(); ?>/images/" + yet + ".png";
				lock = 0;
				return;
			}
			document.getElementById("signal_shadow").style.opacity = opa + 0.3;
			opa += 0.3;
			setTimeout("fadein(" + opa + ")", timer);
		}
	</script>
	<div class="self-section">
		<b>ヘアサロン　ロアへようこそ！</b><br/>
		（コンセプト文章）美容室『LOA（ロア）』は全てのお客様に満足していただけるよう丁寧なカウンセリング、髪に優しい施術、確かな技術で最高の美と癒しをご提供させていただくプライベートサロンです。ご家族やお子様連れでも気兼ねなくご来店していただけるようキッズスペースも完備しております。男性の方もお待ちしています。
	</div>
	
	<div class="self-section">
		<b>2017/11/03 11月休業日のお知らせ</b><br/>	
	いつもヘアサロンロアをご利用いただきありがとうございます。休業日を以下の通りお知らせします。<br>
	11/19（日）
	</div>
<?php get_footer(); ?>
