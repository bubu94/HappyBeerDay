 @section('content')


<!doctype html>
<html>
    <head>
        <meta charset="utf-8">

        <title>HappyBeerDay</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                weight: 100%;
                height: 100%;
                margin: 0;
                background-repeat:no-repeat;/*we want to have one single image not a repeated one*/
                background-size:cover;/*this sets the image to fullscreen covering the whole screen*/
            }

            .full-height {
                height: 100%;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body background='https://cdn.gelestatic.it/deejay/sites/2/2019/01/birra.jpg' style="height: 100%, weight: 100%;">
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    HappyBeerDay
                     {{ birra }}
                </div>
                <button name="button"  id="chiamataGet" onclick="getBeer();" type="button"><span>Get Random Beer</span></button>
            </div>
        </div>
    </body>
    <html>

    @section('footer_script_init')
    <script>
    function getBeer(){
    $('#chiamataGet').redirect('/beer');
    }
    </script>
@stop
