@extends("layouts.layout")
@section('slogan')
    <div class="section type-2"> 
        <div id='map'></div>
        <nav id="listing-group" class="listing-group"></nav>
    </div>
@stop
@push('styles')
<link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />
<link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.css" type="text/css">
<link rel="stylesheet" type="text/css" href="Mapa_Directions/mapbox-gl-directions-master/src/mapbox-gl-directions.css">
<link rel="stylesheet" type="text/css" href="Mapa_Directions/mapa_directions.css">
@endpush

@push('scripts')
<script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.min.js"></script>
<script type="text/javascript" src="Mapa_Directions/mapbox-gl-directions-master/dist/mapbox-gl-directions.js"></script>
<script type="text/javascript" src='Mapa_Directions/mapa_directions.js'></script>
@endpush