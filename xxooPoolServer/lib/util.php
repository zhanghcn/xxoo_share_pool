<?php

function res($code, $msg, $data = null)
{
    header('Content-Type:application/json; charset=utf-8');
    die(json_encode(['code' => $code, 'msg' => $msg, 'data' => $data]));
}

function dieJson($data)
{
    header('Content-Type:application/json; charset=utf-8');
    return die(json_encode($data));
}

function test(&$testData, $key, $data)
{
    if ($_GET['devTest']) {
        $testData[$key] = $data;
    }
}

function slog(&$res,$str)
{
    $res['data'] = $res['data'] . "# log=>${str}
";
}
function resAppend(&$res,$appendStr){
    $res['data'] = $res['data'] . $appendStr;
}

function testDie($data)
{
    if ($_GET['devTest']) {
        dieJson($data);
    }
}

function isTest()
{
    if ($_GET['devTest']) {
        return true;
    } else {
        return false;
    }
}

function arrayPushArray(&$array, $addArray)
{
    foreach ($addArray as $v) {
        array_push($array, $v);
    }
    return $array;
}

function resRaw($data)
{
    die($data);
}


function startsWith($haystack, $needle)
{
    $length = strlen($needle);
    return (substr($haystack, 0, $length) === $needle);
}

function endsWith($haystack, $needle)
{
    $length = strlen($needle);
    if ($length == 0) {
        return true;
    }

    return (substr($haystack, -$length) === $needle);
}