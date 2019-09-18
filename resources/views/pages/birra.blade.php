@extends('layouts.default')
@section('content')


<div class="content">
  <body background='https://cdn.gelestatic.it/deejay/sites/2/2019/01/birra.jpg' style="height: 100%, weight: 100%;">
      <div class="title m-b-md" align="center" style="padding-top: 10%">
        <font face="Verdana" size="20" color="black">
          HappyBeerDay
        </font>
          <button type="button" id="prova" class="block" onclick="window.location='{{ URL::route('birra') }}' ">
            <span>Get Random Beer</span>
          </button>
      </div>
    </body>
</div>
@stop


@section('footer_script_init')
<script>
function ciao(){
  console.log("ciao");
}

</script>

@stop
