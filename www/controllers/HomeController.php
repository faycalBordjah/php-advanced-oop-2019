<?php
declare(strict_types=1);

namespace controllers;

use core\Artist;
use core\Concert;
use core\Group;
use core\Jazz;

class HomeController
{

    public function homeAction()
    {
        $artists = [];
        $groups = [];

        $jazz = new Jazz();
        $art = new Artist("winhouse", $jazz->play());
        $group = new Group("THe jazz group", [$art]);
        $concert = new Concert('For freedom', new \DateTime(), $group);
        var_dump($concert);
        //$v = new View('homepage');
    }

}