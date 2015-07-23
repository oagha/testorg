<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RedisBridge
 *
 * @author  Osama Agha <osama.agha24@gmail.com>
 */

namespace GOrganizer\Connector;

use GOrganizer\Connector\GConnection;

class Redis
{

    private static $connection;

    public function __construct($db = 0)
    {
        $gConnection = new GConnection();
        if (empty($this->connection)) {
            $this->connection = $gConnection->getConnection();
            $this->connection->select($db);
        }
    }
    

}
