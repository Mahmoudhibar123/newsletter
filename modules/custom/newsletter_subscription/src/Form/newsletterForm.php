<?php

namespace Drupal\newsletter_subscription\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Entity\EntityTypeManager;

/**
 * class newsletterForm
 */
class newsletterForm extends FormBase
{
  /**
   * {@inheritdoc}
   */
  public function getFormId() {
      return 'newsletter_subscription_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state)
  {
    $list = \Drupal\Core\Locale\CountryManager::getStandardList();
    $form['email'] = array(

        '#title' => t('Email'),
        '#type' => 'Email',
        '#required' => true,
    );
    $form['Firstname'] = array(

        '#title' => t('Firstname'),
        '#type' => 'textfield',
        '#required' => true,
    );
    $form['Lastname'] = array(

        '#title' => t('Lastname'),
        '#type' => 'textfield',
        '#required' => true,
    );
    $form['country'] = array (
        '#type' => 'select',
        '#title' => t('Country'),
        '#options' => $list,
        '#required' => true,
    );

    $form['Agree'] = [
      '#type' => 'checkbox',
      '#description' => $this->t('I agree to the terms and conditions of the newsletter'),
      '#required' => true,

    ];
    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array(
        '#type' => 'submit',
        '#value' => $this->t('Subscribe'),
        '#button_type' => 'primary',
    );


    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->messenger()->addStatus($this->t('You have sign in'));
  }
}


?>
