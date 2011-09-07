<?php
// $Id: block.tpl.php,v 1.1.2.2 2009/08/31 15:13:10 hoainam12k Exp $
?>
<div id="block-<?php print $block->module .'-'. $block->delta; ?>" class="main">
	<div class="middle">
		<div class="bottom">
<?php if (!empty($block->subject)): ?>
  <h2><?php print $block->subject ?></h2>
<?php endif;?>

  <div class="content"><?php print $block->content ?></div>
		</div>
	</div>
</div>
