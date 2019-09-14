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
                  <li><span>Inserimento evento</span></li>
               </ul>
            </div>
         </div>
      </div>
   </section>
   <section class="page-section-pb white-bg pt-70">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12">
               <div class=" text-center">
                  <h3 class="text-uppercase">medico<b class="theme-color"> in campo </b></h3>
                  <p class="mb-60">Inserisci il tuo <b class="theme-color">evento! </b></p>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <div id="testCalendario" class="calendar-container">
                  <header>
                     <div class="day">2019</div>
                     <i class="fas fa-angle-double-left"></i>
                     <div class="month">Settembre</div>
                     <i class="fas fa-angle-double-right"></i>
                  </header>

                     <div id="testCalendario">
                     <!-- <tbody>
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
                     </tbody> -->
                  <!-- </table> -->
                  <div class="ring-left"></div>
                  <div class="ring-right"></div>
               </div>
            </div>
            <div class="col-sm-6">
               <div class="inseEv clearfix row">
                  <h4 class="text-uppercase">Inserisci il tuo evento</h4>
                  <div class="col-md-6">
                     <label for="">Nome & Cognome</label>
                     <input type="text" class="form-control" name="name">
                  </div>
                  <div class="col-md-6">
                     <label for="">Email</label>
                     <input type="email" class="form-control" name="email">
                  </div>
                  <div class="col-md-12 text-left">
                     <button name="submit" type="submit" class="button mt-30">
                        <span>Termina Iscrizione</span> <i class="fa fa-paper-plane"></i></button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>
@stop

@section('footer_script_init')

<script>
$(document).ready(function(){
  $.ajax({
    url:'provaCalendar',
    type:'post',
    data:{"_token": "{{ csrf_token() }}"},
    success: function(data){
      $('#testCalendario').append(data);
      }
    });
  });
</script>
@stop
