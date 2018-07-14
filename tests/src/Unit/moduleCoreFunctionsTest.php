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

  //Need to fail to print out the message.
  public function testMessage() {
    $this->assertEmpty(NULL, 'this is a test message');
  }

  public function testGreaterThan () {
    $this->assertGreaterThan(3, 5);
  }

  public function testFilesNotEqual () {
    $this->assertFileNotEquals(__DIR__ . '/../../../drupal_testsuite.module', __DIR__ . '/../../../drupal_testsuite.info.yml');
  }


}