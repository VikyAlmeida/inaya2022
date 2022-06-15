@extends('admin.layouts.layout')
@section('content')
<div class="content-wrapper">
    
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Zona publica</h4>

        <!-- Basic Bootstrap Table -->
        <div class="card" style="padding:1em;">
          <h1 class="card-header" style="color:#0d47a1">MAPA DEL SITIO</h1>
          <h2 style="margin-left:1em;">ZONA PUBLICA</h2>
          <div class="row" style="width:99%;margin-left:1em;justify-content:space-between;">
            <ul>
                <li>Home: Inicio de la aplicación</li>
                <li>locales: Aparecen todos los locales, solo los usuarios registrados pueden acceder a ciertas zonas dentro de esta url</li>
                <li>Como llegar: Un mapa que tiene un plugin para indicarnos como llegar de donde estamos a donde queremos</li>
                <li>Eventos: Aqui se muestran todos los eventos y publicaciones de eventos</li>
            </ul>
          </div>
          <h2 style="margin-left:1em;">ZONAS PRIVADAS</h2>
          <div class="row" style="width:99%;margin-left:1em;justify-content:space-between;">
            <ul>
                <li>Profile: Esta zona es comun para todos los usuarios registrados</li>
                <li>Configuracion: Esta zona es comun para todos los usuarios registrados</li>
                <li>Logout: Esta zona es comun para todos los usuarios registrados</li>
                <li>Zona administrador: Esta es una zona exclusiva del administrador</li>
                <li>Mis locales: Esta es una zona exclusiva de los clientes</li>
            </ul>
          </div>
    </div>
</div>
@stop