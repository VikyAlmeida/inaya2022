@extends("layouts.layout")
@section('slogan')
<div class="section type-1" style="margin-top:15%;">
    <div class="row">
        <div class="col-md-5" style="text-align:center;">
            <img src="{{ $user->foto }}" alt="" width="300">
        </div>
        <div class="col-md-7" style="border-left:1px solid #fff">
            <div class="row" style="text-align:center;padding:1em;">
                <h1>{{$user->name}}</h1>
            </div>
            <div class="row" style="padding:1em;margin-left:9%">
                <div class="col-md-6">
                    <label>Email: <b>{{$user->email}}</b></label>
                </div>
                @if($user->type=="customer")
                    <div class="col-md-6">
                        <label>Locales: <b>{{count($user->customer->establishments)}}</b></label>
                    </div>
                @endif
            </div>
            <div class="row" style="padding:1em;margin-left:9%">
              <div class="col-md-6">
                <label>Usuario: <b>{{$user->user}}</b></label>
              </div>
            </div>
            <div class="row" style="padding:1em;">
                <div class="col-md-4" style="text-align:center;padding:1em;">
                    <p><h3>Publicaciones</h3></p>
                    <h1>{{count($user->EventImage_1)}}</h1>
                </div>
                <div class="col-md-4" style="text-align:center;padding:1em;">
                    <p><h3>Likes</h3></p>
                    <h1>{{count($user->EventImage)}}</h1>
                </div>
                <div class="col-md-4" style="text-align:center;padding:1em;">
                    <p><h3>Valoraciones</h3></p>
                    <h1>{{count($user->ratings)}}</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('publications')
<div class="section type-3" style="margin-top: 9em;">
  <div class="container">
    <div class="section-headlines">
      <h4>Tus publicaciones</h4>
    </div>
    <div class="row">
      @if(!$user->eventImages_1)
        <h3>No has hecho ninguna publicacion</h3>
      @else
        @foreach ($user->eventImages_1 as $evento)
        <div class="col-md-4">
          <div class="team_item">
            <div class="img_block"><a href=""><img alt="" src="../../images/events/{{$evento->id}}/{{$evento->image}}" width="290px" height="350px"></a></div>
            <div class="team_body">
              <p style="text-align:justify;">{{$evento->description}}</p>
              </div>
          </div>
        </div><a href=""></a>
        @endforeach
      @endif
    </div>
  </div>
</div>
@stop
@section('contact')
<div class="section type-3" style="margin-top: 9em;">
  <div class="container">
    <div class="section-headlines">
      <h4>Tus favoritos</h4>
    </div>
    <div class="row">
      @if(!$user->eventImages)
        <h3>No has dado like ninguna publicacion</h3>
      @else
        @foreach ($user->eventImages as $event)
        <div class="col-md-4">
          <div class="team_item">
            <div class="img_block"><a href=""><img alt="" src="../../images/locales/{{"local-".$local->id."-user-".$local->customer_id}}/{{$local->profile}}" width="290px" height="350px"></a></div>
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
  </div>
</div>
@stop
@push('scripts')
@endpush