<?php
require_once('Publication.php');

class News extends Publication
{
    public $important = false;

    public function draw() 
    {
        if ($this->important) 
            echo '! ';
        echo $this->title . ' ' . $this->author;
        echo "\n";
    }
}