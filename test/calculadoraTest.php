<?php
use PHPUnit\Framework\TestCase;

include 'Calculadora.php';

final class CalculadoraTest extends TestCase
{
    public function testSuma()
    {
        $calc = new Calculadora(3,4);
        $this->assertEquals(7, $calc->suma());
    }

    public function testSumaNeg()
    {
        $calc = new Calculadora(-3,-4);
        $this->assertEquals(-7, $calc->suma());
    }
    public function testResta()
    {
        $calc = new Calculadora(4, 3);
        $this->assertEquals(1, $calc->resta());
    }
    
    public function testMulti()
    {
        $calc = new Calculadora(4, 3);
        $this->assertEquals(12, $calc->multiplicar());
    }

    public function testDividir()
    {
        $calc = new Calculadora(4, 3);
        $this->assertEquals(1.3333333333333333, $calc->dividir());
    }
}
?>