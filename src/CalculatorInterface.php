<?php

namespace pph21;
interface CalculatorInterface {

    function calculate(float $pkp) : float;

    function maxpkp(): float;
    function minpkp(): float;

    function taxPercentage() : float;

}