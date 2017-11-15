<?php

namespace sectionHouse;

class House
{
    public $parts = [];

    public function addParts($partsHouse)
    {
        $this->parts[] = $partsHouse;
    }

}