<?php

namespace App\Library;

class Book 
{
    private $name;
    private $page;
    private $current = 1;

    public function __construct($name, $page)
    {
        $this->name = $name;
        $this->page = $page;
    }
    public function name()
    {
        return $this->name;
    }
    public function read($page)
    {
        $this->current += $page;
    }

    public function currentPage()
    {
        return $this->current;
    }
}
