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
    private $user;
    private $un;
    private $pw;


    /**
     * HttpHelper constructor.
     */
    public function __construct()
    {

        $this->guzzle = new Client(['base_uri' => env('APP_URL'), 'verify' => false]);
        $this->user = Session::get('user');
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
                'Authorization' => "Bearer ".($this->user ? $this->user->access_token : ''),
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
                'Authorization' => "Bearer ".($this->user ? $this->user->access_token : ''),
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
    public function patch($endpoint, $array) {
        $response = $this->guzzle->patch($this->cleanEndpoint($endpoint), [
            'headers' => [
                'Is-Manager' => '1',    # In questo modo il server delle api sa che la richiesta è effettuata dal gestionale
                'Content-Type' => 'application/json; charset=UTF8',
                'timeout' => 10,
            ],
            'auth' => [
                $this->un,
                $this->pw,
            ],
            'json' => $array
        ]);
        $body = json_decode($response->getBody());
        return $body->data;
    }




    /**
     * @param $endpoint
     * @return mixed
     */
    public function delete($endpoint) {
        $response = $this->guzzle->delete($this->cleanEndpoint($endpoint), [
            'headers' => [
                'Is-Manager' => '1',    # In questo modo il server delle api sa che la richiesta è effettuata dal gestionale
                'Content-Type' => 'application/json; charset=UTF8',
                'timeout' => 10,
            ],
            'auth' => [
                $this->un,
                $this->pw,
            ],
        ]);
        $body = json_decode($response->getBody());
        return $body->data;
    }


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
