<?php

namespace Drupal\drupal_testsuite;

class DrupalTestSuite {
  public function double_strings($string) {
    return $string.$string;
  }

  public function capitalize($string) {
    return ucfirst($string);
  }

  public function generateHaystack() {
    return [
      'hack',
      'foo',
      'bar',
    ];
  }
}