<?php

class PhoneHelper
{

    /**
     * @param string $phone
     * @return string
     */
    public static function toDbFormat($phone)
    {
        return preg_replace('/(\s|\+|-)/', '', $phone);
    }

    /**
     * @param string $phone
     * @param bool $forcePostfix
     * @return null|string
     */
    public static function toViewFormat($phone, $forcePostfix = false)
    {
        if (preg_match('/^([0-9]{1})([0-9]{3})([0-9]{3})([0-9]{2})([0-9]{2})#(([0-9]{3})|(_{3})?)$/', $phone, $matches)) {
            $result = '+' . $matches[1] . ' ' . $matches[2] . ' ' . $matches[3] . '-' . $matches[4] . '-' . $matches[5];
            if (!empty($matches[7])) {
                $result .= ' #' . $matches[7];
            } elseif ($forcePostfix) {
                $result .= '#___';
            }
            return $result;
        }
        if (preg_match('/^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,17}(\s*)?$/', $phone, $matches)) {
            return $phone;
        }
        return $phone;
    }

}
