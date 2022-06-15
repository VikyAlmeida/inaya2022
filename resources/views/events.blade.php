@extends("layouts.layout")
@section('slogan')
<div class="section type-3">
  <h1 style="text-align:center">Calendario de eventos</h1>
  <div style="width:60%;height:10%;margin:0 auto;margin-top:-9em;">
    <div class="container" style="background-color:white; width:60%;margin-top:-5em;">
      <div style="height:11em"></div>
      <div class="calendar" style="">
        <div class="row header-calendar">
          <div class="col-lg-12 col-md-0" style="display: flex; justify-content: space-between; padding: 10px;">
            <form action="/eventos" method="post">
              @csrf
              <input type="hidden" name="month" value="{{ $data['next'] }}">
              <button type="submit" style="background-color:transparent; border:0px;">
                <i class="fas fa-chevron-circle-right" style="font-size:30px;color:white;" onclick="submit()"></i>
              </button>
            </form>
            <h2 style="font-weight:bold;margin:10px;"><?= $mespanish; ?> <small><?= $data['year']; ?></small></h2>
            <form action="/eventos" method="post">
              @csrf
              <input type="hidden" name="month" value="{{ $data['last'] }}">
              <button type="submit" style="background-color:transparent; border:0px;">
                <i class="fas fa-chevron-circle-right" style="font-size:30px;color:white;" onclick="submit()"></i>
              </button>
            </form>
          </div>
    
        </div>
        <div class="row" style="display: flex; justify-content: space-between; padding: 10px;">
          <div class="col header-col-2">Lunes</div>
          <div class="col header-col-2">Martes</div>
          <div class="col header-col-2">Miercoles</div>
          <div class="col header-col-2">Jueves</div>
          <div class="col header-col-2">Viernes</div>
          <div class="col header-col-2">Sabado</div>
          <div class="col header-col-2">Domingo</div>
        </div>
        <!-- inicio de semana -->
        @foreach ($data['calendar'] as $weekdata)
          <div class="row" style="display: flex; justify-content: space-between; padding: 10px;">
            <!-- ciclo de dia por semana -->
            @foreach  ($weekdata['datos'] as $dayweek)
    
            @if  ($dayweek['mes']==$mes)
              <div class="col box-day" style="width:11em;height:4em;">
                {{ $dayweek['dia']  }}
                <!-- evento -->
                @foreach  ($dayweek['evento'] as $event) 
                    <button type="button" class="badge badge-info" href="{{ asset('/Evento/details/') }}/{{ $event->id }}" style="background-color: #c2dff0;color:black;padding:0.2em;" onmouseover="submit()" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                      {{ $event->title }}
                    </button>
                @endforeach
              </div>
            @else
            <div class="col box-dayoff"  style="width:11em;height:4em;">
            </div>
            @endif
            @endforeach
          </div>
        @endforeach
      </div>
  <!-- Modal -->
    </div> 
  </div>
</div>
@stop
@section('publications')
  <div class="section type-2"> 
    <div class="row">
      <h1 style="text-align:center;margin:-2em; margin-bottom:5em;">Eventos</h1>
    </div>
    <div class="row" style="text-align:center;">
      @if(!count($events))
        <h3>No hay ningun evento</h3>
      @endif
    </div>
    @foreach($events as $event)
    <div class="row">
      <div class="col-lg-6">
        <img src="../../images/events/{{$event->id}}/{{$event->image}}" alt=""  style="width:100%">
      </div>
      <div class="col-lg-6" style="margin-top:-15em;">
         <h1 style="text-align:center">{{$event->title}}</h1>
         <p style="text-align:center">{!!$event->description!!}</p>
         <a href="{{ url('eventos',$event) }}">Ver mas</a>
      </div>
    </div>
    @endforeach
  </div>
@stop
@push('styles')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Exo&display=swap" rel="stylesheet">
<style>
    body{
       background-color:#212121;
    }
    h1{
      color:black;
      margin-top:6em;
    }
    .header-col{
      background: #E3E9E5;
      color:#536170;
      text-align: center;
      font-size: 20px;
      font-weight: bold;width:10em;
    }
    .header-calendar{
      background: #4F93F7;color:white;margin:0;
    }
    .box-day{
      border:1px solid #E3E9E5;
      height:150px;margin:0;
    }
    .box-dayoff{
      border:1px solid #E3E9E5;
      height:150px;
      background-color: #ccd1ce;
    }
</style>
@endpush
@push('scripts')
@endpush