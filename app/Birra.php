<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\User;
use App\Evento;


class Birra extends Model
{
    protected $table = 'beer';
    public $timestamps = false;

    protected $fillable = [
      'id','id_beer','nome_birra', 'description','image_url','gradazione'
    ];
}
