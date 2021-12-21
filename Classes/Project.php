<?php


class Project
{
    public $id ;
    public $title;
    public $description;
    public $image;
    public $contributors;

    public function __construct()
    {
        settype($this->id, 'integer');
        settype($this->title, 'string');
        settype($this->description, 'string');
        settype($this->image, 'string');
        settype($this->contributors, 'string');
    }
}