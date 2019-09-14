<?php

namespace App\Http\Controllers;

//require "vendor/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Birra;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Controllers\Controller;
use App\Helpers\HttpHelper;
use App\Http\Requests\AuthenticationRequest;
use App\Traits\Throttles;
use BadMethodCallException;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;

class BeerControllers extends Controller {
    use Throttles;
    private $httpHelper;
      /**
       * Create a new controller instance.
       *
       * @return void
       */
      public function __construct()
      {
        $this->httpHelper = new HttpHelper();
      }

    /**
       * Create a new controller instance.
       * @return void
       */
      /**
       * Show the application dashboard.
       *
       * @return \Illuminate\Contracts\Support\Renderable
       */
       public function casualBeer() {
              //too many failed login attempts
           //attempt API authentication
           // 'remember_me' => 1

           $CONSUMER_KEY='7ZYBjSkEC4W1tJZxkoXKmccca';
           $CONSUMER_SECRET='ZhtFQSgg3vWUMaHogrOO5AwmlndIDfKIDsH7KP7NrKHGRaoVs6';
           $access_token='1168526948542353409-UD3JX91SHW49lh2NfPxZN71TTcubGW';
           $access_token_secret='AMiRPlQohpBxU0h1HNpchCozVQi7sqv9n2ghnv8GKl21t';
           try {
             //var_dump($request->all());die;
               $result = $this->httpHelper->get("https://api.punkapi.com/v2/beers/random",[
                 // 'remember_me' => 1
             ]);
             $x=array();
             $x +=$result;
             var_dump($x[0]->abv);die;
             $connection = new TwitterOAuth($CONSUMER_KEY, $CONSUMER_SECRET, $access_token, $access_token_secret);
             $content = $connection->get("account/verify_credentials");
            //create user to store in session
            if($x[0]->image_url==''){
              casualBeer();
            }
            else{
            $beer = new Birra();
            $beer->nome_birra = $x[0]->name;
            $beer->id_beer = $x[0]->id;
            $beer->description = $x[0]->description;
            $beer->image_url = $x[0]->image_url;
            $beer->gradazione = $x[0]->abv;
            $beer->save();

            return view('welcome');
            /* Set any  user specific fields returned by the api request*/
          }
        } catch(\GuzzleHttp\Exception\ClientException $e) {
            //remove user and authenticated from session
            //redirect back with error
            return redirect()->back()->with('error', 'Credenziali non valide');
        }
      }
}
