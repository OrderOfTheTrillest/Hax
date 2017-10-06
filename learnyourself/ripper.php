<?php

// First we gon make that Ripper class
class Ripper
{
    
    // Nek we gon make snorto function
    public function snorto(string $fint) {
        echo 'Carn the '.$fint.'s!';
    }
}

// Now we gon make us $ripper
$ripper = new Ripper;

// Now we gon fint us a docker
$fint = 'docker';

// Now we let the ripper give us snorto and we give it the fint
$ripper->snorto($fint);

// That outputs "Carn the dockers!" for real


// We can give snorto a fint called any ting not fint as well
// For e.g. we make a gandle
$gandle = "Swag";

// Then we give the gandle to snorto
// Snorto don care what fint called just that fint get
$ripper->snorto($gandle);

// That outputs "Carn the Swags!" ever more real
// BELIEVE
