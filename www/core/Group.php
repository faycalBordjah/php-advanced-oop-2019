<?php
declare(strict_types=1);
namespace core;

class Group
{
    /**@var string $name*/
    private $name;
    /** @var array $musicians */
    private $musicians;

    /**
     * Group constructor.
     * @param string $name
     * @param array $musicians
     */
    public function __construct(string $name,array $musicians)
    {
        $this->name = $name;
        $this->musicians = $musicians;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

}