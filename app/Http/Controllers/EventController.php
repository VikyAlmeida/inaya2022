<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Comment;
use App\Models\EventImage;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function eventImage(Request $request){
        $this->validate($request,[
            'foto' => ['required'],
            'comment' => ['required']
        ],
        [
            "foto.required" => "Elija una foto para publicar su contenido",
            "comment.required" => "El mensaje es obligatorio"
        ]);
        $event_image = new EventImage();
        $fichero = $request->file("foto");
        $ruta = public_path()."/images/events/".$request->event_id;
        $nombre_fichero = uniqid()."-".$fichero->getClientOriginalName();
        $movido = $fichero->move($ruta,$nombre_fichero);
        if($movido){
            $event_image->image = $nombre_fichero;
        }
        $event_image->comment = $request->comment;
        $event_image->user_id = $request->user_id;
        $event_image->event_id = $request->event_id;
        $event_image->save();
        return back();
    }
    public function like(Event $event){
        $datos = $event->users->where('id',auth()->user()->id)->first();
        if(!$datos){
            $event->users()->attach(auth()->user()->id);
            return back();
        }else{
            $event->users()->detach(auth()->user()->id);
            return back();
        }
    }
    public function like_publication(EventImage $event_image){
        $datos = $event_image->users->where('id',auth()->user()->id)->first();
        if(!$datos){
            $event_image->users()->attach(auth()->user()->id);
            return back();
        }else{
            $event_image->users()->detach(auth()->user()->id);
            return back();
        }
    }
    public function comment(Request $request){
        $campo = "comment".$request->event_id;
        $this->validate($request,[
            $campo => ['required']
        ],
        [
            "$campo.required" => "El mensaje es obligatorio"
        ]);
        $comment = new Comment();
        $comment->comments = $campo;
        $comment->user_id = $request->user_id;
        $comment->event_image_id = $request->event_id;
        $comment->save();
        return back();
    }
}
