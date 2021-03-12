<?php

/**
 * @file
 * Documentation for hooks provided by Uptime Monitoring.
 *
 * This file contains no working PHP code; it exists to provide additional
 * documentation for doxygen as well as to document hooks in the standard
 * Drupal manner.
 */

/**
 * Define a test that can be reported via the Uptime Monitor module.
 *
 * @return string|bool
 *   A message that will be passed along if test fails, or TRUE if test passes.
 */
function hook_uptime_monitor_check() {
  /* Add logic here */
  return TRUE;
}
