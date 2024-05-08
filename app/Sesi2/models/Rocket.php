<?php

namespace App\Sesi2\models;

class Rocket
{
<<<<<<< Updated upstream
    private string $name;
    private string $engineStatus = 'inactive';

    public function __construct(string $name, string $engineStatus = 'inactive') {
        $this->engineStatus = $engineStatus;
        $this->name = $name;
    }
=======
    public function __construct(
        private string $name,
        private string $engineStatus = 'inactive'
    ) {}
>>>>>>> Stashed changes

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getEngineStatus(): string
    {
        return $this->engineStatus;
    }

    public function setEngineStatus(string $engineStatus): void
    {
        $this->engineStatus = $engineStatus;
    }


}
