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

zhigulin\MyLog::log("1234");
zhigulin\MyLog::write();
?>