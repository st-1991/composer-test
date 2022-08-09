<?php

namespace Suntao\Test;

class Test
{
    protected $msg;

    public function __construct($msg = '')
    {
        $this->msg = $msg;
    }

    public function send()
    {
        return $this->msg;
    }
}