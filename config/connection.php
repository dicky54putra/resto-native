<?php

require_once 'database.php';
class connectionn extends database
{
    var $connection = '';
    public function __construct()
    {
        $db = $this->db();
        $this->connection = mysqli_connect(
            $db['host'],
            $db['username'],
            $db['password'],
            $db['database']
        );
    }
}
