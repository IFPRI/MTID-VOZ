<?php

/**
 * @file
 * Theme implementation to show forum legend.
 *
 */
?>

<div class="forum-list-icon-legend clearfix">

  <div id="forum-list-legend-header"><?php print t("Informaci&#243;n"); ?></div>

  <div id="forum-list-legend-sub-header" class="forum-list-legend-sub-header">
    <?php print t('Legenda de icono'); ?>
  </div>

  <div class="forum-list-legend-item">
    <span class="forum-list-icon-wrapper">
      <span class="forum-list-icon-new-posts">
      </span>
    </span>

    <span class="forum-list-text-legend-new-posts">
      <?php print t('Nuevos mensajes'); ?>
    </span>
  </div>

  <div class="forum-list-legend-item">
    <span class="forum-list-icon-wrapper">
      <span class="forum-list-icon-default">
      </span>
    </span>

    <span class="forum-list-text-legend-default">
      <?php print t('No hay mensajes nuevos'); ?>
    </span>
  </div>
</div>
