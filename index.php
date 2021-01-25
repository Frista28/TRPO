<?php


use zhigulin\MyLog;
use zhigulin\Square;
use zhigulin\ZhigulinException;

require_once(__DIR__."/vendor/autoload.php");

ini_set("display_errors", 1);
error_reporting(-1);

$b = new Square();
try {

	$version = file_get_contents("version");
    	MyLog::log("Версия программы ".$version);

    $values = array();
    for ($i = 1; $i < 4; $i++) {
        echo "Введите " . $i . "-й аргумент:";
        $j = readline();
        if ($j == '') $values[] = 0;
        else $values[] = $j;
    }


    MyLog::log("Введено уравнение " . $values[0] . "x^2+" . $values[1] . "x+" . $values[2]);

    $x = $b->solve($values[0], $values[1], $values[2]);


    $str = implode(", ", $x);
    MyLog::log("Корни уравнения: " . $str);

} catch (ZhigulinException $e) {
    MyLog::log($e->getMessage());
}
zhigulin\MyLog::write();
?>