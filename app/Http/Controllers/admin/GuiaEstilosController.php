<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

class GuiaEstilosController extends Controller
{
    public function pagina_public(){
        return view('admin.guia_de_estilo.public.pagina');
    }
    public function colores_public(){
        return view('admin.guia_de_estilo.public.colores');
    }
    public function fuentes_public(){
        return view('admin.guia_de_estilo.public.fuentes');
    }
    public function botones_public(){
        return view('admin.guia_de_estilo.public.botones');
    }
    public function multimedia_public(){
        return view('admin.guia_de_estilo.public.multimedia');
    }
    public function disposicion_public(){
        return view('admin.guia_de_estilo.public.disposicion');
    }
    public function iconos_public(){
        return view('admin.guia_de_estilo.public.iconos');
    }
    public function mapa_public(){
        return view('admin.guia_de_estilo.public.mapa');
    }
    

    public function pagina_private(){
        return view('admin.guia_de_estilo.private.pagina');
    }
    public function colores_private(){
        return view('admin.guia_de_estilo.private.colores');
    }
    public function fuentes_private(){
        return view('admin.guia_de_estilo.private.fuentes');
    }
    public function botones_private(){
        return view('admin.guia_de_estilo.private.botones');
    }
    public function multimedia_private(){
        return view('admin.guia_de_estilo.private.multimedia');
    }
    public function iconos_private(){
        return view('admin.guia_de_estilo.private.iconos');
    }
    public function mapa_private(){
        return view('admin.guia_de_estilo.private.mapa');
    }
}
