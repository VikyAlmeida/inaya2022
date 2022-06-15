@extends('admin.layouts.layout')
@section('content')
<div class="content-wrapper">
    
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Zona publica</h4>

        <!-- Basic Bootstrap Table -->
        <div class="card" style="padding:1em;">
          <h1 class="card-header" style="color:#0d47a1">COLORES</h1>
          <h2 style="margin-left:1em;">Gama de colores violetas</h2>
          <div class="row" style="width:99%;margin-left:1em;justify-content:space-between; text-align:center;">
            <div class="col-md-3" style="background-color:#24292f;padding:0.5em;color:white;">#243746</div>
            <div class="col-md-3" style="background-color:#696cff;padding:0.5em;color:white;">#696cff</div>
            <div class="col-md-3" style="background-color:#696cff29;padding:0.5em;color:black;">#696cff29</div>
          </div>
          <h2 style="margin-left:1em;">Gama de grises</h2>
          <div class="row" style="width:99%;margin-left:1em;justify-content:space-between; text-align:center;">
            <div class="col-md-2" style="background-color:#566a7f;padding:0.5em;color:black;">#566a7f</div>
            <div class="col-md-2" style="background-color:#697a8d;padding:0.5em;color:black;">#697a8d</div>
            <div class="col-md-2" style="background-color:#a1acb8;padding:0.5em;color:black;">#a1acb8</div>
            <div class="col-md-2" style="background-color:#F5F5F9;padding:0.5em;color:black;">#F5F5F9</div>
            <div class="col-md-2" style="background-color:#ffffff;padding:0.5em;color:black;">#ffffff</div>
          </div>
        </div>
    </div>
</div>
@stop