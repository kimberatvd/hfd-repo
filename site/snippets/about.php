<section class="intro cf">
	<div class="four-fifths">
		<header><p><?php echo $site->page('about')->intro() ?></p></header>
		<p class="about"><?php echo $site->page('about')->about() ?></p>
	</aside><!--four-fifths-->

	<aside>
		<h4>contact</h4>
		<p><?php echo $site->page('about')->contact() ?></p>
	</aside><!--one-fifth-->
</section>