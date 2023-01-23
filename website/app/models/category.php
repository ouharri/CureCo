<?php

class category extends DB
{
    public function __construct()
    {
        $this->table = 'category';
        $this->connect();
    }
}