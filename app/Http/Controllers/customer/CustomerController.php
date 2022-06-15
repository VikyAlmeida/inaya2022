<?php

namespace App\Http\Controllers\customer;

// Use the REST API Client to make requests to the Twilio REST API
use App\Models\Publication;
use Illuminate\Http\Request;
use App\Models\Establishment;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class CustomerController extends Controller
{
    public function index(){
        $locales = Establishment::where('customer_id',auth()->user()->customer->id)->get();
        return view('cust.index', compact('locales'));
    }
    public function establishment_create(){
        return view('cust.establishment.create');
    }
    public function foto($fichero,$latestId){
        if ($fichero) {
            $ruta = public_path()."/images/locales/".$latestId;
            $nombre_fichero = uniqid()."-".$fichero->getClientOriginalName();
            $movido = $fichero->move($ruta,$nombre_fichero);
            if($movido){
                return $nombre_fichero;
            }
        } else {
            return "default.png";
        }
    }
    public function eliminar_imagen($img,$url){
        if(substr($img,0,4)==="http"){
            $borrada = true;
        }else{
            $ruta =  public_path()."/images/locales/".$url."/".$img;
            rmdir(public_path()."/images/locales/".$url);
            $borrada = File::delete($ruta);
        }
    }
    public function establishment_store(Request $request){
        $this->validate($request,[
            'name' => ['required','min:3'],
            'ubicacion' => ['required'],
            'tlf' => ['required'],
            'details' => ['required'],
            'perfil' => ['required'],
            'menu' => ['required'],
        ],
        [
            'name.required' => "El nombre del establecimiento es obligatorio",
            'ubicacion.required' => "La ubicacion del establecimiento es obligatorio",
            'tlf.required' => "El telefono del establecimiento es obligatorio",
            'perfil.required' => "El telefono del establecimiento es obligatorio",
            'menu.required' => "El telefono del establecimiento es obligatorio",
            'details.required' => "La descripción del establecimiento es obligatorio"        
        ]);
        $latestId = Establishment::orderBy('id', 'desc')->first();
        $latestId = ($latestId)? $latestId->id : 0;
        $caperta = "local-".($latestId+1)."-user-".auth()->user()->customer->id;
        $local = new Establishment();
        $local->name = $request->name;
        $local->address = $request->ubicacion;
        $local->slug = str_replace(" ", "-", $request->name);
        $local->profile = $this->foto($request->file("perfil"),$caperta);
        $local->menu = $this->foto($request->file("menu"),$caperta);
        $local->details = $request->details;
        $local->tlf = $request->tlf;
        $local->SMS = ($request->SMS=="on")?true:false;
        $local->customer_id = auth()->user()->customer->id;
        $local->save();
        return redirect("/customer/misLocales/".$local->slug)->with("Crear_local","Todo bien");
    }
    public function show(Establishment $local){
        return view('cust.establishment.show', compact('local'));
    }
    public function edit(Establishment $local){
        return view('cust.establishment.edit', compact('local'));
    }
    public function establishment_update(Establishment $local,Request $request){
        $this->validate($request,[
            'name' => ['required','min:3'],
            'ubicacion' => ['required'],
            'tlf' => ['required'],
            'details' => ['required'],
        ],
        [
            'name.required' => "El nombre del establecimiento es obligatorio",
            'ubicacion.required' => "La ubicacion del establecimiento es obligatorio",
            'tlf.required' => "El telefono del establecimiento es obligatorio",
            'details.required' => "La descripción del establecimiento es obligatorio"        
        ]);
        $caperta = "local-".$local->id."-user-".$local->customer_id;
        $local->name = $request->name;
        $local->address = $request->ubicacion;
        $local->slug = str_replace(" ", "-", $request->name);
        $local->profile = ($this->foto($request->file("perfil"),$caperta) != "default.png")?$this->foto($request->file("perfil"),$caperta):$local->profile;
        $local->menu = ($this->foto($request->file("menu"),$caperta) != "default.png")?$this->foto($request->file("menu"),$caperta):$local->menu;
        $local->details = $request->details;
        $local->tlf = $request->tlf;
        $local->SMS = ($request->SMS=="on")?true:false;
        $local->customer_id = auth()->user()->customer->id;
        $local->save();
        return redirect("/customer/misLocales/".$local->slug)->with("Crear_local","Todo bien");
    }
    public function destroy(Request $request){
        $local = Establishment::findOrFail($request->local_id);
        $url = "local-".$local->id."-user-".$local->customer_id;
        $this->eliminar_imagen($local->profile,$url);//perfil
        $this->eliminar_imagen($local->menu,$url);//menu
        $local->delete();
        return back();
    }

    public function publicacion_store(Request $request){
        $this->validate($request,[
            'title' => ['required','min:3'],
            'description' => ['required'],
        ],[
            'title.required' => "El titulo es requerido",
            'description.required' => "El mensaje es requerido"
        ]);
        $caperta = "local-".$request->establishment_id."-user-".auth()->user()->customer->id."/publishment";
        $publicacion = new Publication();
        $publicacion->title = $request->title;
        $publicacion->image = $this->foto($request->file("image"),$caperta);
        $publicacion->description = $request->description;
        $publicacion->establishment_id = $request->establishment_id;
        $publicacion->save();
        $local = Establishment::findOrFail($request->establishment_id);
        $local->updated_at = $publicacion->updated_at;
        $local->save();
        return back();
    }
}


