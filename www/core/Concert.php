<?php


namespace core;


class Concert
{
    private $title;
    private $date;
    private $group;

    /**
     * Concert constructor.
     * @param $name
     * @param $musicType
     * @param $group
     */
    public function __construct(string $title, \DateTime $date, Group $group)
    {
        $this->title = $title;
        $this->date = $date;
        $this->group = $group;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return \DateTime
     */
    public function getDate(): \DateTime
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     */
    public function setDate(\DateTime $date): void
    {
        $this->date = $date;
    }

    /**
     * @return Group
     */
    public function getGroup(): Group
    {
        return $this->group;
    }

    /**
     * @param Group $group
     */
    public function setGroup(Group $group): void
    {
        $this->group = $group;
    }


}