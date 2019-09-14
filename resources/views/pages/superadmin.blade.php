@extends('layouts.default')
@section('content')
<div class="wrapper">
   <section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}'
      style="background-image: url(images/medico.png);">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="page-title-name">
                 <h1>Utente <?= $user->name ?></h1>
                  <p>Gestionale</p>
               </div>
               <ul class="page-breadcrumb">
                  <li><a href="/"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                  <li><a href="#"><?= $user->name ?></a> <i class="fa fa-angle-double-right"></i></li>
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
                  <img src="images/superadmin.png" alt="" style="border:10px solid rgb(246, 162, 70)" class="profile"/>
                  <h3 class="text-uppercase">Super<span class="theme-color"> admin </span></h3>
                  <!-- <p class="">Super <b class="theme-color">admin </b></p> -->
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="pt-0 pb-70">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12">
               <h4 class="mb-30">Impostazioni </h4>
            </div>
            <div class="col-lg-12 col-md-12">
               <div class="tab tab-vertical nav-bl">


                 <!-- SIDEBAR -->
                  <ul class="nav nav-tabs" id="myTab" role="tablist">

                     <li class="nav-item">
                        <a class="nav-link" id="aziende-12-tab" data-toggle="tab" href="#aziende-12" role="tab"
                           aria-controls="aziende-12" aria-selected="false">
                           <i class="fa fa-info-circle" aria-hidden="true"></i>
                           Aziende </a>
                     </li>


                     <li class="nav-item">
                        <a class="nav-link" id="medici-12-tab" data-toggle="tab" href="#medici-12" role="tab"
                           aria-controls="medici-12" aria-selected="false">
                           <i class="fa fa-medkit" aria-hidden="true"></i>
                           Medici  </a>
                     </li>



                     <li class="nav-item">
                       <a class="nav-link" id="home-12-tab" data-toggle="tab" href="#home-12" role="tab"
                       aria-controls="home-12" aria-selected="true">
                       <i class="fa fa-list-alt" aria-hidden="true"></i>
                       Eventi
                        </a>
                     </li>


                     <li class="nav-item">
                       <a class="nav-link" id="sport-12-tab" data-toggle="tab" href="#sport-12" role="tab"
                       aria-controls="profile-12" aria-selected="false">
                       <i class="fa fa-gamepad" aria-hidden="true"></i>
                       Sport </a>
                     </li>


                     <li class="nav-item">
                        <a class="nav-link" id="zone-12-tab" data-toggle="tab" href="#zone-12" role="tab"
                           aria-controls="zone-12" aria-selected="false">
                           <i class="fa fa-map-marker" aria-hidden="true"></i>
                           Zone  </a>
                     </li>



                     <li class="nav-item">
                        <a class="nav-link" id="profile-12-tab" data-toggle="tab" href="#profile-12" role="tab"
                           aria-controls="profile-12" aria-selected="false">
                           <i class="fa fa-check" aria-hidden="true"></i>
                           Certificazioni  </a>
                     </li>


                  </ul>
                  <!-- END SIDEBAR -->

                <div class="tab-content" id="">
                  <!-- AZIENDE -->
                  @include("pages.superadmin.aziende")
                  <!-- AZIENDE -->


                  <!-- MEDICI -->
                  @include("pages.superadmin.medici")
                  <!-- MEDICI -->


                  <!-- SPORT -->
                  @include("pages.superadmin.sport")
                  <!-- SPORT -->

                  <!-- EVENTI -->
                  @include("pages.superadmin.eventi")
                  <!-- EVENTI -->


                  <!-- EVENTI -->
                  @include("pages.superadmin.zone")
                  <!-- EVENTI -->


                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>

@endsection



@section('footer_script_init')
<script>

  $(document).ready(function(){

    <?php if(isset($tab) & !empty($tab)){ \Session::forget('tab'); ?>
      $('#<?= $tab ?>-12-tab').click();
    <?php }else{ ?>
      $('#aziende-12-tab').click();
    <?php } ?>
  })

  function addSport(){
    $('#modale-add-sport').modal('show');
    $("#nomeSport").focus();
  }

  function addZona(){
    $('#modale-add-zona').modal('show');
    $("#nomeZona").focus();
  }

  function submitAddZona(){
    var nome = $('#formAddZona #nomeZona').val();
    if(nome == ""){
      swal("Attenzione","Specificare il nome della zona","error");
      $('#formAddZona #nomeZona').css("border-color",'red');
      $('#formAddZona #nomeZona').focus();
      return false;
    }
    $('#formAddZona').submit();
  }


  function deleteSport(id_sport,nome_sport){

    swal({
      title: "Attenzione!",
      text: "Sicuro di voler eliminare questo sport <strong style='font-weight:bold;color:#ffc107'>"+nome_sport+"</strong>? <br><small>(Negli eventi già presenti nel sistema non verrà eliminato)</small>",
      type: "error",
      html: true,
      showCancelButton: true,
      confirmButtonClass: "btn-danger",
      confirmButtonText: "Elimina",
      cancelButtonText: "Annulla",
      closeOnConfirm: false,
      closeOnCancel: true
    },
    function(isConfirm) {

      if (isConfirm) {
        $.post("sport/delete",{id:id_sport},function(data){
          location.reload();
        },'json');
      }

    });

  }



  function deleteZona(id_zona,nome){
    $('#formDelZona input[name=id]').val(id_zona);
    swal({
      title: "Attenzione!",
      text: "Sicuro di voler eliminare questa zona <strong style='font-weight:bold;color:#ffc107'>"+nome+"</strong>? <br><small>(Negli eventi già presenti nel sistema non verrà eliminata)</small>",
      type: "error",
      html: true,
      showCancelButton: true,
      confirmButtonClass: "btn-danger",
      confirmButtonText: "Elimina",
      cancelButtonText: "Annulla",
      closeOnConfirm: false,
      closeOnCancel: true
    },
    function(isConfirm) {

      if (isConfirm) {
        $('#formDelZona').submit();
      }

    });

  }




</script>
@stop
