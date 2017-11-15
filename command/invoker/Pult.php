<?php
namespace invoker;

use \commands\ICommand;

class Pult
{
    private $command;
    private static $arrayCommand = [];

    public function __construct(ICommand $command)
    {
        $this->command = $command;
        self::$arrayCommand[] = $command;
        $this->command->execute();
    }

    public static function UndoСhannel()
    {
        if (count(self::$arrayCommand) >1) {
            $count= count(self::$arrayCommand);
            self::$arrayCommand[$count-2]->execute();

        } else {
            echo 'Вы только  включили пульт';
        }
    }
}