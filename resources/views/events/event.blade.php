@extends("events.layouts.layout")
@section('publications')
  <div class="section type-2" style="justify-content:center;margin-left:10%;"> 
      <div class="row">
        <h1 style="text-align:center;margin-top:7em;">{{$event->title}}</h1>
      </div>
      <div class="row">
        <div class="col-lg-6" >
              <img src="../../images/events/{{$event->id}}/{{$event->image}}" alt="" style="width:100%">
        </div>
        <div class="col-lg-6">
          <p style="text-align:center">{!!$event->description!!}</p>
        @auth
            <a href="{{ url('/like',$event) }}"><i class="fa fa-heart" style="color:{{$event->color}}"></i></a> {{ count($event->users) }}
            <i class="fa fa-comments" style="color:#666666"></i> {{count($event->EventImages)}}
            <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" onclick="form_event_image()" id="btn-form">
              ¿Desea publicar algo?
          </button>
          <form action="{{ url('/eventImage') }}" method="post" enctype="multipart/form-data" id="form-event-publicacion" style="display: none">
              @csrf
              <h3>Añadir publicacion</h3>
              Añada una imagen <input type="file" name="foto" class="form-control" id="nuestroinput" style="width:30em">
              
              <input type="hidden" name="user_id" value={{auth()->user()->id}}>
              <input type="hidden" name="event_id" value={{$event->id}}>
              Añada un comentario <br/> <textarea name="comment" cols="100" rows="3" style="width:30em"></textarea><br><br>
              <button type="submit" class="btn btn-secondary">Enviar</button>
          </form>
          @if ($errors->has('foto'))
              <p>{{ $errors->first('foto') }}</p>
          @endif
          @if ($errors->has('comment'))
              <p>{{ $errors->first('comment') }}</p>
          @endif
        @endauth
      </div>
    </div>
  </div>
@stop
@section('comment')
<div class="section type-2" style="margin-top:-10em;">
  <h2 style="margin-bottom:2em;text-align:center"><b>Comentarios y publicaciones</b></h2>
  @foreach ($event->EventImages as $event_image)
    <div class="row" style="width:100%;justify-content:center;margin-bottom:1em;margin-left:30%;">
      <div class="col-lg-6 col-md-6"style="margin-right:2em;width:40em;">
            <img src="../../images/events/{{$event->id}}/{{$event_image->image}}" alt="" width="50%" height="225">
      </div>
      <div class="col-lg-6" style="margin-left:1em;width:50%">
        <p style="text-align:justify">{{$event_image->comment}}</p>
      @auth 
        <a href="{{ url('/like/eventImage',$event_image) }}"><i class="fa fa-heart" style="color:{{$event_image->color}}"></i></a> {{ count($event_image->users) }}
        <i class="fa fa-comments" style="color:#666666" onclick="form_event_comment({{$event_image->id}})"></i> {{count($event_image->comments)}}
        <!-- Button trigger modal -->
        <form action="{{ url('/eventImage/comment') }}" method="post" enctype="multipart/form-data" id="form-event-comment-{{$event_image->id}}" style="display: none">
            @csrf
            <h3>Añada un comentario</h3>
            <input type="hidden" name="user_id" value={{auth()->user()->id}}>
            <input type="hidden" name="event_id" value={{$event_image->id}}>
            <br/> <textarea name="comment{{$event_image->id}}" style="width:30em"></textarea><br><br>
            <button type="submit" class="btn btn-secondary">Enviar</button>
        </form>
        
        @if ($errors->has("comment$event_image->id"))
            <p>{{ $errors->first("comment$event_image->id") }}</p>
        @endif
      @endauth
    </div>
    </div>
    <div class="row" style="width:50%;justify-content:center;margin-bottom:1em;margin-left:35%;">
      <h3 onclick="comments({{ $event_image->id }})">Ver comentarios <i class="fa fa-arrow-down"></i></h3>
      <div id="comment-{{ $event_image->id }}" style="display:none">
        @foreach ($event_image->comments as $comment)
          <div>
            Autor: {{$comment->user->name}}
            <p>Comentario: {{ $comment->comments }}</p>
          </div>
        @endforeach
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
      margin-top:4em;
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
    input[type=”file”]#nuestroinput {
        width: 0.1px;
        height: 0.1px;
        opacity: 0;
        overflow: hidden;
        position: absolute;
        z-index: -1;
    }
</style>
@endpush
@push('scripts')
<script>
    $("#btn-form").on("click", () => {
        alert("hola");
    })
    function form_event_image(){
        let form = document.getElementById("form-event-publicacion");
        (form.style.display === "none")?form.style.display = "block":form.style.display = "none";
    }
    function form_event_comment(id){
        let form = document.getElementById("form-event-comment-"+id);
        (form.style.display === "none")?form.style.display = "block":form.style.display = "none";
    }
    function comments(id){
        let form = document.getElementById("comment-"+id);
        (form.style.display === "none")?form.style.display = "block":form.style.display = "none";
    }
</script>
@endpush