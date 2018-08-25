<?php

namespace Acme;

class Tennis
{
    protected $player1;
    protected $player2;
    protected $lookup = [
        '0' => 'Love',
        '1' => 'Fifteen',
        '2' => 'Thirty',
        '3' => 'Forty'
    ];

    public function __construct($player1, $player2)
    {
        $this->player1 = $player1;
        $this->player2 = $player2;
    }

    public function score()
    {
        $score = $this->lookup[$this->player1->points] . '-';
        return $score .= $this->player1->points == $this->player2->points ? 'All' : $this->lookup[$this->player2->points];
    }
}
