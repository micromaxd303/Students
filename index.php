<?php
declare(strict_types=1);

require_once "classes/StudentClass.php";

$lesson = new StudentClass(1, "Олежек", 13);
$lesson->sleep();
$lesson = new StudentClass(0, "Наталья", 46);
$lesson->talking();
$lesson = new StudentClass(1, "Максим", 13);
$lesson->playing();
$lesson = new StudentClass(1, "Влад", 16);
$lesson->learning();
$lesson = new StudentClass(1, "Никита", 8);
$lesson->flexing();




