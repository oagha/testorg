<?php

namespace GOrganizer\Connector;

use \Predis\Client;

class GConnection {

    public function getConnection() {
        $connection = new Client(array(
            'scheme' => 'tcp',
            'host' => 'localhost',
            'port' => 6379,
        ));
        return $connection;
    }

}
