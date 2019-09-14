@extends('layouts.default')
@include('includes.header')
@section('content')


<div class="wrapper">
   <section class="slider-parallax business-banner bg-overlay-black-50 parallax" data-jarallax='{"speed": 0.5}'
      <div class="slider-content-middle">
      </div>
   </section>
   <section class="page-section-pb white-bg" style="    margin-top: -25em;">
     @yield('content');
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12">
               <div class=" text-center">
                  <h1 class="text-white text-uppercase">medico in campo <br><b class="theme-color">
                        Lorem Ipsum </b></h1>
                  <p class="text-white mt-40">"Lorem Ipsum <b class="theme-color">
                        Lorem Ipsum </b> Lorem Ipsum <b class="theme-color"> Lorem Ipsum </b> Lorem Ipsum</p>
                  <div class="col-sm-12">
                     <div class="contact-form border-form clearfix mt-50 row" style=" background: #fff; padding:
                        40px;">
                        <div class="col-md-12">
                           <label for="">Azienda</label>
                           <input type="text" class="form-control" name="azienda">
                        </div>
                        <div class="col-md-9">
                           <label for="">Indirizzo</label>
                           <input type="text" class="form-control" name="indirizzo">
                        </div>
                        <div class="col-md-3">
                           <label for="">Numero civico</label>
                           <input type="text" class="form-control" name="civico">
                        </div>
                        <div class="col-md-4">
                           <label for="">CAP</label>
                           <input type="text" class="form-control" name="cap">
                        </div>
                        <div class="col-md-4">
                           <label for="">Regione</label>
                           <input type="text" class="form-control" name="regione">
                        </div>
                        <div class="col-md-4">
                           <label for="">Partita IVA</label>
                           <input type="text" class="form-control" name="iva">
                        </div>
                        <div class="col-md-12">
                           <label for="">Descrizione</label>
                           <textarea class="input-message form-control" rows="3"
                              name="message"></textarea>
                        </div>
                        <div class="col-md-12 mt-20 text-left">
                           <h5 class="text-uppercase">Carica Logo</h5>
                           <input type="file" name="myFile">
                        </div>
                        <div class="col-md-12 mt-20 text-left">
                           <button name="submit" type="submit" value="Send" class="button mt-30">
                              <span>Termina Iscrizione</span> <i class="fa fa-paper-plane"></i></button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   @include('includes.footer')
</div>
<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>

@stop
