<?php


class Console
{
    public static $success = "SUCCESS";
    public static $warning = "WARNING";
    public static $failure = "FAILURE";
    public static $note = "NOTE";

    public static function printLine($message, $status = '')
    {
        $out = "";
            switch ($status) {
                case "SUCCESS":
                    $out = "[42m"; //Green background
                    break;
                case "FAILURE":
                    $out = "[41m"; //Red background
                    break;
                case "WARNING":
                    $out = "[43m"; //Yellow background
                    break;
                case "NOTE":
                    $out = "[44m"; //Blue background
                    break;
                default:
                    $out = "";
                    break;
            }
        return chr(27) . "$out" . "$message" . chr(27) . "[0m";
    }
    

}