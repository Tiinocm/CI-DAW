<?php

    class dni {
        
        private $numeros;
        private $letra;

        public function __construct($numeros, $letra) {
            
            $this->numeros = $numeros;
            $this->letra = $letra;

        }

        public function contarCaracteres() {
            
            $cuenta = strlen($this->numeros) + strlen($this->letra);
            

            if ($cuenta == 9) {

                return $cuenta;

            }else {
                
                return 'Cuenta DNI error';

            }
            

        }

        public function sacarLetra() {
            
            $numero = intval($this->numeros);

            $arrLetras = ["T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L", "C", "K", "E"];

            $resultado = $numero % 23;

            if ($this->letra == $arrLetras[$resultado]) {
                
                return $arrLetras[$resultado];

            }else {
                
                return 0;

            }

        }

    }
    


?>
