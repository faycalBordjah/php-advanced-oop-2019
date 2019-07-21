<?php


namespace core;


class Rap extends Music implements Instrument
{
    /** @var array $instrums */
    private $instrums = ['robot', 'clavinet'];

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
