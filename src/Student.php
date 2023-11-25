<?php

namespace App;

class Student extends User
{
    private $course = array()

    public function bookCourse(array $course)
    {
        $this->course[] = $course;
    }

    public function cancelCourse(array $course)
    {
        $this->course = array_diff($this->course, $course);
    }
}