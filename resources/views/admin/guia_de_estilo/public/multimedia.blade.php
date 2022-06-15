@extends('admin.layouts.layout')
@section('content')
<div class="content-wrapper">
    
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Zona publica</h4>

        <!-- Basic Bootstrap Table -->
        <div class="card" style="padding:1em;">
          <h1 class="card-header" style="color:#0d47a1">Multimedia</h1>
          <h2 style="margin-left:1em;">Imagenes del slider</h2>
          <div class="row" style="width:99%;margin-left:1em;justify-content:space-between; text-align:center;">
            <div class="col-4">
              <img src="../../images/ayamonte/1.png" alt="" width="100%" height="350">
            </div>
            <div class="col-4">
              <img src="../../images/ayamonte/2.png" alt="" width="100%" height="350">
            </div>
            <div class="col-4">
              <img src="../../images/ayamonte/3.png" alt="" width="100%" height="350">
            </div>
          </div>
          <h2 style="margin-left:1em;">Imagenes de Locales</h2>
          <div class="row" style="width:99%;margin-left:1em;justify-content:space-between; text-align:center;">
            <div class="col-4">
              <img src="../../images/locales/local-1-user-1/629a45b0243e1-bg-showcase-3.jpg" alt="" width="100%" height="350">
            </div>
            <div class="col-4">
              <img src="../../images/locales/local-2-user-1/629a493a2ab6b-lidl.jpg" alt="" width="100%" height="350">
            </div>
            <div class="col-4">
              <img src="../../images/locales/local-3-user-1/629a4a1a4462e-passage.jpg" alt="" width="100%" height="350">
            </div>
          </div>
          <h2 style="margin-left:1em;">Imagenes de eventos</h2>
          <div class="row" style="width:99%;margin-left:1em;justify-content:space-between; text-align:center;">
            <div class="col-6">
              <img src="../../images/events/1/62a1c8b495436-el-rocio.jpg" alt="" width="100%" height="350">
            </div>
            <div class="col-6">
              <img src="../../images/events/2/62a1c8b495436-semana-santa.jpg" alt="" width="100%" height="350">
            </div>
          </div>
        </div>
    </div>
</div>
@stop