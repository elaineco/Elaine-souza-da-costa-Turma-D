<?php

class Empregado
{
    private $nome;
    private $sobrenome;
    private $salarioMensal;

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome)
    {
        $this->sobrenome = $sobrenome;
    }

    public function getSalarioMensal()
    {
        return $this->salarioMensal;
    }

    public function setSalarioMensal($salarioMensal)
    {
        $this->salarioMensal = $salarioMensal;
    }

    public function calcularSalarioAnual()
    {
        return $this->salarioMensal * 12;
    }

    public function aplicarAumento($percentual)
    {
        $aumento = $this->salarioMensal * ($percentual / 100);
        $this->salarioMensal += $aumento;
    }
}


$empregado1 = new Empregado();
$empregado1->setNome("João");
$empregado1->setSobrenome("Batista");
$empregado1->setSalarioMensal(3000);

$empregado2 = new Empregado();
$empregado2->setNome("julia");
$empregado2->setSobrenome("Silva");
$empregado2->setSalarioMensal(4000);


echo "Salário anual do empregado 1: $" . $empregado1->calcularSalarioAnual() . "<\n>";
echo "Salário anual do empregado 2: $" . $empregado2->calcularSalarioAnual() . "<\n>";


$empregado1->aplicarAumento(10);
$empregado2->aplicarAumento(10);

echo "Salário anual do empregado 1 após aumento: $" . $empregado1->calcularSalarioAnual() . "<\n>";
echo "Salário anual do empregado 2 após aumento: $" . $empregado2->calcularSalarioAnual() . "<\n>";
?>