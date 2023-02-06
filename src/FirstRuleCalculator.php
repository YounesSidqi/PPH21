<?php

namespace pph21;

class FirstRuleCalculator extends AbstractCalculator{

    function maxpkp(): float
    {
        return 50000000;
    }

    function minpkp(): float
    {
        return 0;
    }

    function taxPercentage(): float
    {
        return 0.05;
    }
}