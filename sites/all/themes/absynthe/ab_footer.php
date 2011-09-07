<div id="footer">
  <div class="inner">
      <div class="lastfm">
      		<?php  if ($footer_left) {print $footer_left;} ?>
      </div>
      <div class="recentcomments">
            <?php  if ($footer_right) {print $footer_right;} ?>
            <?php print $feed_icons ?>
      </div>
  <div class="credits">
    <p></p>
  </div>
    </div>
</div>

  <?php print $closure ?>
  </body>
</html>
