@extends('layouts.default')
@section('content')

<div class="wrapper">
   <section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}'
      style="background-image: url(images/medico.png);">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="page-title-name">
                  <h1>Utente xY</h1>
                  <p>We know the secret of your success</p>
               </div>
               <ul class="page-breadcrumb">
                  <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                  <li><a href="#">Utente XY</a> <i class="fa fa-angle-double-right"></i></li>
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
                  <h3 class="text-uppercase">Mario<span class="theme-color"> Rossi </span></h3>
                  <p class="">Medico <b class="theme-color">sportivo </b></p>
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
                                 <tbody>
                                 <tr>
                                    <td class="prev-month">29</td>
                                    <td class="prev-month">30</td>
                                    <td class="prev-month">31</td>
                                    <td>1
                                       <span class="eventday"></span>
                                       <span class="eventday event2"></span>
                                       <span class="eventday event3"></span>
                                       <button type="button" class="eventday" data-container="body" data-toggle="popover"
                                          data-placement="top"
                                          data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                       </button>
                                       <button type="button" class="eventday event2" data-container="body" data-toggle="popover"
                                          data-placement="top"
                                          data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                       </button>
                                    </td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>4</td>
                                 </tr>
                                 <tr>
                                    <td>5</td>
                                    <td>6</td>
                                    <td>7</td>
                                    <td>8</td>
                                    <td>9</td>
                                    <td>10</td>
                                    <td>11</td>
                                 </tr>
                                 <tr>
                                    <td>12</td>
                                    <td>13</td>
                                    <td>14</td>
                                    <td>15</td>
                                    <td>16</td>
                                    <td>17</td>
                                    <td class="current-day">18</td>
                                 </tr>
                                 <tr>
                                    <td>19</td>
                                    <td>20</td>
                                    <td>21</td>
                                    <td>22</td>
                                    <td>23</td>
                                    <td>24</td>
                                    <td>25</td>
                                 </tr>
                                 <tr>
                                    <td>26</td>
                                    <td>27</td>
                                    <td>28</td>
                                    <td>29</td>
                                    <td>30</td>
                                    <td>31</td>
                                    <td class="next-month">1</td>
                                 </tr>
                                 </tbody>
                              </table>
                              <div class="ring-left"></div>
                              <div class="ring-right"></div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="profile-12" role="tabpanel" aria-labelledby="profile-12-tab">
                        <div class="col-lg-12">
                           <div class=" text-center">

                              <div class="col-sm-12 pb-40" style="background:#fff;">
                                 <div class="contact-form border-form clearfix mt-50 row">
                                    <div class="col-md-6">
                                       <label for="">Nome & Cognome</label>
                                       <input type="text" class="form-control" name="name">
                                    </div>
                                    <div class="col-md-6">
                                       <label for="">Email</label>
                                       <input type="email" class="form-control" name="email">
                                    </div>
                                    <div class="col-md-6">
                                       <label for="">Password</label>
                                       <input type="password" class="form-control" name="email">
                                    </div>
                                    <div class="col-md-6">
                                       <label for="">Ripeti Password</label>
                                       <input type="password" class="form-control" name="email">
                                    </div>
                                    <div class="col-md-12">
                                       <label for="">Azienda</label>
                                       <input type="text" class="form-control" name="azienda">
                                    </div>
                                    <div class="col-md-8">
                                       <label for="">Indirizzo</label>
                                       <input type="text" class="form-control" name="indirizzo">
                                    </div>
                                    <div class="col-md-4">
                                       <label for="">Numero civico</label>
                                       <input type="number" class="form-control" name="civico">
                                    </div>
                                    <div class="col-md-4">
                                       <label for="">CAP</label>
                                       <input type="cap" class="form-control" name="cap">
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

                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="portfolio-12" role="tabpanel" aria-labelledby="portfolio-12-tab">
                        <p>Benjamin Franklin, inventor, statesman, writer, publisher and economist relates in his
                           autobiography that early in his life he decided to focus on arriving at moral perfection.
                           He made a list of 13 virtues, assigning a page to each. Under each virtue he wrote a
                           summary that gave it fuller meaning. Then he practiced each one for a certain length of
                           time. To make these virtues a habit, Franklin can up with a method to grade himself on his
                           daily actions.</p>
                     </div>
                     <div class="tab-pane fade" id="contact-12" role="tabpanel" aria-labelledby="contact-12-tab">
                        <p>The other virtues practice in succession by Franklin were silence, order, resolution,
                           frugality, industry, sincerity, Justice, moderation, cleanliness, tranquility, chastity and
                           humility. For the summary order he followed a little scheme of employing his time each day.
                           From five to seven each morning he spent in bodily personal attention, saying a short
                           prayer, thinking over the day’s business and resolutions.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>

@stop
