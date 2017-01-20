@extends( 'layouts.app' )

@section( 'content' )
    <div class="container">
      <figure class="logo">
        {!! Html::image( asset( 'images/logo-cachorro.png' ), "ABC Cachorro", [] ) !!}
      </figure>

      <img src="http://vignette2.wikia.nocookie.net/fairytailfanon/images/7/7c/Fail_Meme.jpg/revision/latest?cb=20160602022650" alt="">

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