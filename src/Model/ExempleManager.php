<?php


namespace App\Model;


use App\Manager\AbstractManager;

class ExempleManager extends AbstractManager
{
    // if JSON return
    public function exemple1()
    {
        $api = $this->api->request('GET', '* LOOK YOUR API DOC *');
        $api = $api->getBody();
        $api = $api->getContents();
        return json_decode($api);
    }

    // if need param
    public function exemple2($param)
    {
        $api = $this->api->request('GET', "/api/$param");
        $api = $api->getBody();
        $api = $api->getContents();
        return $api;
    }
}
