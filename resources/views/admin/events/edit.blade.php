@extends('admin.layouts.layout')
@section('content')
<div class="content-wrapper">
    
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Eventos</h4>
         
        <!-- Basic Bootstrap Table -->
        <div class="card">
          <h5 class="card-header">Añadir evento</h5>
          <div class="table-responsive ">
            <form action="{{ url('admin/editar/eventos') }}" method="post">
              @csrf
              <div class="row" style="margin-left:1em;">
                  <div class="col-6">
                    <label class="form-label">Titulo</label>
                    <input
                      type="text"
                      class="form-control"
                      name="title"
                      value="{{$event->title}}"
                    />
                    @error('title')
                        <span style="margin-bottom:1em;">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="col-3" style="margin-top:-0.4em;">
                      <label for="html5-date-input" class="col-md-2 col-form-label">fecha inicio</label>
                      <div class="col-md-10">
                        <input class="form-control" type="date" id="html5-date-input" name="initDate" value={{$event->initDate_at}} />
                        @error('initDate')
                            <span style="margin-bottom:1em;">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                  </div>
                  <div class="col-3" style="margin-top:-0.4em;">
                    <label for="html5-date-input" class="col-md-2 col-form-label">fecha final</label>
                    <div class="col-md-10">
                      <input class="form-control" type="date" id="html5-date-input" name="finishDate" value={{$event->finishDate_at}} />
                      @error('finishDate')
                          <span style="margin-bottom:1em;">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                  </div>
                </div>
                <div class="row" style="margin-left:1em;">
                  <div class="col-10">
                    <label for="html5-date-input" class="col-md-2 col-form-label">Detalles</label>
                    <textarea name="description" id="description">{!!$event->description!!}</textarea>
                    @error('description')
                        <span style="margin-bottom:1em;">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input type="hidden" name="event_id" value={{$event->id}} />
                  </div>
                  <div class="row" style="margin-left:1em;">
                    <div class="col-2 mt-3">
                      <input type="submit" value="Editar evento" class="form-control">
                    </div>
                  </div>
                </div>
            </form>
          </div>
        </div>
    </div>
</div>
@stop