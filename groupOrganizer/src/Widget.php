<?php
namespace GOrganizer;
require "Autoloader.php";
Autoloader::register();


use GOrganizer\Connector\Connection;

 $connection = new Connection();
 echo $connection->getConnection();
