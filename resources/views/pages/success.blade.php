@extends('layouts.default')
@section('content')

<div class="content">
  <body background='https://cdn.gelestatic.it/deejay/sites/2/2019/01/birra.jpg' style="height: 100%, weight: 100%;">
      <div class="title m-b-md" align="center" style="padding-top: 10%">
        <font face="Verdana" size="50" color="black">
          Birra caricata, Vai a scoprirla sul nostro profilo twitter: HappyBeerDay!
          <a class="twitter-timeline" href="https://twitter.com/bubu64009975?ref_src=twsrc%5Etfw">Tweets by bubu64009975</a>
           <script async src="https://platform.twitter.com/widgets.js" charset="utf-8">
           </script>
         </font>
      </div>
    </body>
</div>
@stop


@section('footer_script_init')
<script>
function ciao(){
  console.log("prova");
}

</script>

@stop
