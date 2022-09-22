<?php

namespace Drupal\rocketship_module\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for rocketship_module routes.
 */
class RocketshipModuleController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
