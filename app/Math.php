<?php


namespace App;



class Math
{
    public $calculate;


    public function __construct(\Calculator $calculate)
    {
        $this->calculate=$calculate;
    }

    public function getArea($length)
    {
        return $this->calculate->areaOfSquare();
    }
}