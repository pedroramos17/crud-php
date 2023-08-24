<?php

namespace \Config\Database;
class Database {
    protected $serverName;
    protected $userName;
    protected $passCode;
    protected $dbName;

    function Database() {
        $this -> serverName = 'localhost';
        $this -> userName = 'root';
        $this -> passCode = '';
        $this -> dbName = 'dbClientes';
    }
}
