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

$s = Student::get(2);

$s->name = 'Dima';
echo $s->name;

$s->save();

//var_dump($s);
echo "\n";


$studentsList = Student::find()
                        ->where(['id' => 2, 'age' => 10])
                        ->all();