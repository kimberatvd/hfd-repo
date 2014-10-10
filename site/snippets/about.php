<section class="intro cf">
	<article class="four-fifths">
		<header><p><?php echo $site->page('about')->intro()->kirbytext() ?></p></header>
		<p class="about"><?php echo $site->page('about')->about()->kirbytext() ?></p>
	</article><!--four-fifths-->

	<aside>
		<h4>contact</h4>
		<p><?php echo $site->page('about')->contact()->kirbytext() ?></p>
	</aside><!--one-fifth-->
</section>