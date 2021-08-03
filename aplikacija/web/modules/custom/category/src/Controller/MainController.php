<?php

namespace Drupal\category\Controller;

use Drupal\Core\Controller\ControllerBase;

class MainController extends ControllerBase
{
  public function myPage()
  {
    return [
      '#markup' => 'Hello, world',
    ];
  }
}
