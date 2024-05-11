<?php

require_once 'Cartera.php';
require_once 'ClausCasa.php';
require_once 'SmartPhone.php';
require_once 'TargetaTransport.php';

class JoSortintDeCasa
{
  public function __construct(
    private Cartera $cartera,
    private ClausCasa $clausCasa,
    private SmartPhone $smartPhone,
    private TargetaTransport $targetaTransport
  ) {
  }

  public function hoPortoTot()
  {
    return 'Quina meravella. Ho porto tot a sobre';
  }
}

$cartera = new Cartera;
$claus = new ClausCasa;
$smartPhone = new SmartPhone;
$targetaTransport = new TargetaTransport;

$joSortintDeCasa = new JoSortintDeCasa($cartera, $claus, $smartPhone, $targetaTransport);


echo $joSortintDeCasa->hoPortoTot();
