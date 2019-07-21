<?php

declare(strict_types=1);

namespace core;

class Pop extends Music implements Instrument
{
    /** @var array $instrums */
    private $instrums = ['Audiocubes', 'Acoustic guitare'];

    public function play()
    {
        $this->getInstrums();
    }

    /**
     * @return array
     */
    public function getInstrums(): array
    {
        return $this->instrums;
    }
}