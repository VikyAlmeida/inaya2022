<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Models\Event;
use App\Models\Category;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index(){
        $request = Customer::where('status', 'pending')->get();
        echo '<script>localStorage.setItem("request", '.count($request).');</script>';
        $users = User::all();
        $u = User::where("type","user")->get();
        $c = User::where("type","customer")->get();
        $a = User::where("type","admin")->get();
        $likes = DB::table('event_user')->get();
        return view('admin.index', compact('users','a','c','u','likes'));
    }
    //EVENTOS
    public function events_index(){
        $events = Event::all();
        return view('admin.events.index', compact('events'));
    }
    public function event_create(){
        return view('admin.events.create');
    }
    public function event_edit(Event $event){
        return view('admin.events.edit', compact('event'));
    }

    public function event_store(Request $request){
        $events = Event::all()->count();
        $this->validate($request,[
            'title' => ['required'],
            'initDate' => ['required'],
            'finishDate' => ['required'],
            'description' => ['required'],
        ],[
            'title.required' => "El titulo es requerido",
            'initDate.required' => "La fecha de inicio es requerida",
            'finishDate.required' => "La fecha de final es requerida",
            'description.required' => "La descripcion es requerida",
        ]);
        $event = new Event();
        if (!$request->bolean_image) {
            $fichero = $request->file("foto");
            $ruta = public_path()."/images/events/".intval($events+1);
            $nombre_fichero = uniqid()."-".$fichero->getClientOriginalName();
            $movido = $fichero->move($ruta,$nombre_fichero);
            if($movido){
                $event->image = $nombre_fichero;
            }
        } else {
            $event->image = "default.png";
        }

        $event->title = $request->title;
        $event->initDate_at = $request->initDate;
        $event->finishDate_at = $request->finishDate;
        $event->description = $request->description;
        $event->slug = str_replace(" ", "-", $request->title);
        $event->user_id = auth()->user()->id;
        $event->save();
        return redirect('admin/crear/eventos')->with("evento_creado","El evento <u>".$request->title."</u> ha sido creado!!");
    }
    public function event_update(Request $request){
        $this->validate($request,[
            'title' => ['required'],
            'initDate' => ['required'],
            'finishDate' => ['required'],
            'description' => ['required'],
        ],[
            'title.required' => "El titulo es requerido",
            'initDate.required' => "La fecha de inicio es requerida",
            'finishDate.required' => "La fecha de final es requerida",
            'description.required' => "La descripcion es requerida",
        ]);
        $event = Event::findOrFail($request->event_id);
        $event->title = $request->title;
        $event->initDate_at = $request->initDate;
        $event->finishDate_at = $request->finishDate;
        $event->description = $request->description;
        $event->save();
        return redirect('admin/eventos/')->with("evento_editado","El evento <u>".$request->title."</u> ha sido editado!!");
    }
    public function event_destroy(Request $request){
        $event = Event::findOrFail($request->event_id);
        $event->delete();
        return back()->with("evento_eliminado","El evento <u>".$event->title."</u> ha sido eliminado!!");
    }
    //CUSTOMERS
    public function request(){
        $span = Customer::where('status', 'pending')->get();
        echo '<script>localStorage.setItem("request", '.count($span).');</script>';
        $customers = User::where('type', 'customer')->get();
        return view('admin.users.request',compact('customers'));
    }
    public function status(Request $request){ 
        //ENVIO DEL EMAIL       
        $user = Customer::where('user_id',$request->user_id)->first();
        $user->status = $request->status;
        $user->save();
        return redirect('admin/clientes')->with("request_accept","El cliente ha sido $request->status!!");
    }
    public function customers(){
        $customers = User::where('type', 'customer')->get();
        return view('admin.users.index',compact('customers'));
    }
}
