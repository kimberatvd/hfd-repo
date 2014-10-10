<aside>
  <h4>reviews</h4>

  <ul>
  <?php foreach(page('reviews')->children()->visible() as $review): ?>
    <li><a href="<?php echo $review->url() ?>"><?php echo html($review->title()) ?></a></li>
  <?php endforeach ?>
  </ul>

  <h4>locations</h4>
  <?php $tags = $pages->find('reviews')->children()->visible()->pluck('tags', ',', true); ?>

  <ul >
    <?php foreach($tags as $tag): ?>
    <li>
      <a href=" <?php echo url( 'reviews/tag:' . $tag) ?>">
        <?php echo html($tag) ?>
      </a>
    </li>
    <?php endforeach ?>
  </ul>

  <h4>latest tweet</h4>
  <p>live tweeting straight from McDonald’s. very nice happy meal packaging. #imlovingit #valuemeal #canigetfrieswiththat</p>
  <p>follow us @hungryfordesign</p>
</aside>