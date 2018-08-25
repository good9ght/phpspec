<?php

namespace Acme;

class Tennis
{
    public $player1;
    public $player2;

    public function __construct($player1, $player2)
    {
        $this->player1 = $player1;
        $this->player2 = $player2;
    }

    public function score()
    {
        if($this->player1->points == 1 && $this->player2->points == 0) {
            return 'Fifteen-Love';
        }
        
        if($this->player1->points == 2 && $this->player2->points == 0) {
            return 'Thirty-Love';
        }
        
        if($this->player1->points == 3 && $this->player2->points == 0) {
            return 'Forty-Love';
        }

        return 'Love-All';
    }
}