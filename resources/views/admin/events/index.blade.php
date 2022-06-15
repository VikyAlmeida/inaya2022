@extends('admin.layouts.layout')
@section('content')
<div class="content-wrapper">
    
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Eventos</h4>

        <!-- Basic Bootstrap Table -->
        <div class="card">
          <h5 class="card-header">Añadir evento</h5>
          @if (session('evento_editado'))
            <div class="alertAdmin" >
              {!! session('evento_editado') !!}
            </div>
          @endif
          @if (session('evento_eliminado'))
            <div class="alertAdmin" >
              {!! session('evento_eliminado') !!}
            </div>
          @endif
          <div class="table-responsive text-nowrap">
            <table class="table" style="width:10em">
                <thead>
                  <tr>
                    <th>Titulo</th>
                    <th>Fecha inicio</th>
                    <th>Fecha final</th>
                    <th>Descripcion</th>
                    <th colspan="2" style="">Acciones</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach($events as $event)
                    <tr>
                      <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$event->title}}</strong></td>
                      <td>{{$event->initDateFormat}}</td>
                      <td>{{$event->finishDateFormat}}</td>
                      <td>{!!$event->description!!}</td>
                      <td style="width:2em;">
                        <a href="{{ url('admin/editar/eventos', $event) }}"><i style="color:rgb(255, 166, 0)" class="trash-icon tf-icons bx bx-edit"></i></a>
                      </td>
                      <td style="width:3em;margin-right:1em;">
                        <form action="{{ url('admin/eliminar/eventos/') }}" method="post" enctype="multipart/form-data" >
                            @csrf 
                            @method("delete")
                            <input type="hidden" name="event_id" value="{{ $event->id }}">
                            <button type="submit" style="border:0px;background-color:white;"><i style="color:red" class="trash-icon tf-icons bx bx-trash"></i></button>
                        </form>	
                      </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
          </div>
        </div>
    </div>
</div>
@stop