<?php
/**
 * Created by PhpStorm.
 * User: God
 * Date: 23/04/2017
 * Time: 21:40
 */

namespace AppBundle\Entity;


class LecturerRepository
{
    private $lecturers = [];

    public function __construct()
    {
        $l1 = new Lecturer(1, 'Dr. Bolger');
        $l2 = new Lecturer(2, 'Dr. Pepper');
        $l3 = new Lecturer(3, 'Dr. Von Grey');
        $this->lecturers[] = $l1;
        $this->lecturers[] = $l2;
        $this->lecturers[] = $l3;
    }

    public function getAll()
    {
        return $this->lecturers;
    }
}