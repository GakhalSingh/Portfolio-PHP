<?php


class Skill
{
    public $id ;
    public $name;
    public $description;
    public $experience;
    public $rating;

    public function __construct()
    {
        settype($this->id, 'integer');
        settype($this->name, 'string');
        settype($this->description, 'string');
        settype($this->experience, 'string');
        settype($this->rating, 'int');
    }
}