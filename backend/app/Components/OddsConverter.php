<?php

namespace App\Components;

class OddsConverter {
    public static function convertToDecimal($item) {
        if ($item < 0) {
            $item = -1/$item;
        }
        return round($item + 1, 2);
    }

    public static function convertHandicapValue($value) {
        if (is_null($value) || empty($value)) {
            return '';
        }
        if ($value === 0) {
            return 0;
        }
        $result = $value * 100;
        if ($result % 100 === 0) {
            return "$value.0";
        }

        if ($result % 50 === 0) {
            return "$value";
        }

        return ($value - 0.25).'-'.($value + 0.25);
    }

    public static function calculateLose($amount, $value) {
        if ($value > 0) {
            return $amount;
        }

        return abs($value * $amount);
    }
}