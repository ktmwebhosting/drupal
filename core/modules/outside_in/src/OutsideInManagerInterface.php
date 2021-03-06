<?php

namespace Drupal\outside_in;

/**
 * Provides an interface for managing information related to Outside-In.
 */
interface OutsideInManagerInterface {

  /**
   * Determines if the Outside-In logic should be run on the current page.
   *
   * @return bool
   *   TRUE if the Outside-In logic should be run.
   */
  public function isApplicable();

}
