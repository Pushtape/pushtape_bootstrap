<?php
/**
 * @file
 * Template for Bowie.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>


<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <?php print $content['contentmain']; ?>
    </div>
  </div>
</div><!-- /.bowie -->

