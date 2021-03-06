<?php
/**
 * @file panels-pane.tpl.php
 * Main panel pane template
 *
 * Variables available:
 * - $pane->type: the content type inside this pane
 * - $pane->subtype: The subtype, if applicable. If a view it will be the
 *   view name; if a node it will be the nid, etc.
 * - $title: The title of the content
 * - $content: The actual content
 * - $links: Any links associated with the content
 * - $more: An optional 'more' link (destination only)
 * - $admin_links: Administrative links associated with the content
 * - $feeds: Any feed icons or associated with the content
 * - $display: The complete panels display object containing all kinds of
 *   data including the contexts and all of the other panes being displayed.
 */
?>

<?php if ($pane_prefix): ?>
  <?php print $pane_prefix; ?>
<?php endif; ?>
<section id="baladecoco-reviews" class="baladecoco-section baladecoco-reviews <?php print $classes; ?>" <?php print $id; ?> <?php print $attributes; ?>>

  <?php if ($admin_links): ?>
    <?php print $admin_links; ?>
  <?php endif; ?>

  <div class="container">
    <?php print render($title_prefix); ?>
    <?php if ($title): ?>
      <h2<?php print $title_attributes; ?>>
        <a href="<?php print url('reviews'); ?>"><?php print $title; ?></a>
      </h2>
    <?php endif; ?>
    <?php print render($title_suffix); ?>

    <?php print render($content); ?>

    <?php if ($links): ?>
      <div class="links">
        <?php print $links; ?>
      </div>
    <?php endif; ?>

    <?php if ($more): ?>
      <div class="more-link">
        <?php print $more; ?>
      </div>
    <?php endif; ?>
  </div>
</section>
<?php if ($pane_suffix): ?>
  <?php print $pane_suffix; ?>
<?php endif; ?>
