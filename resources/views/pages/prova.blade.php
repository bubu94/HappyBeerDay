@extends('layouts.default')
@section('content')


<div class="wrapper">
   <section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}'
      style="background-image: url(images/medico.png);">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="page-title-name">

                  <p>We know the secret of your success</p>
               </div>
               <ul class="page-breadcrumb">
                  <li><a href="/"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                  <li>Area Personale</li>
               </ul>
            </div>
         </div>
      </div>
   </section>
   <section class="page-section-pb white-bg pt-0 pb-0" style="margin-top: -80px;">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12">
               <div class=" text-center">
                  <img src="images/woman.png" alt="" class="profile"/>
                  <p class="">Azienda <b class="theme-color">sportiva </b></p>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="pt-0 pb-70">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12">
               <h4 class="mb-30">Informazioni </h4>
            </div>
            <div class="col-lg-12 col-md-12">
               <div class="tab tab-vertical nav-bl">
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                     <li class="nav-item">
                        <a class="nav-link active show" id="home-12-tab" data-toggle="tab" href="#home-12" role="tab"
                           aria-controls="home-12" aria-selected="true">Eventi</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" id="profile-12-tab" data-toggle="tab" href="#profile-12" role="tab"
                           aria-controls="profile-12" aria-selected="false">Profilo </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" id="portfolio-12-tab" data-toggle="tab" href="#portfolio-12" role="tab"
                           aria-controls="portfolio-12" aria-selected="false">Eventi </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" id="contact-12-tab" data-toggle="tab" href="#contact-12" role="tab"
                           aria-controls="contact-12" aria-selected="false">tab 4 </a>
                     </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                     <div class="tab-pane fade active show" id="home-12" role="tabpanel"
                        aria-labelledby="home-12-tab">
                        <h4 class="mb-20">Hai <span class="theme-color">3 giorni</span> di lavoro questo mese!</h4>
                        <div class="calendario">

                           <div class="main-container-wrapper  mb-50">
                              <main>
                                 <div class="calendar-containerR">
                                    <div class="events-container">
                                       <ul class="events__list">
                                          <li class="events__item">
                                             <div class="events__item--left">
                                                <span class="events__name">Town hall meeting</span>
                                                <span class="events__date">Oct 5</span>
                                             </div>
                                             <span class="events__tag">16:00</span>
                                          </li>
                                          <li class="events__item">
                                             <div class="events__item--left">
                                                <span class="events__name">Meet with George</span>
                                                <span class="events__date">Oct 7</span>
                                             </div>
                                             <span class="events__tag">10:00</span>
                                          </li>
                                          <li class="events__item">
                                             <div class="events__item--left">
                                                <span class="events__name">Vacation!!!</span>
                                                <span class="events__date">Oct 16 - Oct 18</span>
                                             </div>
                                             <span class="events__tag events__tag--highlighted">All day</span>
                                          </li>
                                          <li class="events__item">
                                             <div class="events__item--left">
                                                <span class="events__name">Visit Grandma</span>
                                                <span class="events__date">Oct 27 - Oct 28</span>
                                             </div>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </main>
                           </div>
                           <div class="calendar-container">
                              <header>
                                 <div class="day">2019</div>
                                 <i class="fas fa-angle-double-left"></i>
                                 <div class="month">Settembre</div>
                                 <i class="fas fa-angle-double-right"></i>
                              </header>
                              <table class="calendar calP">
                                 <thead>
                                 <tr>
                                    <td>Lun</td>
                                    <td>Mar</td>
                                    <td>Mer</td>
                                    <td>Gio</td>
                                    <td>Ven</td>
                                    <td>Sab</td>
                                    <td>Dom</td>
                                 </tr>
                                 </thead>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="profile-12" role="tabpanel" aria-labelledby="profile-12-tab">
                       <ul class="events__list">
                            <li class="events__item">
                               <div class="events__item--left">
                                  <span class="events__name" style="font-size: 28px;">AZIENDA</span>
                                  <span class="events__date" style="font-size: 15px;">Impostazioni</span>
                               </div>
                               <span class="">
                                 <button onclick="changeModal();" id="modificaButton" data-toggle="tooltip" title="Modifica campi azienda" class="btn btn-sm btn-warning">
                                   <i class="fa fa-plus-circle"></i> Modifica campi
                                 </button>
                                 <button onclick="changeModal();" id="resetButton" style="display:none;" data-toggle="tooltip" title="Annulla le modifiche" class="btn btn-sm btn-danger">
                                   <i class="fa fa-times"></i> reset
                                 </button>
                               </span>
                            </li>
                       </ul>
                        <div class="col-lg-12">
                           <div class=" text-center">
                              <div class="col-sm-12 pb-40" style="background:#fff;">
                                  <form name="newformAzienda" id="newformAzienda" method="POST" action="/changeDataAzienda" class="contact-form border-form clearfix mt-50 row" style="display:none">
                                    <div class="col-md-12">
                                       <label for="">Azienda</label>
                                       <input type="text" class="form-control" name="newazienda" id="newazienda" >
                                    </div>
                                    <div class="col-md-8">
                                       <label for="">Indirizzo</label>
                                       <input type="text" class="form-control" name="newindirizzo" id="newindirizzo" >
                                    </div>
                                    <div class="col-md-4">
                                       <label for="">Numero civico</label>
                                       <input type="number" class="form-control" name="newcivico" id="newcivico" >
                                    </div>
                                    <div class="col-md-4">
                                       <label for="">CAP</label>
                                       <input type="number" class="form-control" name="newcap" id="newcap" >
                                    </div>
                                    <div class="col-md-4">
                                       <label for="">Regione</label>
                                       <input type="text" class="form-control" name="newregione" id="newregione" >
                                    </div>
                                    <div class="col-md-4">
                                       <label for="">Partita IVA</label>
                                       <input type="number" class="form-control" name="newiva" id="newiva" >
                                    </div>
                                    <div class="col-md-12">
                                       <label for="">Descrizione</label>
                                       <textarea class="input-message form-control" rows="3"
                                          name="newmessageAzienda" ></textarea>
                                    </div>
                                    <div class="col-md-12 mt-20 text-left">
                                       <h5 class="text-uppercase">Carica Logo</h5>
                                       <br>
                                       <span></span>
                                       <input type="file" name="newmyFileAzienda">
                                    </div>
                                    <div class="col-md-12 mt-20 text-left">
                                       <button type="button" value="Send"  onclick="changeDataAzienda();" class="button mt-30">
                                          <span>Salva</span> <i class="fa fa-paper-plane"></i></button>
                                    </div>
                                  </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
@stop
