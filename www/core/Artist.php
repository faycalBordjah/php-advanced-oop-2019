<?php
declare(strict_types=1);

namespace core;


class Artist
{
    /** @var string $name */
    private $name;
    /** @var array $instru */
    private $instru;

    /**
     * Artist constructor.
     * @param $name
     * @param array $instru
     */
    public function __construct(string $name,array $instru)
    {
        $this->name = $name;
        $this->instru = $instru;
    }

    /**
     * @return array
     */
    public function getInstru()
    {
        return $this->instru;
    }


}