<?php
require_once 'vendor/autoload.php';

use GraphAware\Neo4j\Client\ClientBuilder;
$client = ClientBuilder::create()->addConnection('bolt', 'bolt://neo4j:04121995@localhost:7687')->build();
$client->run('CREATE (n:Person)');