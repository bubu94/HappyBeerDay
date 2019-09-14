@extends('layouts.default')
@include('includes.header')
@section('content')

<body>
<div class="wrapper">
   <section class="slider-parallax business-banner bg-overlay-black-50 parallax" data-jarallax='{"speed": 0.5}'
      style="background-image: url(images/corsa.jpeg);">
      <div class="slider-content-middle">
      </div>
   </section>
   <form name="formdati" method="post" action="/registrazione">
     {{@csrf_field()}}
   <section class="page-section-pb white-bg" style="    margin-top: -25em;">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12">
               <div class=" text-center">
                  <h1 class="text-white text-uppercase">medico in campo <br><b class="theme-color">
                        Lorem Ipsum </b></h1>
                  <p class="text-white mt-40">"Lorem Ipsum <b class="theme-color">
                        Lorem Ipsum </b> Lorem Ipsum <b class="theme-color"> Lorem Ipsum </b> Lorem Ipsum</p>
                  <div class="col-sm-12">
                     <div class="contact-form border-form clearfix mt-50 row" style=" background: #fff; padding: 40px;">
                        <div style="display:none">
                          <input type="text" name="tipo" id="tipo" value="m">
                        </div>
                        <div class="col-md-6">
                           <label for="">Nome & Cognome</label>
                           <input type="text" class="form-control" name="name">
                        </div>
                        <div class="col-md-6">
                           <label for="">Email</label>
                           <input type="email" class="form-control" name="email">
                        </div>
                        <div class="col-md-6">
                           <label for="">Laurea</label>
                           <input type="text" class="form-control" name="laurea">
                        </div>
                        <div class="col-md-6">
                           <label for="">Votazione</label>
                           <input type="number" class="form-control" name="voto">
                        </div>
                        <div class="col-md-6">
                           <label for="">Anno conseguimento Laurea</label>
                           <input type="text" class="form-control" name="annolaurea">
                        </div>
                        <div class="col-md-6">
                           <label for="">Anno abilitazione</label>
                           <input type="text" class="form-control" name="abilitazione">
                        </div>
                        <div class="col-md-6">
                           <label for="">N. matricola di iscrizione all’albo</label>
                           <input type="text" class="form-control" name="matricola">
                        </div>
                        <div class="col-md-6">
                           <label for="">data iscrizione all’albo</label>
                           <input type="date" class="form-control" name="albo">
                        </div>
                        <div class="col-md-12">
                           <label for="">Master o specializzazioni</label>
                           <textarea class="input-message form-control"
                              rows="3" name="master"></textarea>
                        </div>
                        <div class="col-md-12">
                           <label for="">esperienze lavorative generali</label>
                           <textarea class="input-message form-control" rows="5" name="esperienze"></textarea>
                        </div>
                        <div class="col-md-12">
                           <label for="">Hai mai lavorato nello sport? Se si, cosa hai fatto?</label>
                           <textarea class="input-message form-control" rows="7" name="lavori"></textarea>
                        </div>
                        <div class="col-md-12">
                           <div class="custom01 text-left mt-20 mb-20">
                              <h5 class="text-uppercase">Certificazioni</h5>
                              <input type="checkbox" id="c1" name=""/><label for="c1">BLS</label>
                              <input type="checkbox" id="c2" name=""/><label for="c2">BLS-D</label>
                              <input type="checkbox" id="c3" name=""/><label for="c3">PTC</label>
                              <input type="checkbox" id="c4" name=""/><label
                                 for="c4">ALS e similiari</label>
                           </div>
                        </div>
                        <div class="col-md-12 mt-20 text-left">
                           <h5 class="text-uppercase">Carica immagine del profilo</h5>
                           <input type="file" name="myFile">
                        </div>
                        <div class="col-md-12 mt-40 text-left">
                           <h6 class="text-uppercase mt-40 theme-color">In quali giorni preferisci lavorare?</h6>
                           <div class="custom01 text-left mt-20 mb-20">
                              <input type="checkbox" id="c5" name=""/><label for="c5">Lunedì</label>
                              <input type="checkbox" id="c6" name=""/><label for="c6">Martedì</label>
                              <input type="checkbox" id="c7" name=""/><label for="c7">Mercoledì</label>
                              <input type="checkbox" id="c8" name=""/><label for="c8">Giovedì</label>
                              <input type="checkbox" id="c9" name=""/><label for="c9">Venerdì</label>
                              <input type="checkbox" id="c10" name=""/><label for="c10">Sabato</label>
                              <input type="checkbox" id="c11" name=""/><label for="c11">Domenica</label>
                              <h6 class="text-uppercase mt-40 theme-color">Orari</h6>
                              <input type="checkbox" id="c12" name=""/><label for="c12">Mattina</label>
                              <input type="checkbox" id="c13" name=""/><label for="c13">Pomeriggio</label>
                              <input type="checkbox" id="c14" name=""/><label for="c14">Sera</label>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <label for="">Sport preferiti?</label>
                           <input type="text" class="form-control"
                              name="sport">
                        </div>
                        <div class="col-md-6">
                           <label for="">Zona di lavoro preferite?</label>
                           <input type="text" class="form-control"
                              name="zone">
                        </div>
                        <div class="col-md-12 text-left">
                           <button name="submit" value="Submit" type="submit" class="button mt-30">
                              <span>Termina Iscrizione</span> <i class="fa fa-paper-plane"></i></button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
 </form>


</div>
<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/plugins-jquery.js"></script>
<script>var plugin_path = 'js/';</script>
<script src="js/custom.js"></script>

@stop
