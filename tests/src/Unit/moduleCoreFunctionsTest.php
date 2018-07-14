<?php

use Drupal\drupal_testsuite\DrupalTestSuite;
use Drupal\Tests\UnitTestCase;

require_once (__DIR__ . '/../../../drupal_testsuite.module');

class moduleCoreFunctionsTest extends UnitTestCase {
  public function testDoubleStringsFunction() {
    $dTS = new DrupalTestSuite();
    $this->assertEquals('timtim', $dTS->double_strings('tim'));
  }

  public function testCapitalizeFunction() {
    $dTS = new DrupalTestSuite();
    $this->assertEquals('Tim', $dTS->capitalize('tim'));
  }

  public function testGiveBackABC() {
    $this->assertEquals('ABC', giveBackABC());
  }

  public function testArrayContaints() {
    $dTs = new DrupalTestSuite();
    $this->assertNotContains('baz', $dTs->generateHaystack());
  }
}