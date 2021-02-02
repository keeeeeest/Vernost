<?php

namespace Konstantin\Vernost\Base;

use Konstantin\Vernost\Base\DBConnection;

abstract class Service
{
    protected $dbConnection;
    // private $validator;
    public function __construct()
    {
        $this->dbConnection = DBConnection::getInstance();
        // $this->validator = new Validator();
        // либо методы класса Validator сделать статическими и обращаться
        // к ним при необходимости без создания объекта Validator::имяМетода()
    }
    // abstract public function dbSomething();
}