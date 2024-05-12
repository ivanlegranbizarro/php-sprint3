<?php

class RentarPlatsAMa
{

  public function __construct(public string $detergent, public array $platsBruts)
  {
  }

  public function ensabonar()
  {
    echo 'Estem ensabonant els plats bruts';
  }

  public function aclarir()
  {
    echo 'Estem aclarint els plats nets';
  }

  public function assecar()
  {
    echo 'Estem assecant els plats nets';
  }
}


class RentaPlatsFacade
{
  private RentarPlatsAMa $rentar_plats_a_ma;
  public function __construct()
  {
    $this->rentar_plats_a_ma = new RentarPlatsAMa('Pastilla detergente calgón', ['Plato Sucio 1', 'Plato Sucio 2', 'Vaso sucio 1']);
  }

  public function on()
  {
    echo 'Iniciant neteja de plats';
    $this->rentar_plats_a_ma->ensabonar();
    $this->rentar_plats_a_ma->aclarir();
    $this->rentar_plats_a_ma->assecar();
    echo 'Plats netejats';
  }
}
