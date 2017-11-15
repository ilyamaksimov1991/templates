<?php
namespace colleague;


class ColleagueC extends AColleague
{
    public function notify($msg)
    {
        echo sprintf("Коллега С прислал сообщение %s\n", $msg);
    }
}