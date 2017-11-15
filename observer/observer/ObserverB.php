<?php
namespace observer;
use IObservervable;

class ObserverB implements IObserver{
    private $t;
    private $d;

    public function update(IObservervable $observervable)
    {
        $this->t = $observervable->getT();
        $this->d = $observervable->getD();
        $this->display();
    }

    public function display()
    {
        echo 'Наблюдатель B сообщает что погода-'.$this->t.' Давление-'.$this->d.'<br>';
    }
}