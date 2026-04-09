<?php
class Colaborador{
    public $nombre;
    protected $salarioBase;
    private $identificacion;
}
//colaboradores tiempo completo
 colaborador1 = new Colaborador();

//, colaboradores por comisión (salario = salario base + comisión
 colaborador2 = new Colaborador();

 //colaboradores por hora (salario = tarifa * hora).
 colaborador3 = new Colaborador();





public function __construct($nombre, $salarioBase, $identificacion)
{
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


