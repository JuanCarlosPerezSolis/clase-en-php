<?php

class clasebicicletas{
  /*atributos*/
private $colordebici;
private $tipodebici;
private $tamaño;
private $colorllantas;
private $tienecambios;
private $tipodefreno;
private $tipodemanubio;
private $materialdelasiento;
/*constructor*/
public function clasebicicletas ($colordebici,$tipodebici,$tamaño,$colorllantas
	,$tienecambios,$tipodefreno,$tipodemanubio,$materialdelasiento){

$this->colordebici=$colordebici;
$this->tipodebici=$tipodebici;
$this->tamaño=$tamaño;
$this->colorllantas=$colorllantas;
$this->tienecambios=$tienecambios;
$this->tipodefreno=$tipodefreno;
$this->tipodemanubio=$tipodemanubio;
$this->materialdelasiento=$materialdelasiento;
}
/*metodo*/
public function getColordebici(){
  return $this->colordebici;
}
public function getTipodebici(){
  return $this->tipodebici;
}
public function getTamaño(){
  return $this->tamaño;
}
public function getColorllantas(){
  return $this->colorllantas;
}
public function getTienecambios(){
  return $this->tienecambios;
}
public function getTipodefreno(){
  return $this->tipodefreno;
}
public function getTipodemanubio(){
  return $this->tipodemanubio;
}
public function getMaterialdelasiento(){
  return $this->materialdelasiento;
}
}
