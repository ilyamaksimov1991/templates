<?php
namespace mediator;
use colleague\AColleague;
use colleague\ColleagueA;
use colleague\ColleagueB;
use colleague\ColleagueC;

class Mediator extends AMediator
{
    private $colleague1;
    private $colleague2;
    private $colleague3;

    public function setColleague1(ColleagueA $colleague)
    {
        $this->colleague1 = $colleague;
    }
    public function setColleague2(ColleagueB $colleague)
    {
        $this->colleague2 = $colleague;
    }
    public function setColleague3(ColleagueC $colleague)
    {
        $this->colleague3 = $colleague;
    }



    public function send($msg, AColleague $colleague)
    {
        if ($colleague ==$this->colleague1){
            $this->colleague2->notify($msg);
        } else if($colleague ==$this->colleague2){
            $this->colleague3->notify($msg);
        } else if($colleague ==$this->colleague3){
            $this->colleague1->notify($msg);
        }
    }
}