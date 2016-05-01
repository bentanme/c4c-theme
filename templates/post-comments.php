<?php
/**
 *
 * Template for article comments
 *
 */
?>

<div class="post__comments">
  <h1 class="first header">Comments</h1>

  <?php if(comments_open()) : ?>
  <div id="disqus_thread"></div>
  <?php else : ?>
  <p>Comments have been disabled.</p>
  <?php endif; ?>
</div>

<script>
  var disqus_config = function () {
    this.page.url = "<?= get_permalink() ?>";
    this.page.identifier = "wp-<?= get_the_ID() ?>";
  };

  (function() { // DON'T EDIT BELOW THIS LINE
  var d = document, s = d.createElement('script');

  s.src = '//cooking4c.disqus.com/embed.js';

  s.setAttribute('data-timestamp', +new Date());
  (d.head || d.body).appendChild(s);
  })();
</script>

<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>