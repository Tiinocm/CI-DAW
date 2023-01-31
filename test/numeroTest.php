<?php

use PHPUnit\Framework\TestCase;
include './src/Numero.php';

class numeroTest extends TestCase {

    public function testDecremento() {
       
        $objeto = new Numero(100, 'positivo');
        $this->assertEquals(99, $objeto->decremento());

    }

    public function testDecremento2() {
       
        $objeto = new Numero(0, 'positivo');
        $this->assertEquals(-1, $objeto->decremento());
        $this->assertEquals('negativo', $objeto->estado);

    }

    
}


?>