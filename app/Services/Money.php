<?php


namespace App\Services;


class Money
{
    /**
     * Converts long money formats to short once. The amount must not have decimals or commas
     *
     * @param $amount
     * @return string
     */
    public static function shorten($amount): string
    {
        $abbrevs = [6 => 'M', 9 => 'B', 12 => 'T'];

        foreach ($abbrevs as $exponent => $abbrev) {
            if (abs($amount) >= pow(10, $exponent)) {
                $display = $amount / pow(10, $exponent);
                $decimals = ($exponent >= 6 && round($display) < 100) ? 1 : 0;
                $amount = number_format($display, $decimals).$abbrev;
                break;
            } elseif (abs($amount) > 0) {
                $amount = number_format($amount);
                break;
            }
        }

        return $amount;
    }
}
