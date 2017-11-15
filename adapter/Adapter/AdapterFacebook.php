<?php
namespace Adapter;

class AdapterFacebook implements IAdapter
{
    private $link_obj;

    public function __construct()
    {
        $this->link_obj = new Facebook();
    }

    public function send()
    {
        return $this->link_obj->mailMsg();
    }
}