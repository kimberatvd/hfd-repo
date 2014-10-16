<?php snippet('header') ?>

  <main class="main review cf" role="main">

  <header class="one-fifth">
    <h1><?php echo $page->title()->html() ?></h1>


    <p class="meta"><?php echo $page->tags() ?></p>




  </header>

    <div class="text three-fifths">
      <h2><?php echo $page->articletitle()->html() ?></h2>
      <h3><?php echo $page->subtitle()->html() ?></h3>
      <?php echo $page->text()->kirbytext() ?>


    <nav class="nextprev cf" role="navigation">
      <?php if($prev = $page->prevVisible()): ?>
      <a class="prev" href="<?php echo $prev->url() ?>"><img src="/assets/images/arrow-prev.svg"></a>
      <?php endif ?>
      
      <?php if($next = $page->nextVisible()): ?>
      <a class="next" href="<?php echo $next->url() ?>"><img src="/assets/images/arrow-next.svg"></a>
      <?php endif ?>
    </nav>
    </div>

    <?php snippet('sidebar') ?>

  </main>


<?php snippet('footer') ?>