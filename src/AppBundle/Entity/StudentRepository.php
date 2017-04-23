<?php
/**
 * Created by PhpStorm.
 * User: God
 * Date: 23/04/2017
 * Time: 21:40
 */

namespace AppBundle\Entity;


class StudentRepository
{
    private $students = [];

    public function __construct()
    {
        $s1 = new Student(1, 'Jack');
        $s2 = new Student(2, 'John');
        $s3 = new Student(3, 'Amy');
        $this->students[] = $s1;
        $this->students[] = $s2;
        $this->students[] = $s3;
    }

    public function getAll()
    {
        return $this->students;
    }
}