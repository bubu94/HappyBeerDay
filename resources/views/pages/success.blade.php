@extends('layouts.default')
@section('content')

<div class="content">
  <body background='https://cdn.gelestatic.it/deejay/sites/2/2019/01/birra.jpg' style="height: 100%, weight: 100%;">
      <div class="title m-b-md" align="center" style="padding-top: 10%">
        <font face="Verdana" size="50" color="black">
          Birra caricata, Vai a scoprirla sul nostro profilo twitter: HappyBeerDay!
          <blockquote class="twitter-tweet"><p lang="en" dir="ltr">#100 drunkard choose: <a href="https://t.co/xeOwnji1lA">https://t.co/xeOwnji1lA</a></p>&mdash; HappyBeerDay (@bubu64009975) <a href="https://twitter.com/bubu64009975/status/1173272342157508608?ref_src=twsrc%5Etfw">September 15, 2019</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
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
