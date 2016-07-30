<?php

class BankAccount implements IfaceBankAccount
{

    private $balance = null;

    public function __construct(Money $openingBalance)
    {
        $this->balance = $openingBalance;
    }

    public function balance()
    {
        return $this->balance;
    }

    public function deposit(Money $amount)
    {
        $this->balance->setValue($this->balance->getValue() + $amount->getValue());
    }

    public function transfer(Money $amount, BankAccount $account)
    {
        if($this->balance->getValue() > $amount->getValue())
        {
            $this->balance->setValue($this->balance->getValue() - $amount->getValue());
            $account->balance->setValue($account->balance()->getValue() +  $amount->getValue());
        }
        else
        {
            
        }
    }

    public function withdraw(\Money $amount) {
        if($amount->getValue() < $this->balance->getValue())
        {
            $this->balance->setValue($this->balance->getValue() - $amount->getValue());
        }
        else
        {
            throw new Exception('Withdrawl amount larger than balance');
        }
    }

}