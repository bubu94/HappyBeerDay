<?php
namespace App\Helpers;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

/**
 * Class to handle all RESTful requests
 */
class HttpHelper
{
    private $guzzle;
    private $birra;


    /**
     * HttpHelper constructor.
     */
    public function __construct()
    {

        $this->guzzle = new Client(['base_uri' => env('APP_URL'), 'verify' => false]);
        $this->birra = Session::get('birra');
    }


    /**
     * @param $endpoint
     * @param $array - Array of data to be JSON encoded
     * @return mixed
     */

    public function post($endpoint, $array) {
            $response = $this->guzzle->post($this->cleanEndpoint($endpoint), [
            'headers' => [
                'Is-Manager' => '1',    # In questo modo il server delle api sa che la richiesta è effettuata dal gestionale
                'Content-Type' => 'application/json; charset=UTF8',
                'X-Requested-With' => 'XMLHttpRequest',
                'Authorization' => "Bearer ".($this->birra ? $this->birra->access_token : ''),
                'timeout' => 10,
            ],'json' => $array
        ]);
        $body = json_decode($response->getBody());
        return $body;
    }


    /**
     * @param $endpoint
     * @param int $page
     * @return mixed
     */
    public function get($endpoint) {
        $response = $this->guzzle->get($endpoint, [
            'headers' => [
                'Is-Manager' => '1',    # In questo modo il server delle api sa che la richiesta è effettuata dal gestionale
                'Content-Type' => 'application/json; charset=UTF8',
                'X-Requested-With' => 'XMLHttpRequest',
                'Authorization' => "Bearer ".($this->birra ? $this->birra->access_token : ''),
                'timeout' => 10,
            ],
        ]);

        $body = json_decode($response->getBody());

        return $body;
    }



    /**
     * @param $endpoint
     * @param $array - Array of data to be JSON encoded
     * @return mixed
     */



    /**
     * Remove leading or trailing forward slashes from the endpoint.
     * @param $endpoint
     * @return string
     */
    private function cleanEndpoint($endpoint) {
        $endpoint = ltrim($endpoint,"/");
        $endpoint = rtrim($endpoint,"/");
        return $endpoint;
    }
}
