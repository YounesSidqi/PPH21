<?php

require __DIR__.'/vendor/autoload.php';


use pph21\FirstRuleCalculator;
use pph21\SecondRuleCalculator;
use pph21\ThirdRuleCalculator;
use pph21\FourthRuleCalculator;
use pph21\PPH21Calculator;

$first = new FirstRuleCalculator();
$second = new SecondRuleCalculator($first);
$third = new ThirdRuleCalculator($second);
$fourth = new FourthRuleCalculator($third);

$calculator = new PPH21Calculator($first, $second, $third, $fourth);

echo $calculator->calculate(400000000);
echo PHP_EOL;
