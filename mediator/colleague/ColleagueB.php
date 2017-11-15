<?php
namespace colleague;


class ColleagueB extends AColleague
{
    public function notify($msg)
    {
        echo sprintf("Коллега В прислал сообщение %s\n", $msg);
    }
}