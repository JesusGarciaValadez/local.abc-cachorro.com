@extends( 'layouts.app' )

@section( 'content' )
    <div class="container">
      <figure class="logo">
        {!! Html::image( asset( 'images/logo-cachorro.png' ), "ABC Cachorro", [] ) !!}
      </figure>
      <h2>Registra  tu cachorro y recibe <span>Tips </span>de Cuidado y Alimentación,<br> además de exclusivas <span>sorpresas </span>que tenemos para ti</h2>
      {!! Form::open( [
        'url'     => action( 'DiscountController@store' ),
        'method'  => 'POST',
        'class'   => 'form-horizontal',
        'files'   => false,
        'id'      => 'discount__form'
      ] ) !!}
        <div class="item-cachorro flex">
          <p>¿Cuántos cachorros tienes?</p>
          <div class="custom-input-number">
            {!! Form::button( "-", [
              "class" => "cin-btn cin-btn-1 cin-btn-md cin-decrement"
            ] ) !!}
            {!! Form::number( "puppy-number", 1, [
              "class" => "cin-input basket-quantity",
              "step"  => "1",
              "value" => "1",
              "min"   => "0",
              "max"   => "10"
            ] ) !!}
            {!! Form::button( "+", [
              "class" => "cin-btn cin-btn-1 cin-btn-md cin-increment"
            ] ) !!}
          </div>
        </div>
        <div class="item-datos-cachorro flex">
          <div class="form-group">
            {!! Form::text( 'puppy-name', null, [
              "class"       => "text nombre",
              "id"          => "1",
              "placeholder" => " Nombre de tu cachorro *"
            ] ) !!}
            {!! Form::label( 'puppy-name', 'Nombre de tu cachorro *' ) !!}
            <div class="errores" id="mensaje1"> ingresa nombre de cachorro</div>
            <div class="valido" id="validar1"> Bien</div>
          </div>
          {!! Form::select( "puppy-age", [
            "" => "Meses *",
            "1"=> "1 mes",
            "2"=> "2 mes",
            "3"=> "3 mes",
            "4"=> "4 mes",
            "5"=> "5 mes",
            "6"=> "6 mes",
          ], "", [
            "class" => "meses"
          ]) !!}
          {!! Form::select( "puppy-size", [
            ""        => "Talla *",
            "mini"    => "Mini",
            "small"   => "Pequeña",
            "medium"  => "Mediana",
            "big"     => "Grande",
          ], "", [
            "class" => "tallas"
          ]) !!}
          <div class="form-group">
            {!! Form::text( 'puppy-race', '', [
              "class"       => "text nombre",
              "id"          => "2",
              "placeholder" => " Raza (opcional)"
            ] ) !!}
            {!! Form::label( 'puppy-race', "Raza (opcional)" ) !!}
            <div class="valido" id="validar4"> Bien</div>
          </div>
        </div>
        <div class="item-descuentos flex">
          <p>¿Cómo te hacemos llegar nuestros descuentos?</p>
          <div class="form-group">
            {!! Form::text( 'your-name', '', [
              "class"       => "text dec",
              "id"          => "3",
              "placeholder" => " Tu Nombre*"
            ] ) !!}
            {!! Form::label( '3', "Tu Nombre*" ) !!}
            <div class="errores" id="mensaje3"> ingresa nombre completo</div>
            <div class="valido" id="validar3"> Bien</div>
          </div>
          <div class="form-group">
            {!! Form::email( 'your-email', '', [
              "class"       => "text dec",
              "id"          => "4",
              "placeholder" => " Tu e-mail*"
            ] ) !!}
            {!! Form::label( "4", "Tu e-mail*" ) !!}
            <div class="errores" id="mensaje2"> ingresa correo válido</div>
            <div class="valido" id="validar2"> Bien</div>
          </div>
        </div>
        <div class="item-codigo-postal flex">
          <p>nos ayudaría conocer tu</p>
          <div class="form-group">
            {!! Form::text( 'your-zipcode', '', [
              "class"       => "text tex",
              "id"          => "4",
              "placeholder" => "C.P (opcional)"
            ] ) !!}
            {!! Form::label( '4', "C.P (opcional)" ) !!}
          </div>
          <div class="form-group">
            {!! Form::text( "your-phone", "", [
              "class"       => "text tex",
              "id"          => "5",
              "placeholder" => "Teléfono (opcional)"
            ] ) !!}
            {!! Form::label( "5", "Teléfono (opcional)" ) !!}
          </div>
        </div>
        {!! Form::checkbox( "privacy-policy", "true", "", [ "id" => "privacy-policy" ]) !!}
        {!! Form::label( "privacy-policy", "He leído y acepto aviso de privacidad" ) !!}
        {!! Html::link( "#", "Registrarnos", [
          "class" => "btn registrar"
        ] ) !!}
        {{--} Form::submit( "Registrarnos", [
          "class" => "btn registrar"
        ] ) --}}
      {!! Form::close() !!}
    </div>
@endsection

@section( 'scripts' )
    @parent
    {!! Html::script( "https://unpkg.com/jquery@1.11.3/dist/jquery.min.js", [
      "type"  => "text/javascript",
      "async" => "",
      "defer" => "",
    ] ) !!}
    {!! Html::script( asset( "js/index.js" ), [ "type" => "text/javascript" ] ) !!}
@endsection