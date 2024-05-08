<?php

namespace App\Sesi2\model;

class Rocket
{
    public function __construct(
        private string $name,
        private string $engineStatus = 'inactive'
    ) {}
}
