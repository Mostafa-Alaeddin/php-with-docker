<?php

namespace App\Database;

use Dotenv\Dotenv;
use mysqli;

class Database
{

    /**
     * @var string
     */
    private string $databaseHostName;
    /**
     * @var string
     */
    private string $databaseUserName;
    /**
     * @var string
     */
    private string $databasePassword;
    /**
     * @var string
     */
    private string $databaseName;
    /**
     * @var string
     */
    private string $handler;

    public function __construct()
    {
        $dotenv = Dotenv::createUnsafeImmutable(__DIR__ . '/../');
        $dotenv->load();

        $databaseHost = $_ENV['DB_HOST'];
        $databaseUser = $_ENV['DB_USER'];
        $databasePass = $_ENV['DB_PASS'];
        $databaseName = $_ENV['DB_NAME'];
        $databasePort = $_ENV['DB_PORT'];

        echo $databaseHost . DIRECTORY_SEPARATOR . $databaseUser . DIRECTORY_SEPARATOR . $databasePass . DIRECTORY_SEPARATOR . $databaseName;
    }

}