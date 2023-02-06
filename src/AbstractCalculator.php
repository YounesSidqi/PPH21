<?php

namespace pph21;


abstract class AbstractCalculator implements CalculatorInterface {
    private $chain;

    public function __construct(?CalculatorInterface $chain = null)
    {
        $this->chain = $chain;
    }

    function calculate(float $pkp): float
    {
        $previousValue = 0;
        if($previous = $this->chain) {
            $previousValue = $this->chain->calculate($previous->maxpkp());
            $pkp -= $previous->maxpkp();
        }

        return ($this->taxPercentage() * $pkp) + $previousValue;
    }
}