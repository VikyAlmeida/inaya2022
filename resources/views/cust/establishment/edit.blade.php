@extends('cust.establishment.layouts.layout')

@section('slogan')
@if (session('custom_create'))
  <div class="Crear_local" ></div>
    {!! session('custom_create') !!}
  </div>
@endif
<div class="section type-1 section-contact"style="margin-top: 5em;margin-bottom:0;">
    <div class="container">
      <div class="section-headlines">
          <h4 style="margin-bottom:0;">
              Edite un local
          </h4>
          <h2 style="margin-bottom:0;"><a href="{{ url('/customer/misLocales') }}"><i class="fa fa-comments" style="color:#666666"></i>Mis locales</a></h2>
      </div>
      <div class="row">
      <div class="col-lg-12">
      </div>
      <div class="col-lg-10 col-lg-offset-1">
      <form role="form"  method="POST" action="{{ url('/customer/misLocales/update',$local) }}" role="form" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <div class="row">
              <div class="col-lg-6">
                    <label for="">Nombre del local</label>
                    <input type="text" name="name" id="" class="form-control" placeholder="Nombre del local" value="{{ $local->name }}" />
                    @error('name')
                        <span class="invalid-feedback" role="alert" style="margin-bottom:1em;">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
              </div>
              <div class="col-lg-6">
                    <label for="">Perfil</label>
                    <input type="file" name="perfil" class="form-control" id="" placeholder="Perfil">
                  <br class="gap-15"/>
              </div>
          </div>
          <label for="">Direccion de su local</label>
          <div class="row" style="margin-bottom:1em;">
            <div class="col-lg-6">
                <div id="map" class="form-control" style="position: relative;"></div>
                @error('ubicacion')
                    <span class="invalid-feedback" role="alert" style="margin-bottom:1em;">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-lg-6">
                <div class="row" style="margin-bottom:1em;">
                    <div class="col-lg-12">
                        <label for=""  style="width: 94%; margin-left:1em;">Telefono</label>
                        <input type="text" name="tlf" class="form-control" style="width: 94%; margin-left:1em;" value="{{ $local->tlf }}">
                        @error('tlf')
                            <span class="invalid-feedback" role="alert"style="width: 94%; margin-left:1em;">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row" style="margin-bottom:1em;">
                    <div class="col-lg-12">
                        <label for="" style="width: 94%; margin-left:1em;" placeholder="Telefono">Menu</label>
                        <input type="file" name="menu" class="form-control" id="" style="width: 94%; margin-left:1em;">
                    </div>
                </div>
                <div class="row" style="margin-bottom:-1em;">
                    <div class="col-lg-12">
                        <input type="hidden" id="address" value="{{$local->address}}">
                        <label for="" style="width: 94%; margin-left:1em;" placeholder="Telefono">Detalles</label>
                        <textarea name="details" id="" cols="30" rows="9"style="width: 94%; margin-left:1em;" class="form-control">{{ $local->details }}</textarea>
                        @error('details')
                            <span class="invalid-feedback" role="alert"style="width: 94%; margin-left:1em;">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <label>¿Desea que los visitantes de esta web puedan enviarle un mensaje de reserva?</label>
                <input type="checkbox" name="SMS" id="" {{($local->SMS)?'CHECKED':''}}><br>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12" style="margin-top:2em;">
                <button onclick="submit()" class="btn btn-block btn-success">Dar de alta</button>
            </div>
        </div>
        </div>
      </form>
      
    </div>
  </div>
    </div>
</div>
@endsection
@push("styles")
    <link rel="stylesheet" href="../../assets/vendor/fonts/boxicons.css" />
  <link href="https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.css" rel="stylesheet">
  <script src="https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.js"></script>
  <style>
  body { margin: 0; padding: 0; }
  #map { position: absolute; top: 0; bottom: 0; width: 95%; height: 30em; }
  </style>
@endpush
@push("scripts")
<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.min.js"></script>
<link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.css" type="text/css">
<script>
	// TO MAKE THE MAP APPEAR YOU MUST
	// ADD YOUR ACCESS TOKEN FROM
	// https://account.mapbox.com
	mapboxgl.accessToken = 'pk.eyJ1IjoibWp2YWxlbnp1ZWxhIiwiYSI6ImNrb2Fmdm9zZDBpM28ybnFtYTQ2Z2MwMnYifQ.ZY3jTw0-6tjUSOOJXJHsdw';
    const map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [-7.41,37.2],
        zoom: 8
    });
    /* Given a query in the form "lng, lat" or "lat, lng"
     * returns the matching geographic coordinate(s)
     * as search results in carmen geojson format,
     * https://github.com/mapbox/carmen/blob/master/carmen-geojson.md */
    const coordinatesGeocoder = function (query) {
        //alert("1");
        // Match anything which looks like
        // decimal degrees coordinate pair.
        const matches = query.match(
            /^[ ]*(?:Lat: )?(-?\d+\.?\d*)[, ]+(?:Lng: )?(-?\d+\.?\d*)[ ]*$/i
        );
        let div = document.getElementById('map').lastChild.childNodes;
        div[1].lastChild.childNodes[1].value = query;
        //alert(query);
        if (!matches) {
            return null;
        }
        

        return geocodes;
    };
    // Add the control to the map.
    map.addControl(
        new MapboxGeocoder({
            accessToken: mapboxgl.accessToken,
            localGeocoder: coordinatesGeocoder,
            zoom: 4,
            placeholder: 'Introduzca su direccion',
            searchInput: "ubicacion",
            mapboxgl: mapboxgl,
            reverseGeocode: true
        })
    );
    console.log(coordinatesGeocoder);
    let div = document.getElementById('map').lastChild.childNodes;
    div[1].lastChild.childNodes[1].name = "ubicacion";
    div[1].lastChild.childNodes[1].value = document.getElementById('address').value;
    //div[1].lastChild.childNodes[1].value = div[1].lastChild.childNodes[1].placeholder;
</script>
@endpush