<?php

namespace pph21;

class ThirdRuleCalculator extends AbstractCalculator{

    function maxpkp(): float
    {
        return 5000000000;
    }

    function minpkp(): float
    {
        return 250000000;
    }

    function taxPercentage(): float
    {
        return 0.25;
    }
}