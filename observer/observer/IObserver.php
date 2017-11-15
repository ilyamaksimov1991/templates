<?php
namespace observer;

use IObservervable;

interface IObserver{
    
    public function update(IObservervable $observervable);
}