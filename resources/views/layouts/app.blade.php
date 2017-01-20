<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>{{ config( 'app.name', 'ABC cachorro' ) }}</title>
    <meta name="description" content="@yield( 'description' )">
    {!! Html::meta( "viewport", "width=device-width, initial-scale=1" ) !!}

    <!-- CSRF Token -->
    {!! Html::meta( "csrf-token", csrf_token() ) !!}

    <!-- Favicon -->
    {!! Html::favicon( asset( 'favicon.png' ), [] ) !!}
    {!! Html::style( asset( 'cropped-icono_abc-32x32.jpg' ), [
      "rel"   => "icon",
      "sizes" => "32x32"
    ] ) !!}
    {!! Html::style( asset( 'cropped-icono_abc-192x192.jpg' ), [
      "rel"   => "icon",
      "sizes" => "192x192"
    ] ) !!}
    {!! Html::style( asset( 'cropped-icono_abc-180x180.jpg' ), [
      "rel"   => "apple-touch-icon-precomposed"
    ] ) !!}
    {!! Html::style( asset( 'cropped-icono_abc-270x270.jpg' ), [
      "name"  => "msapplication-TileImage"
    ] ) !!}

    <!-- Scripts -->
    <script>window.Laravel = <?php echo json_encode( [ 'csrfToken' => csrf_token(), ] ); ?></script>


@section( 'headScripts' )
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-90625247-1', 'auto');
        ga('send', 'pageview');
    </script>
@show

    <!-- Styles -->
    {!! Html::style( asset( 'css/app.css' ), [
      "rel"   => "stylesheet",
      "type"  => "text/css"
    ] ) !!}
    {!! Html::style( asset( 'css/style.css' ), [
      "rel"   => "stylesheet",
      "type"  => "text/css"
    ] ) !!}
  </head>
  <body>
    @yield( 'content' )

    @section( 'scripts' )
    @show
  </body>
</html>

