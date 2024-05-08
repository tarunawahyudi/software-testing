<?php

namespace App\Sesi2;

class RocketLauncer
{
    private array $rockets = [];

    public function __construct($rockets = []) {
        $this->rockets = $rockets;
    }

    public function getRockets(): array
    {
        return $this->rockets;
    }

    public function setRockets($rockets): void
    {
        $this->rockets = $rockets;
    }

    public function launchAllRockets(): void
    {
        foreach ($this->rockets as $rocket) {
            $rocket->setEngineStatus('active');
        }

        $this->setRockets([]);
    }

    public function launchRocketByQueue(): void
    {
        $rocket = array_shift($this->rockets);
        $rocket->setEngineStatus('active');
    }
}
