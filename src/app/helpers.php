<?php

if (!function_exists('formatNumber')) {
    function formatNumber($number) {
        if ($number >= 1000) {
            return number_format($number / 1000) . 'K';
        }
        return $number;
    }
}