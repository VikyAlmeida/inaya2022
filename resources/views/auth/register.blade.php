@extends('auth.layouts.layout')

@section('content')
<div class="section type-1 section-contact"style="margin-top: 5em;">
    <div class="container">
      <div class="section-headlines">
          <h4>
            Registro
          </h4>
          <h2>Si ya tienes una cuenta, ¡<a href="{{ route('login') }}">Logueate</a>!</h2>
      </div>
      <div class="row">
      <div class="col-lg-12">
      </div>
      <div class="col-lg-10 col-lg-offset-1">
      <form role="form"  method="POST" action="{{ route('register') }}" role="form" >
          @csrf
        <div class="form-group">
          <div class="row">
              <div class="col-lg-6">
                <input id="name" type="name" style="margin-bottom:1em"  class="form-control" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Ingresa tu nombre*" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
              </div>
              <div class="col-lg-6">
                    <input id="email" type="email" class="form-control " value="{{ old('email') }}" name="email" required autocomplete="current-email" placeholder="Ingresa tu email*">
                  
                  <br class="gap-15"/>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
              </div>
              <div class="col-lg-12">
                        <input id="user" type="text" class="form-control" name="user" value="{{ old('user') }}" required autocomplete="current-user" placeholder="Ingresa tu usuario*">
                    
                    <br class="gap-15"/>
                        @error('user')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="col-lg-6">
                    <input id="password" type="password"  style="margin-bottom:1em"  class="form-control" name="password" required autocomplete="current-password"  placeholder="Ingrese su contraseña*">
                </div>
                <div class="col-lg-6">    
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="current-password"  placeholder="Repita su contraseña*">
                </div>
                <br class="gap-15"/>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
          </div>
        </div>
        <button onclick="submit()" class="btn btn-block btn-success">Registrate</button>
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
