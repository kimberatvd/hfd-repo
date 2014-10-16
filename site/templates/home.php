<?php snippet('header') ?>

  <main class="main home four-fifths" role="main">
  <?php $allreviews = $pages->get('reviews')->children()->visible()->paginate(3) ?>

  <?php foreach($allreviews as $review): ?>

  <a href="<?php echo $review->url() ?>">
  <div class="review">
	  <header class="one-fifth">
	    <h1><?php echo $review->title()->html() ?></h1>
	    <p class="meta"><?php echo $review->tags() ?></p>


	  </header>

    <div class="text three-fifths end">
    	<img src="<?php echo $review->image('preview.jpg')->url() ?>" />
      <h2><?php echo $review->articletitle()->html() ?></h2>
      <h3><?php echo $review->subtitle()->html() ?></h3>
    </div>
  </div>
	</a>

  <?php endforeach ?>


  <?php if($review->pagination()->hasPages()): ?>
  <nav class="pagination">

    <?php if($review->pagination()->hasNextPage()): ?>
    <a class="next" href="<?php echo $review->pagination()->nextPageURL() ?>">&lsaquo; newer posts</a>
    <?php endif ?>

    <?php if($review->pagination()->hasPrevPage()): ?>
    <a class="prev" href="<?php echo $review->pagination()->prevPageURL() ?>">older posts &rsaquo;</a>
    <?php endif ?>

  </nav>
  <?php endif ?>

  </main>



  <?php snippet('sidebar') ?>


    <hr>

  </main>

<?php snippet('footer') ?>