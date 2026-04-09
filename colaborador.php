<?php
class Colaborador{
    public $nombre;
    protected $salarioBase;
    private $identificacion;
}
 colaborador1 = new Colaborador();
 colaborador2 = new 


    public function __construct($nombre, $salarioBase, $identificacion){
        $this->nombre = $nombre;
        $this->salarioBase = $salarioBase;
        $this->identificacion = $identificacion;
}
public function getIdenteficacion()
{
    return  $this->identificacion;
}

public function getNombre()
{
    return $this->nombre;
}

public function getSalarioBase()
{
    return $this->salarioBase;
}

abstract public function calcularSalar