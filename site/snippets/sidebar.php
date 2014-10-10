<aside>
  <h4>reviews</h4>

  <ul>
  <?php foreach(page('reviews')->children()->visible() as $review): ?>
    <li><a href="<?php echo $review->url() ?>"><?php echo html($review->title()) ?></a></li>
  <?php endforeach ?>
  </ul>

  <h4>locations</h4>
  <ul>
    <li>boston</li>
    <li>cambridge</li>
    <li>south end</li>
    <li>harvard square</li>
    <li>downtown crossing</li>
    <li>waterfront</li>
    <li>new brunswick</li>
    <li>kendall square</li>
  </ul>

  <h4>latest tweet</h4>
  <p>live tweeting straight from McDonald’s. very nice happy meal packaging. #imlovingit #valuemeal #canigetfrieswiththat</p>
  <p>follow us @hungryfordesign</p>
</aside>