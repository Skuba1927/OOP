<?php
interface  Computer
{


    public function start();
    public function restart();
    public function shutdown();
    public function printParameters();
    public function identifyUser();
    public function __construct();
    public function getComputerName();
    public function setComputerName(string $computerName);
}

