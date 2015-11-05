<?php

class FeatureContext extends Behat\MinkExtension\Context\MinkContext
{
     /**
   * @When /^I search for "([^"]*)"$/
   */
  public function iSearchFor($arg1)
  {
    $this->fillField('Search Drupal.org', $arg1);
    $this->pressButton('Search');
  }
}
