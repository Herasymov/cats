<?php

/**
 * @file
 * Display a single Drupal page.
 */
?>

<div class="maincontent">
    <?php dpm($page, 'fghj'); ?>
  <?php if ($page['header']): ?>
      <div class="header">
        <?php print render($page['header']); ?>
      </div>
  <?php endif; ?>
</div>
