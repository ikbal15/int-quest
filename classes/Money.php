<?php

class Money
{
    private $amount = 0;

    public function __construct($amount)
    {
        $this->amount = (float) $amount;
    }

    public function getValue()
    {
        return $this->amount;
    }
    
    public function setValue($amount)
    {
        $this->amount = $amount;
    }

    public function __toString()
    {
        return (string) $this->getValue();
    }
}