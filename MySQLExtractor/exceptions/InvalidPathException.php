<?php
namespace MySQLExtractor\exceptions;

class InvalidPathException extends \Exception
{
    public function __construct($message)
    {
        return parent::__construct('Path ' . $message . ' is invalid.', 1001);
    }
}
