<?php
use \observer\IObserver;

class ConcretObservervable implements IObservervable
{
    private $t;
    private $d;
    private $observerList = [];

    public function addObserver(IObserver $observer)
    {
        $this->observerList[] = $observer;
    }

    public function removeObserver(IObserver $observer)
    {
        foreach ($this->observerList as $key => $value) {
            if ($value === $observer) {
                unset($this->observerList[$key]);
            }
        }
    }

    public function notifyObserver()
    {
        foreach ($this->observerList as $observer) {
            $observer->update($this);
        }

    }

    public function setParams($aTemperature, $aPressure)
    {
        $this->t = $aTemperature;
        $this->d = $aPressure;
        $this->notifyObserver();
    }

    public function getT()
    {
        return $this->t;

    }
    public function getD()
    {
        return $this->d;

    }

}