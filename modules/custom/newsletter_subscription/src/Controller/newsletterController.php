<?php

namespace Drupal\newsletter_subscription\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class newsletterController.
 */
class newsletterController extends ControllerBase
{

  function list()
  {

    /**$database = \Drupal::database();
    $query = $database->select('subscription', 'sub')
      ->fields('sub', ['id', 'email', 'first_name', 'last_name', 'country']);
    $result = $query->execute();*/
    $table ='subscription';
    $db = \Drupal::database();
    $query = $db->query("SELECT id, first_name, last_name, country, email FROM {$table}");
    $result = $query->fetchAll();

    dump($result['id']);
    $build = [
      //'#theme' => 'newsletter_list',
      //'#items' => $items,
      '#markup' => $this->t('Hello World!'),
    ];
    return $build;
  }
}
