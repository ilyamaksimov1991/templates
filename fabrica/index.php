<?php
include "Autoload.php";
include "ButtonFactury.php";
//echo 'hello world!!!';

ButtonFactury::createButton('success')->getHtml();
echo '<br><br>';
ButtonFactury::createButton('default')->getHtml();
echo '<br><br>';
ButtonFactury::createButton('info')->getHtml();
  //writeln('Начинаем тестировать паттерн Абстрактная фабрика');


