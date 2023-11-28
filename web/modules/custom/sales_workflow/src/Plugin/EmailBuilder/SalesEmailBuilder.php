<?php

namespace Drupal\sales_workflow\Plugin\EmailBuilder;

use Drupal\symfony_mailer\EmailInterface;
use Drupal\symfony_mailer\Processor\EmailBuilderBase;
use Drupal\symfony_mailer\Processor\TokenProcessorTrait;
use Drupal\user\UserInterface;
use Drupal\node\NodeInterface;

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

  public function createParams(EmailInterface $email, UserInterface $user = NULL, NodeInterface $node = NULL) {
    // if ($to) {
    //   $email->setParam('to', $to);
    // }
    assert($user != NULL);
    assert($node != NULL);
    if ($user) {
      $email->setParam('user_entity', $user);
    }
    if($node){
      $email->setParam('node_entity', $node);
    }
  }

  /**
   * {@inheritdoc}
   */
  public function build(EmailInterface $email) {
    // if ($to = $email->getParam('to')) {
    //   $email->setTo($to);
    // }
    $user = $email->getParam('user_entity');
    $node = $email->getParam('node_entity');
    // $user = \Drupal::currentUser();
    $email->setTo($user->getEmail())
      ->setBodyEntity($node, 'email')
      ->setVariable('userName', $user->getAccountName())
      ->setVariable('contentUrl', $node->toUrl()->toString())
      ->setVariable('contentTitle', $node->getTitle());
    // $email->setVariable('userName', $user->getAccountName());
  }

}
