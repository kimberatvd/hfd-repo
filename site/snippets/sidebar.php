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
  <?php 
  $TweetPHP = new TweetPHP(array(
    'consumer_key'              => 'QzTpvAgC4kj6fqocLnLclUIMk',
    'consumer_secret'           => 'YgjjjBL2OSm8Wp7wEeUv1jBop4NW8PqsziCv4u1PEySzXrWCWP',
    'access_token'              => '137098330-RrirIxlDHXigew0PpNFuA2yDar5yv3QW9SkHHWS6',
    'access_token_secret'       => 'lJrqrKFa7mauXA8jKoHomKxVWWjMvZ1LD30FVS0tFpiY4',
    'twitter_screen_name'       => 'VDialogue',
    'twitter_wrap_open'         => '<h4>Latest tweets</h4><ul id="twitter">',
  ));
  
  echo $TweetPHP->get_tweet_list();
?>


  <!-- <a  class="twitter-timeline" 
      width="189" 
      height="300" 
      href="https://twitter.com/VDialogue" 
      data-link-color="#808080" 
      data-chrome="nofooter noheader noscrollbar transparent"
      data-tweet-limit="1"
      data-widget-id="520658548590530560">
      Tweets by @VDialogue</a> 
      <script>
        !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
      </script>
  <p>follow us @hungryfordesign</p> -->
</aside>

