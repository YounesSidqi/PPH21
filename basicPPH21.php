<?php

class PPH21Calculator {

    private function firstrule(float $pkp) : float
    {
        if(0 < $pkp && 50000000 >= $pkp) {
            return $pkp * 0.05;
        }
        return 0;
    }

    private function secondrule(float $pkp) : float 
    {
        if(50000000 < $pkp && 250000000 >= $pkp) {
            $pkp -= 50000000;
            $prev = $this->firstrule(50000000);
            return ($pkp * 0.15) + $prev;
        }
        return 0;
    }

    private function thirdrule(float $pkp) : float
    {
        if(250000000 < $pkp && 500000000 >= $pkp) {
            $pkp -= 250000000;
            $prev = $this->secondrule(250000000);
            return ($pkp * 0.25) + $prev;
        }
        return 0;
    }

    private function fourthrule(float $pkp) : float
    {
        if(500000000 < $pkp && 100000000000000 >= $pkp) {
            $pkp -= 500000000;
            $prev = $this->thirdrule(500000000);
            return ($pkp * 0.3) + $prev;
        }
        return 0;
    }


    public function Calculate(float $pkp) : float
    {
        return $this->firstrule($pkp) ?: $this->secondrule($pkp) ?: $this->thirdrule($pkp) ?: $this->fourthrule($pkp);
    }
}

$pph21 = new PPH21Calculator();

echo $pph21->Calculate(100000);
echo PHP_EOL;

echo $pph21->Calculate(100000000);
echo PHP_EOL;

echo $pph21->Calculate(10000000000);
echo PHP_EOL;