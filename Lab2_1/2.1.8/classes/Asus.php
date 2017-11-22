<?php

class Asus implements Computer
{
    const IS_DESKTOP = true;
    protected $cpu;
    protected $video;
    protected $memory;
    protected $ram;
    private $isWorking = false;
    protected $computerName = "Computer";
    public function start()
    {
        $this->$isWorking  = true;
        echo "Welcome";
    }
    public function restart()
    {
        if ($this->$isWorking ) {
            $this->shutdown();
            for ($i=1; $i <= 5; $i++) {
                echo '.';
                sleep('1');
            }
            $this->start();
        } else {
            echo "Computer is off";
        }
    }
    public function shutdown()
    {
        $this->isWorking  = false;
        echo "Good buy";
    }
    public function printParameters() :void
    {
        try {
            if ($this->isWorking) {
                echo $this->cpu . " - CPU";
                echo $this->video . " - Video";
                echo $this->memory . " - Memory";
                echo $this->ram . " - RAM";
            } else {
                throw new Exception('Computer is off.');
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    public function identifyUser()
    {
        echo $this->getComputerName() . ": Identify by login and password";
    }
    public function __construct()
    {
        $this->cpu = 145;
        $this->video = 5;
        $this->memory = 23;
        $this->ram = 88;
    }

    /**
     * @return string
     */
    public function getComputerName(): string
    {
        return $this->computerName;
    }

    /**
     * @param string $computerName
     */
    public function setComputerName(string $computerName)
    {
        $this->computerName = $computerName;
    }
}