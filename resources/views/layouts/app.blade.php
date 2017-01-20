<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>{{ config( 'app.name', 'ABC cachorro' ) }}</title>
    {!! Html::meta( "description", "descripcion del sitio web" ) !!}
    {!! Html::meta( "viewport", "width=device-width, initial-scale=1" ) !!}

    {{-- CSRF Token --}}
    {!! Html::meta( "csrf-token", csrf_token() ) !!}

    {{-- Favicon --}}
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

    {{-- Scripts --}}
    <script>
      window.Laravel = <?php echo json_encode( [
        'csrfToken' => csrf_token(),
      ] ); ?>
    </script>
    @section( 'headScripts' )

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

