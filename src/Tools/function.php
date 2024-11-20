<?php

if (!function_exists('split_to_yuan')) {
    /**
     * 分转元
     *
     * @param     $value
     * @param int $float
     *
     * @return string
     */
    function split_to_yuan($value, int $float = 2): string
    {
        return $value ? sprintf("%." . $float . "f", $value / 100) : sprintf("%." . $float . "f", 0);
    }
}
