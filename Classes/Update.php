<?php


class Update
{
    public $id ;
    public $title;
    public $message;
    public $link;
    public $date;

    public function __construct()
    {
        settype($this->id, 'integer');
    }
}