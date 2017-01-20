@extends( 'layouts.app' )

@section( 'content' )
    <div class="container">
      <figure class="logo">
        {!! Html::image( asset( 'images/logo-cachorro.png' ), "ABC Cachorro", [] ) !!}
      </figure>

      <img src="https://ugc.kn3.net/i/origin/http://images.wikia.com/bleach/es/images/a/ab/Exito_meme.jpg">

      @foreach( $errors->all( ) as $error )
      <div class="alert alert-warning">
        {{ $error }}
      </div>
      @endforeach
    </div>
@endsection

@section( 'scripts' )
    @parent
@endsection