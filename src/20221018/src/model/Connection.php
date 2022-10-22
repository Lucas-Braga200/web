<?php

class Connection {
    private static $connection;

    private function __construct() {

    }

    public static function getInstance() {
        if (!isset(self::connection)) {
            self::$connection - pg_connect("host-pg-db dbname=per user=user password=\example")
        }
    }
}
