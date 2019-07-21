<?php

declare(strict_types=1);

namespace core;


class View
{
    /** @var string $view */
    private $view;

    /**
     * View constructor.
     * @param string $view
     */
    public function __construct(string $view)
    {
        $this->setView($view);
        include $this->view;
    }


    public function setView($view)
    {
        $viewPath = 'views/' . $view . '.php';
        if (file_exists($viewPath)) {
            $this->view = $viewPath;
        } else {
            die("FIle does not exist " . $viewPath);
        }
    }
}