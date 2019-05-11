<?php
/**
 * API Connection
 *
 *
 *
 * @author Elneris API Connection lors du hackathon 2019
 *
 *
 */

namespace App\Model;

use GuzzleHttp\Client; //ATTENTION il faut "guzzlehttp/guzzle": "~6.0" via composer

/**
 *
 * This class only make a api instanciation change the url to your API :
 *
 */
class ApiConnection
{
    /**
     * @var API
     *
     * @access private
     */
    private $apiConnection;

    /**
     * Initialize ApiConnection
     *
     * @access public
     */
    public function __construct()
    {
        $this->apiConnection = new Client(['base_uri' => ' ']); // put your api here
    }

    /**
     * @return API $api
     */
    public function getApiConnection(): API
    {
        return $this->apiConnection;
    }
}
