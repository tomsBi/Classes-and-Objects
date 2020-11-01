<?php

namespace App\Exercise7;

class Dog
{
    protected string $name;
    protected string $sex;
    protected ?string $mother;
    protected ?string $father;

    public function __construct(
        string $name,
        string $sex,
        ?string $mother = null,
        ?string $father = null
    )

    {
        $this->name = $name;
        $this->sex = $sex;
        $this->mother = $mother;
        $this->father = $father;
    }

    public function fathersName()
    {
        return $this->father ?? 'Unknown';
    }

    public function hasSameMother(Dog $dog): bool
    {
       return $this->mother === $dog->mother;
    }

}