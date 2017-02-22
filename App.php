<?php

class App
{
    static protected $instance = null;
    protected $state = 'disconnected';

    protected function __construct()
    {

    }

    static public function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function getState()
    {
        return $this->state;
    }

    public function connect()
    {
        $this->state = 'connected';
    }
    public function disconnect()
    {
        $this->state = 'disconnected';
    }
}

echo App::getInstance()->getState();
echo "\n";
App::getInstance()->connect();
echo App::getInstance()->getState();
echo "\n";
echo App::getInstance()->getState();

echo "\n";
