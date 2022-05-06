<?php

namespace Drupal\newsletter_subscription\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'registration' Block.
 *
 * @Block(
 *   id = "form_block",
 *   admin_label = @Translation("Registration block"),
 *   category = @Translation("Registration"),
 * )
 */
class RegistrationBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $form = \Drupal::formBuilder()->getForm('\Drupal\newsletter_subscription\Form\newsletterForm');
    return $form;
  }

}
