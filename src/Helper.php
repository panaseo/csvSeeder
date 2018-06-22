<?php
/**
 * Created by PhpStorm.
 * User: pablo
 * Date: 21-06-18
 * Time: 21:45
 */

namespace panaseo\csvSeeder;


class Helper
{
    public static function PackBase($addToBase = null)
    {
        $root = dirname(__DIR__,1);
        $suffix = is_null($addToBase) ? "" : "/".$addToBase;

        return $root . $suffix;
    }
}