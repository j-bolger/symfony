<?php
/**
 * Created by PhpStorm.
 * User: God
 * Date: 23/04/2017
 * Time: 21:40
 */

namespace AppBundle\Entity;


class AdminRepository
{
    private $admins = [];

    public function __construct()
    {
        $a1 = new Admin(1, 'Alan');
        $a2 = new Admin(2, 'Lauren');
        $a3 = new Admin(3, 'Hannah');
        $this->admins[] = $a1;
        $this->admins[] = $a2;
        $this->admins[] = $a3;
    }

    public function getAll()
    {
        return $this->admins;
    }
}