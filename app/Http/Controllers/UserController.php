<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    public function profile(){
        $user = auth()->user();
        return view("user.profile",compact('user'));
    }
    public function edit(){
        $user = auth()->user();
        return view("user.edit",compact('user'));
    }
    public function foto($fichero,$latestId,$foto_ante){
        if ($fichero) {
            $ruta = public_path()."/images/users/".$latestId;
            $nombre_fichero = uniqid()."-".$fichero->getClientOriginalName();
            $movido = $fichero->move($ruta,$nombre_fichero);
            if($movido){
                return $nombre_fichero;
            }
        }
        return $foto_ante;
    }
    public function eliminar_imagen($img,$url){
        if(substr($img,0,4)==="http"){
            $borrada = true;
        }else{
            $ruta =  public_path()."/images/users/".$url."/".$img;
            $borrada = unlink($ruta);
        }
    }
    public function update(Request $request){
        $foto_ante = auth()->user()->image;
        $this->validate($request,[
            'name' => ['required'],
            'email' => ['required'],
            'user' => ['required'],
        ],[
            'name.required' => "El nombre es requerido",
            'email.required' => "El email es requerido",
            'user.required' => "El user es requerido",
        ]);
        $user = auth()->user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->user = $request->user;
        if($request->password){
            ($request->password==$request->password2)?$user->password = bcrypt($request->password):"Error";
        }
        if($request->default_image == "on"){
            $user->image = "user-default.png";
            $this->eliminar_imagen($foto_ante, auth()->user()->id);//menu
        }else{
            $user->image = $this->foto($request->file("foto"),auth()->user()->id,$foto_ante);
        }
        $user->save();
        return back();
    }
}
