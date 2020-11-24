<?php


use zhigulin\MyLog;
use zhigulin\Square;
use zhigulin\ZhigulinException;

include "core/EquationInterface.php";
include "core/LogInterface.php";
include "core/LogAbstract.php";
include "zhigulin/Linear.php";
include "zhigulin/Square.php";
include "zhigulin/MyLog.php";
include "zhigulin/ZhigulinException.php";

ini_set("display_errors", 1);
error_reporting(-1);

$b = new Square();
try {

	$version = file_get_context("version.txt");
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