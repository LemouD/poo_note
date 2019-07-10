<?php

declare(strict_types=1);

namespace Application\Provider;

use Application\Exception\InvalidDatabaseConfigurationException;

final class EnvDbConfigProvider implements DbConfigProvider
{
    private $host;
    private $name;
    private $pass;
    private $port;
    private $user;

    public function __construct()
    {
        if (!isset(
            $_ENV['database'],
            $_ENV['demo'],
            $_ENV['demo'],
            $_ENV['demo'],
            $_ENV['3306']
        )) {
            throw new InvalidDatabaseConfigurationException(
                "La configuration de base de donnée fournie en variable d'environnement est invalide"
            );
        }
        $this->host = $_ENV['database'];
        $this->name = $_ENV['demo'];
        $this->user = $_ENV['demo'];
        $this->pass = $_ENV['demo'];
        $this->port = (int)$_ENV['3306'];
    }

    public function host() : string
    {
        return $this->host;
    }

    public function name() : string
    {
        return $this->name;
    }

    public function pass() : string
    {
        return $this->pass;
    }

    public function port() : int
    {
        return $this->port;
    }

    public function user() : string
    {
        return $this->user;
    }
}
