<?php
use observer\IObserver;
interface IObservervable
{

    public function addObserver(IObserver $observer);

    public function removeObserver(IObserver $observer);

    public function notifyObserver();
}
