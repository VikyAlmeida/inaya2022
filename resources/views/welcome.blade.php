@extends("layouts.layout")
@section('slogan')
@if (session('custom_create'))
  <div class="alertAdmin" ></div>
    {!! session('custom_create') !!}
  </div>
@endif
@auth
  @if(auth()->user()->type == 'customer' && auth()->user()->customer->status == 'accepted' && auth()->user()->customer->menssage == "send")
    <script>
      Swal.fire(
        'Ya es cliente enhorabuenaaaaa!',
        'Tu solicitud ha sido aceptada por el administrador, por lo que ya puede dar de alta a sus establecimientos',
        'success'
      )
    </script>
  @endif
@endauth
<div class="jumper" id="jump0"></div>
<div class="section type-1 big splash" id="slider">
  <div class="container">
    <div class="splash-block">
      <div class="centered">
        <div class="container">
          <div class="section-headlines" style="margin-top: 9em;">
            <h1 style="margin-top: 1em;">Ayamonte</h1>
            <p>Ayamonte, paraíso de luz</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="jump4" class="jumper"></div>
@stop
@section('publications')
<div class="section type-3" style="margin-top: 9em;">
  <div class="container">
    <div class="section-headlines">
      <h4>Tus locales</h4>
    </div>
    <div class="row">
      @if(!$establishments)
        <h3>No has dado de alta a ningun establecimiento</h3>
      @else
        @foreach ($establishments as $local)
        <div class="col-md-4">
          <div class="team_item">
            <div class="img_block"><a href="{{ url('/locales',$local->slug) }}"><img alt="" src="../../images/locales/{{"local-".$local->id."-user-".$local->customer_id}}/{{$local->profile}}" width="290px" height="350px"></a></div>
            <div class="team_body">
              <a href=""><h5>{{ $local->name }}</h5></a>
              <p style="text-align:justify;">{{$local->details}}</p>
              <p style="text-align:justify;">Direccion: {{$local->address}}</p>
              </div>
          </div>
        </div><a href=""></a>
        @endforeach
      @endif
    </div>
    
    <!--end:.row--> 
  </div>
  <!--end:.container--> 
</div>
@stop
@section('comment')
<div id="jump5" class="jumper"></div>
<!-- Testimonials -->
<div class="section type-2"> 
  <div class="container">
    <div class="section-headlines">
      <h4>Comentarios</h4>
    </div>
    @if(count($publishment))
    <div id="carousel-testimonial" class="carousel slide bs-docs-carousel-example">
      <div class="carousel-inner">
        <div class="item active">
          <div class="testimonial media">
            <div class="testimonial-avatar pull-right hidden-xs	"> <img src="../../images/events/{{$publishment[0]->event_id}}/{{$publishment[0]->image}}" class="avatar size-default img-circle"> </div>
            <div class="testimonial-content media-body">
              <p class="lead">{{$publishment[0]->comment}}</p>
              Autor - <b>{{ $publishment[0]->user->name }}</b> </div>
          </div>
        </div>
        @foreach ($publishment as $event_image)
        @if($event_image->id != $publishment[0]->id)
        <div class="item">
          <div class="testimonial media">
            <div class="testimonial-avatar pull-right hidden-xs	"> <img src="../../images/events/{{$event_image->event_id}}/{{$event_image->image}}" class="avatar size-default img-circle"> </div>
            <div class="testimonial-content media-body">
              <p class="lead">{{$event_image->comment}}</p>
              Autor - <b>{{ $event_image->user->name }}</b> </div>
          </div>
        </div>
        @endif
        @endforeach
      </div>
      <div class="carousel-controller btn-group"> <a class="btn btn-xs btn-inverse" href="#carousel-testimonial" data-slide="prev"> <i class="icon-angle-left"></i> </a> <a class="btn btn-xs btn-inverse" href="#carousel-testimonial" data-slide="next"> <i class="icon-angle-right"></i> </a> </div>
    </div>
    @else
    <h4>No hay comentarios</h4>
    @endif
  </div>
</div>

@stop
@section('contact')
<div id="jump6" class="jumper"></div>
 <div class="section type-1 section-contact">
  <div class="container">
    <div class="section-headlines">
      <h4>Contactanos para hacerte cliente</h4>
      <h2>Promocionate!!</h2>
    </div>
    <div class="row">
    <div class="col-lg-4">
      <div class="visible-xs visible-sm"> <br class="gap-30" />
        <hr class="gap-divider" />
        <br class="gap-30" />
      </div>
    </div>
    <div class="col-lg-10 col-lg-offset-1">
    <form role="form" action="{{ url('/customer/request') }}" method="post" role="form">
      @csrf
      <div class="form-group">
        <div class="row">
          <div class="col-lg-6">
            <input type="text"  style="margin-bottom:1em"  class="form-control" id="name" name="name" placeholder="Ingresa tu nombre *">
            @if ($errors->has('name'))
                <p>{{ $errors->first('name') }}</p>
            @endif
          </div>
          <div class="col-lg-6">
            <input type="email" class="form-control" id="email" name="email" placeholder="Ingresa tu email *">
            @if ($errors->has('email'))
                <p>{{ $errors->first('email') }}</p>
            @endif
            <br class="gap-15"/>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <input type="text" class="form-control"  style="margin-bottom:1em" id="user" name="user" placeholder="Ingresa tu usuario *">
            @if ($errors->has('user'))
                <p>{{ $errors->first('user') }}</p>
            @endif
          </div>
          <div class="col-lg-6">
            <input type="password" class="form-control" id="password" name="password" placeholder="Ingresa tu contraseña *">
            @if ($errors->has('password'))
                <p>{{ $errors->first('password') }}</p>
            @endif
          </div>
        </div>
      </div>
      <input type="submit" id="button-send" class="btn btn-block btn-success">
    </form>
	<div id="success">Your message has been successfully!</div>
	<div id="error">Unable to send your message, please try later.</div>	
  </div>
</div>
</div>
</div>
@stop
@push('scripts')
<script>
  $(document).ready(function(){
    setInterval(alertFunc, 5000);
    function alertFunc() {
      let url = $("#slider").css("background-image");
      if(url ===  `url("http://127.0.0.1:5500/images/ayamonte/1.png")`) url = `url("http://127.0.0.1:5500/images/ayamonte/2.png")`;
      else if(url ===  `url("http://127.0.0.1:5500/images/ayamonte/2.png")`) url = `url("http://127.0.0.1:5500/images/ayamonte/3.png")`;
      else url = `url("http://127.0.0.1:5500/images/ayamonte/1.png")`;

      $("#slider").css("background-image",`${url}`).fadeIn('slow');
    }
  });
</script>
@endpush