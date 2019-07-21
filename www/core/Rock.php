<?php

declare(strict_types=1);

namespace core;

class Rock extends Music implements Instrument
{
    /** @var array $instrums */
    private $instrums = ['Bass', 'Saxo'];

    public function play()
    {
        return $this->getInstrums();
    }

    /**
     * @return array
     */
    public function getInstrums(): array
    {
        return $this->instrums;
    }
}