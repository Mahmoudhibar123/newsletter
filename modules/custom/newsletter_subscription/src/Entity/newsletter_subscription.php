<?php

namespace Drupal\newsletter_subscription\Entity;

use Drupal\Core\Entity\ContentEntityBase;
use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Entity\ContentEntityInterface;

/**
 * Defines the newsletter_subscription entity.
 *
 * @ingroup newsletter_subscription
 *
 * @ContentEntityType(
 *   id = "newsletter_subscription",
 *   label = @Translation("newsletter_subscription"),
 *   base_table = "subscription",
 *   entity_keys = {
 *     "id" = "id",
 *     "uuid" = "uuid",
 *   },
 * )
 */

class newsletter_subscription extends ContentEntityBase implements ContentEntityInterface {

  public static function baseFieldDefinitions(EntityTypeInterface $entity_type) {

    // Standard field, used as unique if primary index.
    $fields['id'] = BaseFieldDefinition::create('integer')
      ->setLabel(t('ID'))
      ->setReadOnly(TRUE);

    $fields['email'] = BaseFieldDefinition::create('email')
      ->setLabel(t('Email'))
      ->setReadOnly(TRUE);

    $fields['first_name'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Firstname'))
      ->setReadOnly(TRUE);
    $fields['last_name'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Lastname'))
      ->setReadOnly(TRUE);
    $fields['country'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Country'))
      ->setReadOnly(TRUE);


    return $fields;
  }
}
