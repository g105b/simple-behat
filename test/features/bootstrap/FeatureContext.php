<?php

use Behat\Behat\Context\Context;
use Behat\MinkExtension\Context\MinkContext;

class FeatureContext extends MinkContext implements Context {
	/**
	 * @Given /^I fill in the name field with "([^"]*)"$/
	 */
	public function iFillInTheNameFieldWith($name) {
		$input = $this->getSession()->getPage()->find("css", "input");
		$input->setValue($name);
	}
}