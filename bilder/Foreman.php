<?php
use \builder\Builder;

class Foreman
{
    private $builder;

    public function __construct(Builder $builder)
    {
        $this->builder = $builder;
    }
    
    public function Construct()
    {
        $this->builder->buildRoof();
        $this->builder->buildWall();
        $this->builder->buildFooter();
    }

}