<?php
abstract class Publication
{
    public $title;
    public $author;
    public $publicationDate;

    function __construct($title, $author)
    {
        $this->title = $title;
        $this->author = $author;
    }

    abstract public function draw();
}