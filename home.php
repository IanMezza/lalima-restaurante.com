<?php
/* home.php */
$context = array();

/**
 * Fecha
 */
$context['date'] = date_i18n('j \d\e F \d\e Y', time());
/**
 * Next/Recent events
 */
$context['promoEvents'] = Timber::get_posts('cat=4&numberposts=2');
/**
 * Popular dishes
 */
$context['popularDishes'] = Timber::get_posts('cat=2&numberposts=4');
/**
 * Laest dishes
 */
$context['latestDishes'] = Timber::get_posts('cat=3&numberposts=3');
/**
 * Renderea la plantilla
 */
Timber::render('home.twig', $context);
