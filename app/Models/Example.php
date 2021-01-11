<?php

namespace App\Models;

class Example {
    protected $foo;

    public function go() {
            dump('it works!');
    }

    public function __construct($foo)
    {
        $this->foo = $foo;
    }

}