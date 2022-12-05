<?php

if (! function_exists('getData')) {
    function getData() {
        return (mt_rand() / mt_getrandmax()) + 0.5;
    }
}

if (! function_exists('getConsumption')) {
    function getConsumption() {
        return rand(156999, 200000);
    }
}

if (! function_exists('updateConsumption')) {
    function updateConsumption($value) {
        return $value + rand(100, 1000);
    }
}