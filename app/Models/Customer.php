<?php

namespace App\Models;

use App\Models\Bill;
use App\Models\User;
use App\Models\Establishment;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;    
    // LA FACTURA MINIMA ES EL DINERO QUE LE TIENES QUE PAGAR
    // AL ADMINISTRADOR POR DEJARTE PUBLICAR EL CONTENIDO EN 
    // SU PAGINA.
    // LA FACTURA SE LLEVARA A CABO CADA FIN DE MES COBRANDOLE 
    // LA SUMA DE LA CONSTANTE POR EL Nº DE ESTABLECIMIENTOS 
    // QUE TIENE MAS EL NUMERO DE MENSAJES QUE SE LE HAN ENVIADO 
    // DE RESERVA (SI TIENE MARCADA ESA OPCION).
    // EJ. SOY UN CLIENTE QUE TIENE 2 RESTAURANTES Y 1 PUB
    // EN EL PUB NO TENGO PUESTA LA OPCION DE SMS Y EN LOS RESTAURANTES
    // SI, LLEGAN 10 RESERVAS DIARIAS A CADA UNO.
    // LA FACTURA SERIA: (100*3)+1+(0.34*(10*30)) = 403€

    public function establishments() {
        return $this->hasMany(Establishment::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function getFacturaAttribute(){
        $total_bill = 0;
        $total = 0;
        foreach ($this->establishments as $local){
            $total++;
            foreach ($local->bills as $bill)$total_bill++;
        }
        $factura = (100*count($this->establishments))+1+(0.34*$total_bill);
        return $factura;
    }
    public function getEstadoSpanAttribute(){
        $span = "";
        switch ($this->status){
            case "aceptado":
                $span = '<span class="badge bg-label-success me-1">ACEPTADO</span>';
            break;
            case "en espera":
                $span = '<span class="badge bg-label-primary me-1">EN ESPERA</span>';
            break;
            case "cancelado":
                $span = '<span class="badge bg-label-warning me-1">CANCELADO</span>';
            break;
            case "baneado":
                $span = '<span class="badge bg-label-info me-1">BANEADO</span>';
            break;
        }
        return $span;
    }
}
