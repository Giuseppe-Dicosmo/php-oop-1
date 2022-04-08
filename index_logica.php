<?php
class Movie
{
  public $imgLoca;
  public $titolo;
  public $anno_uscita;
  public $categoria;
  public $nazione;
  public $descrizione;
  public $cast = [];

  function __construct(string $imgLoca, string $_titolo, int $_anno_uscita, string $_categoria, string $_nazione, string $_descrizione)
  {
    $this->imgLoca = $imgLoca;
    $this->titolo = $_titolo;
    $this->anno_uscita = $_anno_uscita;
    $this->categoria = $_categoria;
    $this->nazione = $_nazione;
    $this->descrizione = $_descrizione;
  }
}

$locandina = new Movie(
  "https://picsum.photos/seed/picsum/200/300",
  "Natale in Puglia",
  2022,
  "Comico",
  "Italia",
  "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, velit corrupti consectetur minus repellat deserunt esse mollitia temporibus facilis quae excepturi harum necessitatibus cum saepe consequatur earum, odit tenetur ea!"
);

$locandina = new Movie(
  "https://picsum.photos/seed/picsum/200/300",
  "Natale in gioco",
  1960,
  "tragico",
  "Italia",
  "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, velit corrupti consectetur minus repellat deserunt esse mollitia temporibus facilis quae excepturi harum necessitatibus cum saepe consequatur earum, odit tenetur ea!"
);
