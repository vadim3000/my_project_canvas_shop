<?php

namespace App\Models;

interface LoggableInterface
{

    /**
     * c

    @return array
     */
    public function toArray(): array;


    /**
    @return string
     */
    public function __toString(): string;

}
