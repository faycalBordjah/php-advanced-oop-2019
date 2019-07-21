<?php
declare(strict_types=1);

namespace core;


abstract class Music
{
private $name;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

}