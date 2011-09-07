<?php
// $Id: comment.tpl.php,v 1.1.2.2 2009/08/31 15:13:10 hoainam12k Exp $

/**
 * @file comment.tpl.php
 * Default theme implementation for comments.
 *
 * Available variables:
 * - $author: Comment author. Can be link or plain text.
 * - $content: Body of the post.
 * - $date: Date and time of posting.
 * - $links: Various operational links.
 * - $new: New comment marker.
 * - $picture: Authors picture.
 * - $signature: Authors signature.
 * - $status: Comment status. Possible values are:
 *   comment-unpublished, comment-published or comment-preview.
 * - $submitted: By line with date and time.
 * - $title: Linked title.
 *
 * These two variables are provided for context.
 * - $comment: Full comment object.
 * - $node: Node object the comments are attached to.
 *
 * @see template_preprocess_comment()
 * @see theme_comment()
 */
?>
<div class="listcomments clearfix">
  <div class="comment-author">
  <?php print $author ?> <span class="says">says:</span>
  </div>
  <div class="submitted">
    <?php  print format_date($comment->timestamp, 'custom', 'F d, Y'); ?> at <?php  print format_date($comment->timestamp, 'custom', 'g:i a'); ?>
  </div>

  <div class="content">
    <p><?php print $content ?></p>
    <?php if ($signature): ?>
    <div class="user-signature">
      <?php print $signature ?>
    </div>
    <?php endif; ?>
  </div>
  <div class="reply"><?php print $links ?></div>
</div>