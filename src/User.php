<?php

namespace App;

class User
{
    private $student = FALSE;
    private $name;
    private $phoneNumber;
    private $email;
    private $languageCh = TRUE;
    
    //Constructor?
    public function register(bool $student, $name, $phoneNumber, $email, $languageCh)
    { 
        $this->student = $student;
        $this->name = $name;
        $this->phoneNumber = $phoneNumber;
        $this->email = $email;
        $this->languageCh = $languageCh;
        if ($this->student)
        {
            $this = new Student(); 
        }
    }
}


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