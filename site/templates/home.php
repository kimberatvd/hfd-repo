<?php snippet('header') ?>

  <main class="main home four-fifths" role="main">

  <?php foreach(page('reviews')->children()->visible() as $review):?>

  <a href="<?php echo $review->url() ?>">
  <div class="review">
	  <header class="one-fifth">
	    <h1><?php echo $review->title()->html() ?></h1>
	    <p class="meta"><?php echo $review->tags() ?></p>


	  </header>

    <div class="text three-fifths end">
    	<img src="<?php echo $review->image('preview.gif')->url() ?>" />
      <h2><?php echo $review->articletitle()->html() ?></h2>
      <h3><?php echo $review->subtitle()->html() ?></h3>
    </div>
  </div>
	</a>

  <?php endforeach ?>
  </main>



  <?php snippet('sidebar') ?>


    <hr>

  </main>

<?php snippet('footer') ?>