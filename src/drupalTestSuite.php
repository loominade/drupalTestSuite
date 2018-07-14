<?php

namespace Drupal\drupal_test_suite;

class DrupalTestSuite {
  public function double_strings($string) {
    return $string.$string;
  }

  public function capitalize($string) {
    return ucfirst($string);
  }
}