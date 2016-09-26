<?php
/**
 * Created by PhpStorm.
 * User: T. Drion
 * Date: 26-9-2016
 * Time: 11:36
 */

function convertResultToArray($DBResult)
{
    $resultArray = array();

    while($row = $DBResult->fetch_assoc())
    {
        $resultArray[] = $row;
    }




    return $resultArray;
}