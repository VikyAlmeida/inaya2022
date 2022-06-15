@extends("auth.layouts.layout")

@section('content')
<div class="section type-1 section-contact"style="margin-top: 5em;">
    <div class="container">
      <div class="section-headlines">
          <h4>
              Iniciar sesión
          </h4>
          <h2>Si no te has resgistrado, ¡<a href="{{ route('register') }}">Registrate</a>!</h2>
      </div>
      <div class="row">
      <div class="col-lg-12">
      </div>
      <div class="col-lg-10 col-lg-offset-1">
      <form role="form"  method="POST" action="{{ route('login') }}" role="form" >
          @csrf
        <div class="form-group">
          <div class="row">
              <div class="col-lg-6">
                <input id="email" type="email" style="margin-bottom:1em" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
              </div>
              <div class="col-lg-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                  
                  <br class="gap-15"/>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
              </div>
          </div>
        </div>
        <button onclick="submit()" class="btn btn-block btn-success">Iniciar sesion</button>
        @if(session("addcustomer"))
            <div id="success">
                {{session("addcustomer")}}
            </div>
        @endif
      </form>
      
    </div>
  </div>
    </div>
</div>
@endsection
