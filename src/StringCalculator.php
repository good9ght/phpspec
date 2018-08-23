<?php

class StringCalculator
{
    const MAX_NUMBER_ALLOWED = 1000;

    public function add($numbers)
    {
        $numbers = preg_split('/\s*(,|\\\n)\s*/', $numbers);

        $solution = 0;
 
        foreach($numbers as $number)
        {

            $this->guardAgainstInvalidNumber($number);
            if($number >= self::MAX_NUMBER_ALLOWED) {
                continue;
            }

            $solution += (int) $number;
        }

        return $solution;
    } 

    public function guardAgainstInvalidNumber($number) {
        if($number < 0) {
            throw new InvalidArgumentException;
        }
    }

}
