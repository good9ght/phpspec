<?php

namespace spec;

use StringCalculator;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class StringCalculatorSpec extends ObjectBehavior
{
    function it_translates_an_empty_string_into_0()
    {
        $this->add('')->shouldEqual(0);
    }
    
    function it_finds_the_sum_of_one_number()
    {
        $this->add('5')->shouldEqual(5);
    }
    
    function it_finds_the_sum_of_two_number()
    {
        $this->add('1,2')->shouldEqual(3);
    }

    function it_finds_the_sum_of_any_number()
    {
        $this->add('1,2,3,4,5')->shouldEqual(15);
    }

    function it_disallows_negative_numbers()
    {
        $this->shouldThrow('InvalidArgumentException')->duringAdd('3,-2');
    }

    function it_ignores_any_number_that_is_1000_or_greater()
    {
        $this->add('2,2,1000')->shouldEqual(4);
    }

    function it_allows_for_new_line_delimiters()
    {
        $this->add('2,2\n2')->shouldEqual(6);
    }
}
