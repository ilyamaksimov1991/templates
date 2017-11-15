<?php
include_once 'Autoload.php';
//use state\UpperState;


$state = new TextEditor(new UpperState());
$state->editorState('Это первая строка');

echo '<br>';
$state = new TextEditor(new StrongState());
$state->editorState('Это вторая  строка');

echo '<br>';

$state = new TextEditor(new LoverState());
$state->editorState('Это первая строка');