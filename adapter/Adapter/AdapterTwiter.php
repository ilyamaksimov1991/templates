<?php
namespace Adapter;

class AdapterTwiter implements IAdapter
{
    private $link_obj;

    public function __construct()
    {
        $this->link_obj = new Twiter();
    }

    public function send()
    {
        return $this->link_obj->submitMsg();
    }
}