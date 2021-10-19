<?php

namespace App\Models;

interface LoggableInterface
{

    /**

    @return array
     */
    public function toArray(): array;


    /**
    @return string
     */
    public function toString(): string;

}
