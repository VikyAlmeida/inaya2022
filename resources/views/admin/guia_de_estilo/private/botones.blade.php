@extends('admin.layouts.layout')
@section('content')
<div class="content-wrapper">
    
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Zona publica</h4>

        <!-- Basic Bootstrap Table -->
        <div class="card" style="padding:1em;">
          <h1 class="card-header" style="color:#0d47a1">Botones</h1>
          <h2 style="margin-left:1em;"></h2>
          <div class="row" style="width:99%;margin-left:1em;justify-content:space-between; text-align:center;">
            <div class="col-6">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="color:#697a8d;background-color:#ffffff;font-size:14px;font-family:roboto;border:1px solid #333333">
                    PULSAME PARA VER LOS ESTILOS
                </button>
            </div>
          </div>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h6>Colores</h6>
          <div class="row"style="width:99%;margin-left:1em;justify-content:space-between; text-align:center;margin-bottom:1em;">
            <div class="col-6" style="color:#697a8d;background-color:#333">TEXTO:#697a8d</div>
            <div class="col-6" style="color:black;background-color:#fff">FONDO:#fff</div>
          </div>
          <h6>Fuente</h6>
          <div class="row"style="width:99%;margin-left:1em;justify-content:space-between; text-align:center;">
            <p style="color:#697a8d;background-color:#fff;font-size:14px;font-family:roboto;">Fuente: 14px roboto</p>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
    </div>
</div>
@stop