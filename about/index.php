<?php

class Hello
{
    public $yo;

    public function __construct($yo) {
        $this->yo = $yo;
    }

    public function talkToMe() {
        echo $this->yo;
    }
}

$hey = new Hello('Hello');
echo $hey->talkToMe();