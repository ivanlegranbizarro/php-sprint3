<?php

class Duck
{

  public function quack()
  {
    echo "Quack \n";
  }

  public function fly()
  {
    echo "I'm flying \n";
  }
}


class Turkey
{

  public function gobble()
  {
    echo "Gobble gobble \n";
  }

  public function fly()
  {
    echo "I'm flying a short distance \n";
  }
}

function duck_interaction($duck)
{
  $duck->quack();
  $duck->fly();
}

class TurkeyAdapter extends Duck
{

  public function __construct(private Turkey $turkey)
  {
  }


  public function fly()
  {
    for ($i = 0; $i < 5; $i++) {
      $this->turkey->fly();
      echo '<br>';
    }
  }
}


$pavoPrimigenio = new Turkey;


echo $pavoPrimigenio->fly();

echo '<br>';

$pavoReformado = new TurkeyAdapter($pavoPrimigenio);

echo $pavoReformado->quack();

echo '<br>';

echo $pavoReformado->fly();
