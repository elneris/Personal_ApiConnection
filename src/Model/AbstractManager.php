<?php


namespace App\Manager;

use App\Model\ApiConnection;

class AbstractManager
{
    protected $api;

    public function __construct()
    {
        $this->api = (new  ApiConnection())->getApiConnection();
    }
}
