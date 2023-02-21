<?php

namespace Deg540\PHPTestingBoilerplate;

class StringCalculator
{
    public function Add($numbers): int
    {
        if ($numbers == "")
            return 0;
        else if (substr($numbers, 0, 2) == "//") {
            $positionBreak = strpos($numbers, "\n");
            $arrayOfNumbers = explode(substr($numbers, 2, $positionBreak - 2), substr($numbers, $positionBreak));
            return array_sum($arrayOfNumbers);
        } else {
            $arrayOfNumbers = explode(',', str_replace("\n", ',', $numbers));

            return array_sum($arrayOfNumbers);
        }
    }
}