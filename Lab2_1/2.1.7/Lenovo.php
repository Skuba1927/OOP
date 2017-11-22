<?php

class Lenovo extends Computer
{
    const IS_DESKTOP = true;
    public function identifyUser()
    {
        echo $this->getComputerName() . ": Identify by login and password";
    }
}