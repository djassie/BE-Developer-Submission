<?php

namespace Drupal\sales_workflow\Plugin\EmailBuilder;

use Drupal\symfony_mailer\EmailInterface;
use Drupal\symfony_mailer\Processor\EmailBuilderBase;
use Drupal\symfony_mailer\Processor\TokenProcessorTrait;

/**
 * @EmailBuilder(
 *   id = "sales_email_update",
 *   sub_types = {
 *     "new" = @Translation("New Sales Quote"),
 *     "update" = @Translation("Update Sales Quote"),
 *   },
 *   common_adjusters = {"email_subject", "email_body"},
 * )
 */
class SalesEmailBuilder extends EmailBuilderBase {

  use TokenProcessorTrait;

  public function createParams(EmailInterface $email, $to = NULL) {
    if ($to) {
      $email->setParam('to', $to);
    }
  }

  /**
   * {@inheritdoc}
   */
  public function build(EmailInterface $email) {
    if ($to = $email->getParam('to')) {
      $email->setTo($to);
    }
    $user = \Drupal::currentUser();
    $email->setVariable('userName', $user->getAccountName());
  }

}
