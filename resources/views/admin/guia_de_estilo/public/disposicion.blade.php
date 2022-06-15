@extends('admin.layouts.layout')
@section('content')
<div class="content-wrapper">
    
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Zona publica</h4>

        <!-- Basic Bootstrap Table -->
        <div class="card" style="padding:1em;">
          <h1 class="card-header" style="color:#0d47a1">Disposicion</h1>
          <h2 style="margin-left:1em;">Mostrar locales 1</h2>
          <div class="row" style="width:99%;margin-left:1em;justify-content:space-between; text-align:center;">
            <div class="col-md-4">
              <div class="team_item" style="justify-content:center;">
                <div class="img_block"><a href=""><img alt="" src="../../images/locales/local-1-user-1/629a45b0243e1-bg-showcase-3.jpg" width="290px" height="350px"></a></div>
                <div class="team_body">
                  <a href=""><h5>Nombre del local</h5></a>
                  <p style="text-align:justify;">Detalles del local</p>
                  <p style="text-align:justify;">Direccion del local</p>
                  </div>
              </div>
            </div>
            <div class="col-md-8">
                <h2>Codigo</h2>
                <textarea name="" id="" cols="60" rows="15">
                    <div class="col-md-4">
                        <div class="team_item" style="justify-content:center;">
                          <div class="img_block"><a href=""><img alt="" src="../../images/locales/local-1-user-1/629a45b0243e1-bg-showcase-3.jpg" width="290px" height="350px"></a></div>
                          <div class="team_body">
                            <a href=""><h5>Nombre del local</h5></a>
                            <p style="text-align:justify;">Detalles del local</p>
                            <p style="text-align:justify;">Direccion del local</p>
                            </div>
                        </div>
                      </div>
                </textarea>
            </div>
          </div>
          <h2 style="margin-left:1em;">Mostrar locales 2</h2>
          <div class="row" style="width:99%;margin-left:1em;justify-content:space-between; text-align:center;">
            <ul id="Grid" class="unstyled">
                <li class="mix 4★" style="padding:4em;">
                  <div>
                    <div class="media-thumb" style="height:25em"> 
                      <a href=""><img src="../../images/locales/local-1-user-1/629a45b0243e1-bg-showcase-3.jpg" ></a>
                      <div class="media-desc">
                        <div>
                          <p><b>Nombre del local Valoracion del local</b></p>
                          <p class="valoracion" style="margin:0;padding:0;">
                            <input id="starsFood1" type="radio" name="stars_food" value="5">
                            <label for="starsFood1">★</label>
                            <input id="starsFood2" type="radio" name="stars_food" value="4">
                            <label for="starsFood2" >★</label>
                            <input id="starsFood3" type="radio" name="stars_food" value="3">
                            <label for="starsFood3" >★</label>
                            <input id="starsFood4" type="radio" name="stars_food" value="2">
                            <label for="starsFood4">★</label>
                            <input id="starsFood5" type="radio" name="stars_food" value="1">
                            <label for="starsFood5">★</label>
                          </p>
                          <div>
                            detalles del local
                          </div>
                          <div style="width:50%">
                             <h4>Puntuaciones</h4>
                             <table style="width:100%;height:100%">
                                <tr>
                                  <td><p>Productos/Comidas</p></td>
                                  <td>
                                    <p class="valoracion" style="margin:0;padding:0;">
                                      <input id="starsFood1" type="radio" name="stars_food" value="5">
                                      <label for="starsFood1" class="">★</label>
                                      <input id="starsFood2" type="radio" name="stars_food" value="4">
                                      <label for="starsFood2" class="">★</label>
                                      <input id="starsFood3" type="radio" name="stars_food" value="3">
                                      <label for="starsFood3" class="">★</label>
                                      <input id="starsFood4" type="radio" name="stars_food" value="2">
                                      <label for="starsFood4" class="">★</label>
                                      <input id="starsFood5" type="radio" name="stars_food" value="1">
                                      <label for="starsFood5" class="">★</label>
                                    </p>
                                  </td>
                                </tr>
                                <tr>
                                  <td><p>Servicio</p></td>
                                  <td>
                                    <p class="valoracion" style="margin:0;padding:0;">
                                      <input id="starsFood1" type="radio" name="stars_food" value="5">
                                      <label for="starsFood1" class="">★</label>
                                      <input id="starsFood2" type="radio" name="stars_food" value="4">
                                      <label for="starsFood2" class="">★</label>
                                      <input id="starsFood3" type="radio" name="stars_food" value="3">
                                      <label for="starsFood3" class>★</label>
                                      <input id="starsFood4" type="radio" name="stars_food" value="2">
                                      <label for="starsFood4" class>★</label>
                                      <input id="starsFood5" type="radio" name="stars_food" value="1">
                                      <label for="starsFood5" class>★</label>
                                    </p>
                                  </td>
                                </tr>
                                <tr>
                                  <td><p>Calidad/Precio</p></td>
                                  <td>
                                    <p class="valoracion" style="margin:0;padding:0;">
                                      <input id="starsFood1" type="radio" name="stars_food" value="5">
                                      <label for="starsFood1" class="">★</label>
                                      <input id="starsFood2" type="radio" name="stars_food" value="4">
                                      <label for="starsFood2" class="">★</label>
                                      <input id="starsFood3" type="radio" name="stars_food" value="3">
                                      <label for="starsFood3" class="">★</label>
                                      <input id="starsFood4" type="radio" name="stars_food" value="2">
                                      <label for="starsFood4" class="">★</label>
                                      <input id="starsFood5" type="radio" name="stars_food" value="1">
                                      <label for="starsFood5" class>★</label>
                                    </p>
                                  </td>
                                </tr>
                                <tr>
                                  <td><p>Atmosfera</p></td>
                                  <td>
                                    <p class="valoracion" style="margin:0;padding:0;">
                                      <input id="starsFood1" type="radio" name="stars_food" value="5">
                                      <label for="starsFood1" class="">★</label>
                                      <input id="starsFood2" type="radio" name="stars_food" value="4">
                                      <label for="starsFood2" class="">★</label>
                                      <input id="starsFood3" type="radio" name="stars_food" value="3">
                                      <label for="starsFood3" class="">★</label>
                                      <input id="starsFood4" type="radio" name="stars_food" value="2">
                                      <label for="starsFood4" class="">★</label>
                                      <input id="starsFood5" type="radio" name="stars_food" value="1">
                                      <label for="starsFood5" class="">★</label>
                                    </p>
                                  </td>
                                </tr>
                                <tr>
                                  <td><a href="">Ver mas +</a></td>
                                </tr>
                             </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            
            <div class="col-md-12">
                <h2>Codigo</h2>
                <textarea name="" id="" cols="150" rows="35">
                    <ul id="Grid" class="unstyled">
                        <li class="mix 4★" style="padding:4em;">
                          <div>
                            <div class="media-thumb" style="height:25em"> 
                              <a href=""><img src="../../images/locales/local-1-user-1/629a45b0243e1-bg-showcase-3.jpg" ></a>
                              <div class="media-desc">
                                <div>
                                  <p><b>Nombre del local Valoracion del local</b></p>
                                  <p class="valoracion" style="margin:0;padding:0;">
                                    <input id="starsFood1" type="radio" name="stars_food" value="5">
                                    <label for="starsFood1">★</label>
                                    <input id="starsFood2" type="radio" name="stars_food" value="4">
                                    <label for="starsFood2" >★</label>
                                    <input id="starsFood3" type="radio" name="stars_food" value="3">
                                    <label for="starsFood3" >★</label>
                                    <input id="starsFood4" type="radio" name="stars_food" value="2">
                                    <label for="starsFood4">★</label>
                                    <input id="starsFood5" type="radio" name="stars_food" value="1">
                                    <label for="starsFood5">★</label>
                                  </p>
                                  <div>
                                    detalles del local
                                  </div>
                                  <div style="width:50%">
                                     <h4>Puntuaciones</h4>
                                     <table style="width:100%;height:100%">
                                        <tr>
                                          <td><p>Productos/Comidas</p></td>
                                          <td>
                                            <p class="valoracion" style="margin:0;padding:0;">
                                              <input id="starsFood1" type="radio" name="stars_food" value="5">
                                              <label for="starsFood1" class="">★</label>
                                              <input id="starsFood2" type="radio" name="stars_food" value="4">
                                              <label for="starsFood2" class="">★</label>
                                              <input id="starsFood3" type="radio" name="stars_food" value="3">
                                              <label for="starsFood3" class="">★</label>
                                              <input id="starsFood4" type="radio" name="stars_food" value="2">
                                              <label for="starsFood4" class="">★</label>
                                              <input id="starsFood5" type="radio" name="stars_food" value="1">
                                              <label for="starsFood5" class="">★</label>
                                            </p>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td><p>Servicio</p></td>
                                          <td>
                                            <p class="valoracion" style="margin:0;padding:0;">
                                              <input id="starsFood1" type="radio" name="stars_food" value="5">
                                              <label for="starsFood1" class="">★</label>
                                              <input id="starsFood2" type="radio" name="stars_food" value="4">
                                              <label for="starsFood2" class="">★</label>
                                              <input id="starsFood3" type="radio" name="stars_food" value="3">
                                              <label for="starsFood3" class>★</label>
                                              <input id="starsFood4" type="radio" name="stars_food" value="2">
                                              <label for="starsFood4" class>★</label>
                                              <input id="starsFood5" type="radio" name="stars_food" value="1">
                                              <label for="starsFood5" class>★</label>
                                            </p>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td><p>Calidad/Precio</p></td>
                                          <td>
                                            <p class="valoracion" style="margin:0;padding:0;">
                                              <input id="starsFood1" type="radio" name="stars_food" value="5">
                                              <label for="starsFood1" class="">★</label>
                                              <input id="starsFood2" type="radio" name="stars_food" value="4">
                                              <label for="starsFood2" class="">★</label>
                                              <input id="starsFood3" type="radio" name="stars_food" value="3">
                                              <label for="starsFood3" class="">★</label>
                                              <input id="starsFood4" type="radio" name="stars_food" value="2">
                                              <label for="starsFood4" class="">★</label>
                                              <input id="starsFood5" type="radio" name="stars_food" value="1">
                                              <label for="starsFood5" class>★</label>
                                            </p>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td><p>Atmosfera</p></td>
                                          <td>
                                            <p class="valoracion" style="margin:0;padding:0;">
                                              <input id="starsFood1" type="radio" name="stars_food" value="5">
                                              <label for="starsFood1" class="">★</label>
                                              <input id="starsFood2" type="radio" name="stars_food" value="4">
                                              <label for="starsFood2" class="">★</label>
                                              <input id="starsFood3" type="radio" name="stars_food" value="3">
                                              <label for="starsFood3" class="">★</label>
                                              <input id="starsFood4" type="radio" name="stars_food" value="2">
                                              <label for="starsFood4" class="">★</label>
                                              <input id="starsFood5" type="radio" name="stars_food" value="1">
                                              <label for="starsFood5" class="">★</label>
                                            </p>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td><a href="">Ver mas +</a></td>
                                        </tr>
                                     </table>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                </textarea>
            </div>
          </div>
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
<link type="text/css" href="../../css/theme.css" rel="stylesheet">
@endpush