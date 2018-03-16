<?php

/**
 * @file
 * Theme implementation to show forum legend.
 *
 */
?>

<div class="forum-topic-legend clearfix">

  <div id="forum-list-legend-header"><?php print t("Informaci&#243;n"); ?></div>

  <div id="forum-list-legend-sub-header" class="forum-list-legend-sub-header">
    <?php print t('Legenda de icono'); ?>
  </div>

  <div class="topic-icon-new"><?php print t('Nuevos mensajes'); ?></div>
  <div class="topic-icon-default"><?php print t('No hay mensajes nuevos'); ?></div>
  <div class="topic-icon-hot-new"><?php print t('Tema destacado con mensajes nuevos'); ?></div>
  <div class="topic-icon-hot"><?php print t('Tema destacado sin mensajes nuevos'); ?></div>
  <div class="topic-icon-sticky"><?php print t('Temas fijos'); ?></div>
  <div class="topic-icon-closed"><?php print t('Tema cerrado'); ?></div>
</div>


