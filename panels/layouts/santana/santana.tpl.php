<?php
/**
 * @file
 * Template for Santana.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>



  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-4">
          <?php print $content['sidebar']; ?>
      </div>
      <div class="col-sm-8">
        <div class="row">
          <div class="col-sm-12">
            <?php print $content['contentheader']; ?>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <?php print $content['contentcolumn1']; ?>
          </div>
          <div class="col-sm-6">
            <?php print $content['contentcolumn2']; ?>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <?php print $content['contentfooter']; ?>
          </div>
        </div>
      </div>
    </div>
  </div><!-- /.santana -->

