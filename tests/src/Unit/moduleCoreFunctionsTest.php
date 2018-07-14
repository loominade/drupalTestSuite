<?php

use Drupal\drupal_testsuite\DrupalTestSuite;
use Drupal\Tests\UnitTestCase;

require_once (__DIR__ . '/../../../drupal_testsuite.module');

class moduleCoreFunctionsTest extends UnitTestCase {
  public function testIfTwoStringsAreEqual() {
    $dTS = new DrupalTestSuite();
    $this->assertEquals('timtim', $dTS->double_strings('tim'));
  }

  public function testIfQuadrupleWorks() {
    $dTS = new DrupalTestSuite();
    $this->assertEquals('Tim', $dTS->capitalize('tim'));
  }

  public function testGiveBackABC() {
    $this->assertEquals('ABC', giveBackABC());
  }
}