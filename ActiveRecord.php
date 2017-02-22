<?php

class ActiveRecord
{
    public $props;
    protected $propList;
    protected $type;
    protected $isNew = true;

    public function save()
    {
        if ($this->isNew)
            ; // insert
        else
            ; // update
//        file_put_contents($this->type . '.json', json_encode($this->props));
    }

    static public function get($id)
    {
        $student = new self;
        // загрузка данных
//        $data = file_get_contents($this->type . '.json');
//        $this->props = json_decode($data, true);
        return $student;
    }

    public function __get($property)
    {
        if (isset($this->props[$property]))
            return $this->props[$property];
        return false;
    }

    public function __set($property, $value)
    {
        $this->props[$property] = $value;
    }

    public function setData($data){
        foreach ($data as $prop => $value) {
            $this->$prop = $value;
        }
    }


}