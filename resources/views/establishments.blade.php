@extends("layouts.layout")
@section("publications")
<div class="section type-1" style="padding-bottom: 0">
  <div class="container" style="margin-top: 5em;">
    <div class="section-headlines">
      <h4>Locales</h4>
    </div>
    <!-- filtros -->
    <!-- Para usar los filtros hay que poner por que se quiere filtrar en el data-filter y en el class mix filtro -->
  </div>
  <div class="mixitup">
    <ul id="Grid" class="unstyled">
      @foreach($locales as $local)
      <li class="mix {{$local->RantinsTotal}}★" style="padding:4em;">
        <div>
          <div class="media-thumb" style="height:25em"> 
            <a href="{{ url('/locales',$local) }}"><img src="../../images/locales/{{"local-".$local->id."-user-".$local->customer_id}}/{{$local->profile}}" ></a>
            <div class="media-desc">
              <div>
                <p><b>{{$local->name}} {{ $local->rantins }}</b></p>
                <p class="valoracion" style="margin:0;padding:0;">
                  <input id="starsFood1" type="radio" name="stars_food" value="5">
                  <label for="starsFood1" class="{{ ($local->RantinsTotal==5)? 'stars': '' }}">★</label>
                  <input id="starsFood2" type="radio" name="stars_food" value="4">
                  <label for="starsFood2" class="{{ ($local->RantinsTotal>=4)? 'stars': '' }}">★</label>
                  <input id="starsFood3" type="radio" name="stars_food" value="3">
                  <label for="starsFood3" class="{{ ($local->RantinsTotal>=3)? 'stars': '' }}">★</label>
                  <input id="starsFood4" type="radio" name="stars_food" value="2">
                  <label for="starsFood4" class="{{ ($local->RantinsTotal>=2)? 'stars': '' }}">★</label>
                  <input id="starsFood5" type="radio" name="stars_food" value="1">
                  <label for="starsFood5" class="{{ ($local->RantinsTotal>=1)? 'stars': '' }}">★</label>
                </p>
                <div>
                  {{$local->details}}
                </div>
                <div style="width:50%">
                   <h4>Puntuaciones</h4>
                   <table style="width:100%;height:100%">
                      <tr>
                        <td><p>Productos/Comidas</p></td>
                        <td>
                          <p class="valoracion" style="margin:0;padding:0;">
                            <input id="starsFood1" type="radio" name="stars_food" value="5">
                            <label for="starsFood1" class="{{ ($local->RantinsComida==5)? 'stars': '' }}">★</label>
                            <input id="starsFood2" type="radio" name="stars_food" value="4">
                            <label for="starsFood2" class="{{ ($local->RantinsComida>=4)? 'stars': '' }}">★</label>
                            <input id="starsFood3" type="radio" name="stars_food" value="3">
                            <label for="starsFood3" class="{{ ($local->RantinsComida>=3)? 'stars': '' }}">★</label>
                            <input id="starsFood4" type="radio" name="stars_food" value="2">
                            <label for="starsFood4" class="{{ ($local->RantinsComida>=2)? 'stars': '' }}">★</label>
                            <input id="starsFood5" type="radio" name="stars_food" value="1">
                            <label for="starsFood5" class="{{ ($local->RantinsComida>=1)? 'stars': '' }}">★</label>
                          </p>
                        </td>
                      </tr>
                      <tr>
                        <td><p>Servicio</p></td>
                        <td>
                          <p class="valoracion" style="margin:0;padding:0;">
                            <input id="starsFood1" type="radio" name="stars_food" value="5">
                            <label for="starsFood1" class="{{ ($local->RantinsService==5)? 'stars': '' }}">★</label>
                            <input id="starsFood2" type="radio" name="stars_food" value="4">
                            <label for="starsFood2" class="{{ ($local->RantinsService>=4)? 'stars': '' }}">★</label>
                            <input id="starsFood3" type="radio" name="stars_food" value="3">
                            <label for="starsFood3" class="{{ ($local->RantinsService>=3)? 'stars': '' }}">★</label>
                            <input id="starsFood4" type="radio" name="stars_food" value="2">
                            <label for="starsFood4" class="{{ ($local->RantinsService>=2)? 'stars': '' }}">★</label>
                            <input id="starsFood5" type="radio" name="stars_food" value="1">
                            <label for="starsFood5" class="{{ ($local->RantinsService>=1)? 'stars': '' }}">★</label>
                          </p>
                        </td>
                      </tr>
                      <tr>
                        <td><p>Calidad/Precio</p></td>
                        <td>
                          <p class="valoracion" style="margin:0;padding:0;">
                            <input id="starsFood1" type="radio" name="stars_food" value="5">
                            <label for="starsFood1" class="{{ ($local->RantinsPrice==5)? 'stars': '' }}">★</label>
                            <input id="starsFood2" type="radio" name="stars_food" value="4">
                            <label for="starsFood2" class="{{ ($local->RantinsPrice>=4)? 'stars': '' }}">★</label>
                            <input id="starsFood3" type="radio" name="stars_food" value="3">
                            <label for="starsFood3" class="{{ ($local->RantinsPrice>=3)? 'stars': '' }}">★</label>
                            <input id="starsFood4" type="radio" name="stars_food" value="2">
                            <label for="starsFood4" class="{{ ($local->RantinsPrice>=2)? 'stars': '' }}">★</label>
                            <input id="starsFood5" type="radio" name="stars_food" value="1">
                            <label for="starsFood5" class="{{ ($local->RantinsPrice>=1)? 'stars': '' }}">★</label>
                          </p>
                        </td>
                      </tr>
                      <tr>
                        <td><p>Atmosfera</p></td>
                        <td>
                          <p class="valoracion" style="margin:0;padding:0;">
                            <input id="starsFood1" type="radio" name="stars_food" value="5">
                            <label for="starsFood1" class="{{ ($local->RantinsAtmosphere==5)? 'stars': '' }}">★</label>
                            <input id="starsFood2" type="radio" name="stars_food" value="4">
                            <label for="starsFood2" class="{{ ($local->RantinsAtmosphere>=4)? 'stars': '' }}">★</label>
                            <input id="starsFood3" type="radio" name="stars_food" value="3">
                            <label for="starsFood3" class="{{ ($local->RantinsAtmosphere>=3)? 'stars': '' }}">★</label>
                            <input id="starsFood4" type="radio" name="stars_food" value="2">
                            <label for="starsFood4" class="{{ ($local->RantinsAtmosphere>=2)? 'stars': '' }}">★</label>
                            <input id="starsFood5" type="radio" name="stars_food" value="1">
                            <label for="starsFood5" class="{{ ($local->RantinsAtmosphere>=1)? 'stars': '' }}">★</label>
                          </p>
                        </td>
                      </tr>
                      <tr>
                        <td><a href="{{ url('/locales',$local) }}">Ver mas +</a></td>
                      </tr>
                   </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </li>
      @endforeach
    </ul>
  </div>
  
</div>
@stop
@push("styles")
<style>
  .valoracion {
      position: relative;
      overflow: hidden;
      display: inline-block;
  }
  .valoracion input {
      position: absolute;
      top: -100px;
      color:#33333333
  }
  .valoracion label {
      float: right;
      color:#33333333
      font-size: 30px; 
  }
  .stars{
      color: #309fe0;
  }
  .valoracion label:hover,
  .valoracion label:hover ~ label,
  .valoracion input:checked ~ label {
      color: #309fe0;
  }
@media (max-width: 1020px) {
  #Grid .mix {
    width: 25%;
  }
}
@media (min-width: 768px) and (max-width: 979px) {
  #Grid .mix {
    width: 33.333333%;
  }
}
@media (max-width: 767px) {
  #Grid .mix {
    width: 100%;
  }
}

</style>
@endpush
