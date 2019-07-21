<?php

declare(strict_types=1);

namespace core;

class Jazz extends Music implements Instrument
{
    /** @var array $instrums */
    private $instrums = ['Guitare', 'Bass'];

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