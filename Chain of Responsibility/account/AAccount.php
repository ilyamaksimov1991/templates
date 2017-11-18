<?php
namespace account;

abstract class AAccount
{
    private $nextObject;
    private $balance;

    public function __construct($balance)
    {
        $this->balance = $balance;
    }

    public function nextObject(AAccount $object)
    {
        $this->nextObject = $object;
    }

    #ChainOfResponsibility
    public function pay($amount)
    {
        if ($this->balance >= $amount) {
            echo ' Оплата произведена ' . get_called_class();
        }else if($this->nextObject){
            echo ' Оплата не может быть произведена ' . get_called_class()."<br>";
            $this->nextObject->pay($amount);

        }else{
            throw new \Exception(' Ни на ожном аккаунте нет необходимого колличества денег ');
        }

    }
}