<?php

class database
{
    private $db = [
        'host' => 'localhost',
        'username' => 'root',
        'password' => '',
        'database' => 'resto_native'
    ];

    public function db()
    {
        return $this->db;
    }
}
