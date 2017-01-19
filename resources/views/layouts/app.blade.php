<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>{{ config( 'app.name', 'ABC cachorro' ) }}</title>
    {!! Html::meta( "description", "descripcion del sitio web" ) !!}
    {!! Html::meta( "viewport", "width=device-width, initial-scale=1" ) !!}
    {!! Html::favicon( asset( 'favicon.png' ), [] ) !!}

    <!-- CSRF Token -->
    {!! Html::meta( "csrf-token", csrf_token() ) !!}

    <!-- Scripts -->
    <script>
      window.Laravel = <?php echo json_encode( [
        'csrfToken' => csrf_token(),
      ] ); ?>
    </script>

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

