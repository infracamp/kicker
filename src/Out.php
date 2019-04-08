<?php
/**
 * Created by PhpStorm.
 * User: matthes
 * Date: 19.01.18
 * Time: 14:49
 */

namespace Kick;


class Out
{

    public static function log(...$args)
    {
        $str = " + " . implode (" ", $args) . "\n";
        fwrite(STDERR, $str);
    }

    public static function warn(...$args)
    {
        $str = Color::Str("\n[WARN] " . implode (" ", $args), "yellow") . "\n";
        fwrite(STDERR, $str);
    }

    public static function fail(...$args)
    {
        $str = Color::Str("\n\n[ERR] ". implode (" ", $args) . "\n", "black", "red") . "\n";
        fwrite(STDERR, $str);
    }
}