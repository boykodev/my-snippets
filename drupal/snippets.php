<?php

/**
 * Drupal snippets:
 * #1 - module cache remove
 */
 
// #1 truncate module cache table
// THANKS http://drupal.stackexchange.com/a/168066/73346

/**
 * Implements hook_flush_caches().
 */
function mymodule_flush_caches() {
  register_shutdown_function('mymodule_cache_rebuild');
  return array();
}

/**
 * Rebuild expensive cache items that need to be rebuilt immediately.
 */
function mymodule_cache_rebuild() {
  db_truncate(MYMODULE_CACHE_TABLE)->execute();
}
