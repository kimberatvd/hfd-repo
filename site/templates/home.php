<?php snippet('header') ?>

  <main class="main home four-fifths" id="allreviews" role="main">
  <?php $allreviews = $pages->get('reviews')->children()->visible()->paginate(5) ?>

  <?php foreach($allreviews as $review): ?>
 
    <div class="review">
    <a href="<?php echo $review->url() ?>">
  	  <header class="one-fifth">
  	    <h1><?php echo $review->title()->html() ?></h1>
  	    <p class="meta"><?php echo $review->tags() ?></p>
  	  </header>

      <div class="text three-fifths end">
      	<img src="<?php echo $review->image('preview.jpg')->url() ?>" />
        <h2><?php echo $review->articletitle()->html() ?></h2>
        <h3><?php echo $review->subtitle()->html() ?></h3>
      </div>
    </a>
    </div>

  <?php endforeach ?>
  </main>

  <?php if($allreviews->pagination()->hasPages()): ?>
    <nav class="pagination">

      <?php if($allreviews->pagination()->hasNextPage()): ?>
      <a class="next" href="<?php echo $allreviews->pagination()->nextPageURL() ?>">older posts &rsaquo;</a>
      <?php endif ?>

    </nav>
  <?php endif ?>



  <?php snippet('sidebar') ?>
    <hr>

<?php snippet('footer') ?>