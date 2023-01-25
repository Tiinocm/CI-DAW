<?php

use PHPUnit\Framework\TestCase;
include './src/dni.php';

class dniTest extends TestCase {

    public function testContarCaracteresOK() {
       
        $objeto = new dni('53890477', 'M');
        $this->assertEquals(9, $objeto->contarCaracteres());

    }
    
    public function testLetraOK() {
       
        $objeto = new dni('53890477', 'M');
        $this->assertEquals('M', $objeto->sacarLetra());

    }

    /*public function testContarCaracteresKO() {
       
        $objeto = new dni('5389047', 'M');
        $this->assertEquals(9, $objeto->contarCaracteres());

    }
    
    public function testLetraKO() {
       
        $objeto = new dni('53890477', 'J');
        $this->assertEquals('J', $objeto->sacarLetra());

    }*/

}


?>
