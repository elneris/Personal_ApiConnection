<?php


namespace App\Manager;

use App\Model\ApiConnection;

class AbstractManager
{
    protected $api;

    public function __construct(string $table)
    {
        $this->api = (new  ApiConnection())->getApiConnection();
    }
}
