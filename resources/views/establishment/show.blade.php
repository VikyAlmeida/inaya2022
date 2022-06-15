@extends('establishment.layouts.layout')
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
<div class="section type-1 big splash" style="background-image: url('../../images/locales/local-{{$local->id}}-user-{{$local->id}}/{{$local->profile}}')">
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
                @auth
                  @if($local->SMS)
                  <div class="row">
                      <button style="background-color:transparent;border:0px;" onclick="form_SMS()">
                          <h1>Haz click para reservar</h1>
                      </button>
                      <form action="{{ url('locales/SMS') }}" method="post" id="form-SMS" style="display:none;margin-bottom:2em;">
                          @csrf
                          <input type="hidden" name="local_id" value="{{ $local->id }}">
                          <label for="" class="form-control" style="width:15%;border:0px;">Message</label>
                          <input type="text" name="message" class="form-control" style="height:2em;" value="Reservar mesa para 4 para mañana">
                          <input type="submit" id="SMS_submit" value="Reservar" class="form-control">
                      </form>
                      @if ($errors->has('message'))
                          <p>{{ $errors->first('message') }}</p>
                      @endif
                  </div>
                  @endif
                @endauth
                <div class="row">
                    <h1>Representacion de la empresa</h1>
                    <img style="width:100%" src="../../images/locales/local-{{$local->id}}-user-{{$local->customer_id}}/{{$local->menu}}" alt="imagen">
                </div>
                @auth
                <div class="row" style="margin-top:3em;margin-bottom:3em; padding-bottom: 3em;">
                    <h1>Valora</h1>
                    <form action="{{ url('valorations') }}" method="post">
                        @csrf
                        <table style="width:100%;height:100%">
                            <tr style="border-bottom: 1px solid black;">
                              <td><p style="text-align:justify;margin:0;padding:0;">Producto/Comida</p></td>
                              <td>
                                <p class="valoracion" style="margin:0;padding:0;">
                                  <input id="starsFood1" type="radio" name="stars_food" value="5">
                                  <label for="starsFood1">★</label>
                                  <input id="starsFood2" type="radio" name="stars_food" value="4">
                                  <label for="starsFood2">★</label>
                                  <input id="starsFood3" type="radio" name="stars_food" value="3">
                                  <label for="starsFood3">★</label>
                                  <input id="starsFood4" type="radio" name="stars_food" value="2">
                                  <label for="starsFood4">★</label>
                                  <input id="starsFood5" type="radio" name="stars_food" value="1">
                                  <label for="starsFood5">★</label>
                                </p>
                              </td>
                              <td>
                                @if ($errors->has("stars_food"))
                                  {{ $errors->first("stars_food") }}
                                @endif
                              </td>
                            </tr>
                            <tr style="border-bottom: 1px solid black;">
                              <td><p style="text-align:justify;margin:0;padding:0;">Servicio</p></td>
                              <td>
                                <p class="valoracion"style="margin:0;padding:0;">
                                  <input id="starsService1" type="radio" name="stars_service" value="5">
                                  <label for="starsService1">★</label>
                                  <input id="starsService2" type="radio" name="stars_service" value="4">
                                  <label for="starsService2">★</label>
                                  <input id="starsService3" type="radio" name="stars_service" value="3">
                                  <label for="starsService3">★</label>
                                  <input id="starsService4" type="radio" name="stars_service" value="2">
                                  <label for="starsService4">★</label>
                                  <input id="starsService5" type="radio" name="stars_service" value="1">
                                  <label for="starsService5">★</label>
                                </p>
                              </td>
                              <td>
                                @if ($errors->has("stars_service"))
                                  {{ $errors->first("stars_service") }}
                                @endif
                              </td>
                            </tr>
                            <tr style="border-bottom: 1px solid black;">
                              <td><p style="text-align:justify;margin:0;padding:0;">Calidad/Precio</p></td>
                              <td>
                                <p class="valoracion"style="margin:0;padding:0;">
                                  <input id="starsPriceQuality1" type="radio" name="stars_relation_price_quality" value="5">
                                  <label for="starsPriceQuality1">★</label>
                                  <input id="starsPriceQuality2" type="radio" name="stars_relation_price_quality" value="4" >
                                  <label for="starsPriceQuality2">★</label>
                                  <input id="starsPriceQuality3" type="radio" name="stars_relation_price_quality" value="3">
                                  <label for="starsPriceQuality3">★</label>
                                  <input id="starsPriceQuality4" type="radio" name="stars_relation_price_quality" value="2">
                                  <label for="starsPriceQuality4">★</label>
                                  <input id="starsPriceQuality5" type="radio" name="stars_relation_price_quality" value="1">
                                  <label for="starsPriceQuality5">★</label>
                                </p>
                              </td>
                              <td>
                                @if ($errors->has("stars_relation_price_quality"))
                                  {{ $errors->first("stars_relation_price_quality") }}
                                @endif
                              </td>
                            </tr>
                            <tr>
                              <td><p style="text-align:justify;margin:0;padding:0;">Atmosfera</p></td>
                              <td>
                                <p class="valoracion"style="margin:0;padding:0;">
                                  <input id="starsAtmosphere1" type="radio" name="stars_atmosphere" value="5">
                                  <label for="starsAtmosphere1">★</label>
                                  <input id="starsAtmosphere2" type="radio" name="stars_atmosphere" value="4">
                                  <label for="starsAtmosphere2">★</label>
                                  <input id="starsAtmosphere3" type="radio" name="stars_atmosphere" value="3">
                                  <label for="starsAtmosphere3">★</label>
                                  <input id="starsAtmosphere4" type="radio" name="stars_atmosphere" value="2">
                                  <label for="starsAtmosphere4">★</label>
                                  <input id="starsAtmosphere5" type="radio" name="stars_atmosphere" value="1">
                                  <label for="starsAtmosphere5">★</label>
                                </p>
                              </td>
                              <td>
                                @if ($errors->has("stars_atmosphere"))
                                  {{ $errors->first("stars_atmosphere") }}
                                @endif
                              </td>
                            </tr>
                            <tr>
                                <td><p style="text-align:justify;margin:0;padding:0;">Comentario</p></td>
                                <td><textarea name="comment" id="" cols="30" rows="10" class="form-control"></textarea></td>
                            </tr>
                            <tr>
                              <td style="text-align:justify;margin:0;padding:0;">
                                    <input type="hidden" name="establishment_id" value="{{ $local->id }}">
                                    <input type="submit" value="Enviar valoracion" class="btn btn-default" style="border:1px solid grey;">
                                </td>
                            </tr>
                         </table>
                    </form>
                </div>
                @endauth
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
        .valoracion {
            position: relative;
            overflow: hidden;
            display: inline-block;
        }
        .valoracion input {
            position: absolute;
            top: -100px;
        }
        .valoracion label {
            float: right;
            color: #c1b8b8;
            font-size: 30px; 
        }
        .valoracion label:hover,
        .valoracion label:hover ~ label,
        .valoracion input:checked ~ label {
            color: #309fe0;
        }
        
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