<?php

class DateTimeEx extends DateTime
{
    const DATE_TIME = 'd.m.Y H:i';
    const DATE = 'd.m.y';
    
    public static function formatMysql($mysqlDateTime, $format = self::DATE_TIME)
    {
        $dateTime = new self($mysqlDateTime);
        return $dateTime->format($format);
    }
}
