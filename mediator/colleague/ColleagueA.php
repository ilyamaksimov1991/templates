<?php
namespace colleague;


class ColleagueA extends AColleague
{
    public function notify($msg)
    {
        echo sprintf("Коллега A прислал сообщение %s\n", $msg);
    }
}