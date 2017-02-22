<?php

require_once ('ActiveRecord.php');

abstract class Publication extends ActiveRecord
{
    public $title;
    public $author;
    public $publicationDate;

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
        ]
    ];

    function __construct()
    {
        $this->type = 'publication';
    }

    abstract public function draw();
}