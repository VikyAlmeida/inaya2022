<?php

namespace App\Http\Controllers;
require __DIR__ . '/twilio-php-main/src/Twilio/autoload.php';

use App\Models\Bill;
use App\Models\Rating;
use Twilio\Rest\Client;
use Illuminate\Http\Request;
use App\Models\Establishment;

class EstablishmentController extends Controller
{
    // public function send_SMS($tlf,$mensaje){
    //     $sid = 'ACb822e9edf093cb4587339923a227c3d4';
    //     $token = '1a351a530546a8420a7cc2af2fbc43de';
    //     $twilio_number = "+19784945574";//numero remitente
    //     $client = new Client($sid, $token);
    //     $client->messages->create(
    //         "+34".$tlf,//tlf es el numero que al que llega el SMS en este caso al dueño del local
    //         [
    //             'from' => $twilio_number,
    //             'body' => $mensaje
    //         ]
    //     );
    // }
    public function send_WhatsApp($tlf,$mensaje){
        $sid = 'ACb822e9edf093cb4587339923a227c3d4';
        $token = '1a351a530546a8420a7cc2af2fbc43de';
        $twilio_number = "+19784945574";//numero remitente
        $client = new Client($sid, $token);
        $message = $client->messages
                            ->create("whatsapp:+34".$tlf,
                                array(
                                    'from' => "whatsapp:+14155238886",
                                    'body' => $mensaje
                            ));
    }
    public function SMS(Request $request){
        $this->validate($request,[
            'message' => ['required','min:6'],
        ],
        [
            "message.required" => "El mensaje para reservar es obligatorio",
            "message.min" => "El mensaje no contiene el minimo de contenido"
        ]);
        $bill = new Bill();
        $bill->name = auth()->user()->name;
        $bill->email = auth()->user()->email;
        $bill->user = auth()->user()->user;
        $bill->establishment_id = $request->local_id;
        $bill->save();
        $local = Establishment::findOrFail($request->local_id);
        $this->send_WhatsApp($local->tlf,$request->message);
        return back();
    }
    public function valoration(Request $request){
        $this->validate($request,[
            'stars_food' => ['required'],
            'stars_service' => ['required'],
            'stars_relation_price_quality' => ['required'],
            'stars_atmosphere' => ['required'],
        ],
        [
            "stars_food.required" => "Selecciona un valor para la comida",
            "stars_service.required" => "Selecciona un valor para el servicio",
            "stars_relation_price_quality.required" => "Selecciona un valor para la relacion calidad/precio",
            "stars_atmosphere.required" => "Selecciona un valor para el ambiente",
        ]);
        $rantins = new Rating();
        $rantins->stars_food = $request->stars_food;
        $rantins->stars_service = $request->stars_service;
        $rantins->stars_relation_price_quality = $request->stars_relation_price_quality;
        $rantins->stars_atmosphere = $request->stars_atmosphere;
        $rantins->comment = $request->comment;
        $rantins->establishment_id = $request->establishment_id;
        $rantins->user_id = auth()->user()->id;
        $rantins->save();
        return back();
    }
}
