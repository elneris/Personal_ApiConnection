<?php


namespace App\Controller;


use App\Model\ExempleManager;


class ExempleController
{
    public function exemple()
    {
        $apiManager = new ExempleManager();
        $api = $apiManager->exemple1();
    }

    public function exemple2()
    {
        $apiManager = new ExempleManager();
        $api = $apiManager->exemple2('');
    }
}
