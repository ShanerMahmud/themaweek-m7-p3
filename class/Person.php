<?php

class Person
{

    public string $name;
    private int $age;

    protected char $gender;

    public bool $isStudent;

    public double $avarageGrade;


    function __construct(string $name, int $age, char $gender, bool $isStudent, double $avarageGrade)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
        $this->isStudent = $isStudent;
        $this->avarageGrade = $avarageGrade;
        echo "A new Person-object has been created.";
        echo "The property name of this object is: $name";
    }



}