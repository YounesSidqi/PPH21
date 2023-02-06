<?php

namespace pph21;


class FourthRuleCalculator extends AbstractCalculator{

    function maxpkp(): float
    {
        return 50000000000;
    }

    function minpkp(): float
    {
        return 5000000000;
    }

    function taxPercentage(): float
    {
        return 0.3;
    }
}