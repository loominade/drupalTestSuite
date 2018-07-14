<?php

use Drupal\drupal_test_suite\DrupalTestSuite;
use Drupal\Tests\UnitTestCase;

class moduleCoreFunctionsTest extends UnitTestCase {
  public function testIfTwoStringsAreEqual() {
    $dTS = new DrupalTestSuite();
    $this->assertEquals('timtim', $dTS->double_strings('tim'));
  }

  public function testIfQuadrupleWorks() {
    $dTS = new DrupalTestSuite();
    $this->assertEquals('Tim', $dTS->capitalize('tim'));
  }
}