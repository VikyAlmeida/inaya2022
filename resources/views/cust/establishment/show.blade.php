@extends('cust.layouts.layout')
@section('slogan')
@auth
    @if (session('custom_create'))
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
<div class="section type-1 big splash" style="background-image: url('../../images/locales/local-{{$local->id}}-user-{{auth()->user()->customer->id}}/{{$local->profile}}')">
  <div class="container">
    <div class="splash-block">
      <div class="centered">
        <div class="container">
          <div class="section-headlines" style="margin-top: 9em;">
            <h1 style="margin-top: 1em;">{{$local->name}}</h1>
            <p>Propiedad de: {{$local->customer->user->name}}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="jump4" class="jumper"></div>
@stop
@section('publications')
<div class="section type-2">
  <div class="container">
    <div class="section-headlines">
        <div class="row" style="justify-content:space-between">
            <div class="col-md-6" style="text-align:justify;">
                {{$local->details}}
            </div>
            <div class="col-md-6" style="height:30em">
                <input type="hidden" id="address" value="{{$local->address}}"/>
                <div id="map"></div>
            </div>
        </div>
        <div class="row" style="justify-content:space-between">
            <div class="col-md-7" style="">
                <h1>
                    Publicacion
                    <i id="add_publicacion" class="menu-icon tf-icons bx bxs-plus-square" onclick="add_publicacion()"></i>
                    <form action="{{ url('/customer/misLocales/publicacion/add') }}" method="post" id="add_form_publicacion" style="display:none;margin-bottom:2em;" enctype="multipart/form-data">
                        @csrf
                        <label for="" class="form-control" style="width:15%;border:0px;margin:0; background-color:transparent;">Titulo</label>
                        <input type="text" name="title" class="form-control" style="height:2em;">
                        <label for="" class="form-control" style="width:15%;border:0px;margin:0;background-color:transparent;">Foto</label>
                        <input type="file" name="image" class="form-control">
                        <label for="" class="form-control" style="width:15%;border:0px;margin:0;background-color:transparent;">Mensaje</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                        <input type="hidden" name="establishment_id" value="{{$local->id}}">
                        <input type="submit" id="SMS_submit" value="Publicar" class="form-control">
                    </form>
                    @if ($errors->has('title'))
                        <p>{{ $errors->first('title') }}</p>
                    @endif
                    @if ($errors->has('description'))
                        <p>{{ $errors->first('description') }}</p>
                    @endif
                </h1> 
                <div class="row" style="text-align:justify;item-align:right;">
                    @foreach ($local->publications as $publication)
                        <h1>{{$publication->title}}</h1>
                        <img src="../../images/locales/local-{{$local->id}}-user-{{$local->customer_id}}/publishment/{{$publication->image}}" width="500">
                        <p style="margin-bottom:2em;">{{$publication->description}}</p>
                        <hr style="width:80%;text-align:left;">
                    @endforeach
                </div>
            </div>
            <div class="col-md-5" style="height:30em">
                <div class="row">
                    <h1>Representacion de la empresa</h1>
                    <img style="width:100%" src="../../images/locales/local-{{$local->id}}-user-{{$local->customer_id}}/{{$local->menu}}" alt="imagen">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
    </div>
  </div>
</div>
@stop
@section('comment')
@stop
@push("styles")
    <link rel="stylesheet" href="../../assets/vendor/fonts/boxicons.css" />
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.css" rel="stylesheet">
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.js"></script>
    <style>
        body { margin: 0; padding: 0; }
        #map { position: absolute; top: 0; bottom: 0; width: 100%; height: 30em;}
        #SMS_submit {width:20%;margin-top:0.5em;margin-left: 0 auto;}
        #SMS_submit:hover {color:#a5b3bf; background-color:#242b32;}
        i#add_publicacion {margin-right:0.5em;font-size:35px;color:#242b32;}
        i#add_publicacion:hover {color:white; background-color:#242b32;border-radius: 5px;}
    </style>
@endpush
@push('scripts')
<script src="https://unpkg.com/@mapbox/mapbox-sdk/umd/mapbox-sdk.min.js"></script>
 
<script>
	// TO MAKE THE MAP APPEAR YOU MUST
	// ADD YOUR ACCESS TOKEN FROM
	// https://account.mapbox.com
	mapboxgl.accessToken = 'pk.eyJ1IjoibWp2YWxlbnp1ZWxhIiwiYSI6ImNrb2Fmdm9zZDBpM28ybnFtYTQ2Z2MwMnYifQ.ZY3jTw0-6tjUSOOJXJHsdw';
const mapboxClient = mapboxSdk({ accessToken: mapboxgl.accessToken });
mapboxClient.geocoding
.forwardGeocode({
query: document.getElementById("address").value,
autocomplete: false,
limit: 1
})
.send()
.then((response) => {
if (
!response ||
!response.body ||
!response.body.features ||
!response.body.features.length
) {
console.error('Invalid response:');
console.error(response);
return;
}
const feature = response.body.features[0];
 
const map = new mapboxgl.Map({
container: 'map',
style: 'mapbox://styles/mapbox/streets-v11',
center: feature.center,
zoom: 15
});
 
// Create a marker and add it to the map.
new mapboxgl.Marker().setLngLat(feature.center).addTo(map);
});
function form_SMS(){
    let form = document.getElementById("form-SMS");
    (form.style.display === "none")?form.style.display = "block":form.style.display = "none";
}
function add_publicacion(){
    let form = document.getElementById("add_form_publicacion");
    (form.style.display === "none")?form.style.display = "block":form.style.display = "none";
}
</script>
 
@endpush