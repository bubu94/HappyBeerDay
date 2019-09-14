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
            $statues = $connection->post("statuses/update", ["status" => "#". $beer->id ." drunkard choose: ". $beer->image_url]);
            return view('welcome');
            /* Set any  user specific fields returned by the api request*/
          }
        } catch(\GuzzleHttp\Exception\ClientException $e) {
            //remove user and authenticated from session
            //redirect back with error
            return redirect()->back()->with('error', 'Credenziali non valide');
        }
      }
      public function api_guida(){
        $result =" Per scoprire se puoi metterti alla guida, fai richiesta come mostrato nell'esempio che segue: \n";
        $result .="127.0.0.1:8000/api.possoguidare?gradazione=%&quantita=%&peso=%&sesso=%";
        $result .=" ove: [
                      gradazione = gradazione alcolica della bevanda;
                      quantita = quantita in litra ingerita (se decimale usare il punto '.' es: 0.33 NON 0,33);
                      peso = peso corporeo espresso in kg;
                      sesso = sesso della persona (passare i parametri 'M' o 'F');
                        ]            ";

      $result .= "         Se invece vuoi un suggerimento per una birra della
      gradazione che vuoi, fai richiesta come mostrato nell'esempio che segue: 127.0.0.1:8000/api.getBeerValue?gradazione=%
      dove al posto di % va inserita la gradazione che desideri, ti verrà restituita una birra casuale con quella gradazione!";
        return response($result, 200);
      }

      public function getBeerValue(Request $request){
        $beer = Birra::where('gradazione', $request->gradazione)->pluck('id');
        $max=sizeof($beer);
        $birra= rand(0,$max-1);
        $response = $beer[$birra];
        $birretta = Birra::where('id', $response)->first();
        $risposta = "Name [ ";
        $risposta .= $birretta->nome_birra;
        $risposta .= " ], description [ ";
        $risposta .= $birretta->description;
        $risposta .= " ], url image [ ";
        $risposta .= $birretta->image_url;
        $risposta .= " ]";
        // $x[0]=$beer->nome_birra;
        // $x[1]=$beer->description;
        // $x[2]=$beer->image_url;
        return response($risposta, 200);
      }

      public function guidaSicura(Request $request){


        $gradazione=$request->gradazione;
        $quantita=$request->quantita;
        $peso=$request->peso;
        $sesso=$request->sesso;
        $alcool=$gradazione*8;
        $alcool=$alcool*$quantita;
        $alcool=$alcool/$peso;
        if($sesso=="M"){
          $result=$alcool*0.9;
        }
        else if($sesso=="F"){
          $result=$alcool*0.7;
        }
         if($result>0.5){
          $result .=" SMETTI SUBITO DI DROGARTI PORCODIO";
        }
        else{
          $result .=" Complimenti puoi guidare! Ma fallo responsabilmente!";
        }
        return response($result, 200);
    }
}
