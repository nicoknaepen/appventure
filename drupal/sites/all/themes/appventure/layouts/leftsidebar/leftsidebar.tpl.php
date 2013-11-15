<?php
/**
 * @file
 * Template for a 2 column panel layout.
 *
 * This template provides a two column panel display layout, with
 * each column roughly equal in width.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - $content['left']: Content in the left column.
 *   - $content['right']: Content in the right column.
 */
?>
<div class="panel-display panel-leftsidebar clearfix" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <aside class="panel-panel panel-sidebar">
    <div class="inside"><?php print $content['left']; ?></div>
  </aside>
  <div class="panel-panel panel-content">
    <div class="inside"><?php print $content['content']; ?></div>
  </div>
</div>
