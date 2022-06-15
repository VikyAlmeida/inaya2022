@extends('admin.layouts.layout')
@section('content')
<div class="content-wrapper">
    
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Zona publica</h4>

        <!-- Basic Bootstrap Table -->
        <div class="card" style="padding:1em;">
          <h1 class="card-header" style="color:#0d47a1">COLORES</h1>
          <h2 style="margin-left:1em;">Gama de colores azules</h2>
          <div class="row" style="width:99%;margin-left:1em;justify-content:space-between; text-align:center;">
            <div class="col-md-3" style="background-color:#243746;padding:0.5em;color:white;">#243746</div>
            <div class="col-md-3" style="background-color:#0d47a1;padding:0.5em;color:white;">#0d47a1</div>
            <div class="col-md-3" style="background-color:#309fe0;padding:0.5em;color:white;">#309fe0</div>
            <div class="col-md-3" style="background-color:#00a0dc;padding:0.5em;color:white;">#00a0dc</div>
          </div>
          <h2 style="margin-left:1em;">Gama de otros colores</h2>
          <div class="row" style="width:99%;margin-left:1em;justify-content:space-between; text-align:center;">
            <div class="col-md-4" style="background-color:#48783d;padding:0.5em;color:white;">#48783d</div>
            <div class="col-md-4" style="background-color:#efe639;padding:0.5em;color:black;">#efe639</div>
            <div class="col-md-4" style="background-color:#cf2b2e;padding:0.5em;color:white;">#cf2b2e</div>
          </div>
          <h2 style="margin-left:1em;">Gama de negros</h2>
          <div class="row" style="width:99%;margin-left:1em;justify-content:space-between; text-align:center;">
            <div class="col-md-3" style="background-color:#000000;padding:0.5em;color:white;">#000000</div>
            <div class="col-md-3" style="background-color:#2c2b2b;padding:0.5em;color:white;">#2c2b2b</div>
            <div class="col-md-3" style="background-color:#384048;padding:0.5em;color:white;">#384048</div>
            <div class="col-md-3" style="background-color:#555555;padding:0.5em;color:white;">#555555</div>
          </div>
          <h2 style="margin-left:1em;">Gama de blancos</h2>
          <div class="row" style="width:99%;margin-left:1em;justify-content:space-between; text-align:center;">
            <div class="col-md-4" style="background-color:#a5b3bf;padding:0.5em;color:#000000">#a5b3bf</div>
            <div class="col-md-4" style="background-color:#eeeeee;padding:0.5em;color:#000000">#eeeeee</div>
            <div class="col-md-4" style="background-color:#ffffff;padding:0.5em;color:#000000">#ffffff</div>
          </div>
        </div>
    </div>
</div>
@stop