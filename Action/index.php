<?php
function  action1()
{
    echo "111";
}
function  action2()
{
    echo "222";
}
if(!isset($_GET["action"]) || !function_exists($_GET["action"]))
{
    exit();
}

$_GET["action"]();