<?php

require_once ('ActiveRecord.php');

class Student extends ActiveRecord
{
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
    public function __construct()
    {
        $this->type = 'student';
    }
}
