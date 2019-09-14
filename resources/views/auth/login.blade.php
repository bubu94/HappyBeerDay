@extends('layouts.default')
@include('includes.header')
@section('content')

<body>
<div class="wrapper">

   <section class="slider-parallax business-banner bg-overlay-black-10 parallax" data-jarallax='{"speed": 0.5}'
      style="background-image: url(images/medico.png);">
      @yield('content');
      <div class="slider-content-middle">
         <div class="container">
            <div class="row">
               <div class="col-lg-6">
                  <div class="slider-content text-center">
                     <span class="text-white">Medico in campo</span>
                     <h1 class="theme-color text-uppercase">medico in campo</h1>
                     <p class="text-white mt-40">"Lorem Ipsum <b class="theme-color">
                           Lorem Ipsum </b> Lorem Ipsum <b class="theme-color"> Lorem Ipsum </b> Lorem Ipsum</p>
                  </div>
               </div>
               <div class="col-sm-6">
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

                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   @include('includes.footer')

</div>
<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>
<!--=================================
 jquery -->
<!-- jquery -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- plugins-jquery -->
<script src="js/plugins-jquery.js"></script>
<!-- plugin_path -->
<script>var plugin_path = 'js/';</script>
<!-- custom -->
<script src="js/custom.js"></script>

@stop
