<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventImage;
use Illuminate\Http\Request;
use App\Models\Establishment;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index(){
        $establishments = DB::table('establishments')->orderBy('updated_at','desc')->limit(3)->get();
        $publishment = EventImage::orderBy('id','desc')->limit(4)->get();
        if(auth()->user() && auth()->user()->customer && auth()->user()->customer->menssage == "pending"){
          $usuario = auth()->user()->customer;
          $usuario->menssage = "send";
          $usuario->save();
        }
        else if(auth()->user() && auth()->user()->customer && auth()->user()->customer->menssage == "send"){
          $usuario = auth()->user()->customer;
          $usuario->menssage = "ok";
          $usuario->save();
        }
        return view("welcome", compact('establishments','publishment'));
    }
    public function como_llegar(){
        return view("como_llegar");
    }
    public function events(){
        $month = date("Y-m");
        //
        $data = $this->calendar_month($month);
        $mes = $data['month'];
        // obtener mes en espanol
        $mespanish = $this->spanish_month($mes);
        $mes = $data['month'];
        $events = Event::all();
        return view("events",[
          'data' => $data,
          'mes' => $mes,
          'mespanish' => $mespanish,
          'events' => $events
        ]);
    }
    public function event(Event $event) {
      return view("events.event", compact('event'));
  }

    // =================== CALENDARIO =====================
 
    public function index_month(Request $request){
       $month = $request->month;
       $data = $this->calendar_month($month);
       $mes = $data['month'];
       // obtener mes en espanol
       $mespanish = $this->spanish_month($mes);
       $mes = $data['month'];
       $events = Event::all();
       return view("events",[
         'data' => $data,
         'mes' => $mes,
         'mespanish' => $mespanish,
         'events' => $events
       ]);
 
     }
 
     public static function calendar_month($month){
       //$mes = date("Y-m");
       $mes = $month;
       //sacar el ultimo de dia del mes
       $daylast =  date("Y-m-d", strtotime("last day of ".$mes));
       //sacar el dia de dia del mes
       $fecha      =  date("Y-m-d", strtotime("first day of ".$mes));
       $daysmonth  =  date("d", strtotime($fecha));
       $montmonth  =  date("m", strtotime($fecha));
       $yearmonth  =  date("Y", strtotime($fecha));
       // sacar el lunes de la primera semana
       $nuevaFecha = mktime(0,0,0,$montmonth,$daysmonth,$yearmonth);
       $diaDeLaSemana = date("w", $nuevaFecha);
       $nuevaFecha = $nuevaFecha - ($diaDeLaSemana*24*3600); //Restar los segundos totales de los dias transcurridos de la semana
       $dateini = date ("Y-m-d",$nuevaFecha);
       //$dateini = date("Y-m-d",strtotime($dateini."+ 1 day"));
       // numero de primer semana del mes
       $semana1 = date("W",strtotime($fecha));
       // numero de ultima semana del mes
       $semana2 = date("W",strtotime($daylast));
       // semana todal del mes
       // en caso si es diciembre
       if (date("m", strtotime($mes))==12) {
           $semana = 5;
       }
       else {
         $semana = ($semana2-$semana1)+1;
       }
       // semana todal del mes
       $datafecha = $dateini;
       $calendario = array();
       $iweek = 0;
       while ($iweek < $semana):
           $iweek++;
           //echo "Semana $iweek <br>";
           //
           $weekdata = [];
           for ($iday=0; $iday < 7 ; $iday++){
             // code...
             $datafecha = date("Y-m-d",strtotime($datafecha."+ 1 day"));
             $datanew['mes'] = date("M", strtotime($datafecha));
             $datanew['dia'] = date("d", strtotime($datafecha));
             $datanew['fecha'] = $datafecha;
             //AGREGAR CONSULTAS EVENTO
             $datanew['evento'] = Event::where("initDate_at",$datafecha)->get();
 
             array_push($weekdata,$datanew);
           }
           $dataweek['semana'] = $iweek;
           $dataweek['datos'] = $weekdata;
           //$datafecha['horario'] = $datahorario;
           array_push($calendario,$dataweek);
       endwhile;
       $nextmonth = date("Y-M",strtotime($mes."+ 1 month"));
       $lastmonth = date("Y-M",strtotime($mes."- 1 month"));
       $month = date("M",strtotime($mes));
       $yearmonth = date("Y",strtotime($mes));
       //$month = date("M",strtotime("2019-03"));
       $data = array(
         'next' => $nextmonth,
         'month'=> $month,
         'year' => $yearmonth,
         'last' => $lastmonth,
         'calendar' => $calendario,
       );
       return $data;
     }
 
     public static function spanish_month($month)
     {
 
         $mes = $month;
         if ($month=="Jan") {
           $mes = "Enero";
         }
         elseif ($month=="Feb")  {
           $mes = "Febrero";
         }
         elseif ($month=="Mar")  {
           $mes = "Marzo";
         }
         elseif ($month=="Apr") {
           $mes = "Abril";
         }
         elseif ($month=="May") {
           $mes = "Mayo";
         }
         elseif ($month=="Jun") {
           $mes = "Junio";
         }
         elseif ($month=="Jul") {
           $mes = "Julio";
         }
         elseif ($month=="Aug") {
           $mes = "Agosto";
         }
         elseif ($month=="Sep") {
           $mes = "Septiembre";
         }
         elseif ($month=="Oct") {
           $mes = "Octubre";
         }
         elseif ($month=="Oct") {
           $mes = "December";
         }
         elseif ($month=="Dec") {
           $mes = "Diciembre";
         }
         else {
           $mes = $month;
         }
         return $mes;
     }
 
    public function establishments(){
        $locales = Establishment::all();
        return view("establishments", compact("locales"));
    }
    public function establishment_show(Establishment $local){
      return view("establishment.show", compact("local"));
  }
}
