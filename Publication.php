<?php

require_once ('ActiveRecord.php');

abstract class Publication extends ActiveRecord
{

    abstract public function draw();

}