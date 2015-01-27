<?php
/**
 * @file
 * Template for Radix Sutro Double.
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
	  <?php print $content['header']; ?>
	</div>
  </div>

  <div class="row">
    <div class="col-sm-6">
	  <?php print $content['column1']; ?>
	</div>
    <div class="col-sm-6">
	  <?php print $content['column2']; ?>
	</div>
  </div>

  <div class="row">
    <div class="col-sm-12">
	  <?php print $content['middle']; ?>
	</div>
  </div>

  <div class="row">
    <div class="col-sm-6">
	  <?php print $content['secondcolumn1']; ?>
	</div>
    <div class="col-sm-6">
	  <?php print $content['secondcolumn2']; ?>
	</div>
  </div>

  <div class="row">
    <div class="col-sm-12">
	  <?php print $content['footer']; ?>
	</div>
  </div>
</div><!-- /.coltrane-double -->


