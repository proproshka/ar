<?php
require_once('Publication.php');

class News extends Publication
{
    public $important = false;

    protected $propList = [
        'id' => [
            'type' => 'integer',
            'required' => true
        ],
        'name' => [
            'type' => 'string',
            'required' => true
        ],
        'surname' => [
            'type' => 'string',
            'required' => false
        ],
        'important' => [
            'type' => 'boolean',
            'required' => 'false'
        ]
    ];

    public function draw() 
    {
        if ($this->important) 
            echo '! ';
        echo $this->title . ' ' . $this->author;
        echo "\n";
    }
}