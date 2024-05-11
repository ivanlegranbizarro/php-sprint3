<?php

class Tigger
{
  private static $instance;
  private int $counter = 0;

  private function __construct()
  {
    echo "Building character..." . PHP_EOL;
  }

  public static function getInstance()
  {
    if (!isset(self::$instance)) {
      self::$instance = new self();
    }
    return self::$instance;
  }

  public function roar()
  {
    $this->counter++;
    echo "Grrr!" . PHP_EOL;
  }

  public function getCounter()
  {
    return $this->counter . PHP_EOL;
  }
}


$tigger1 = Tigger::getInstance();


echo $tigger1->roar();
echo $tigger1->roar();

echo $tigger1->getCounter();
