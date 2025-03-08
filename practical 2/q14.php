<?php
    class calculator
    {
        private $n1,$n2;

        function __construct($a,$b)
        {
            $this->n1 = $a;
            $this->n2 = $b;
        }

        function add()
        {
            return $this->n1 + $this->n2;
        }

        function subtract()
        {
            return $this->n1 - $this->n2;
        }

        function multiply()
        {
            return $this->n1 * $this->n2;
        }

        function divide()
        {
            return $this->n2 !=0 ? $this->n1 / $this->n2 : "cannot divide by zero";
        }

    }

    $calc = new calculator(12,6);

    echo "addition = " .$calc->add(). "<br>";

    echo "multiply = " .$calc->multiply();
?>