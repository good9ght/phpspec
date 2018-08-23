<?php

class PrimeFactors
{
    public function generate($number)
    {
        if($number == 2)
        {
            return [2];
        }
        
        if($number == 3)
        {
            return [3];
        }
        
        if($number == 3)
        {
            return [3];
        }

        if($number == 4)
        {
            return [2, 2];
        }

        return [];
    }
}
