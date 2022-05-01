<?php

namespace Drupal\newsletter_subscription\Controller;

use Drupal\Core\Controller\ControllerBase;
/**
 *
 */
class newsletterController extends ControllerBase
{

  function show()
  {
    return [
         '#type' => 'markup',
         '#markup' => $this->t('Hello, World!'),
       ];  }
}

 ?>
