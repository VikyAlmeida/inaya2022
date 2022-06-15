@extends('admin.layouts.layout')
@section('content')
<div class="content-wrapper">
    
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Zona publica</h4>

        <!-- Basic Bootstrap Table -->
        <div class="card" style="padding:1em;">
          <h1 class="card-header" style="color:#0d47a1">MAPA DEL SITIO</h1>
          <h2 style="margin-left:1em;">Areas de division</h2>
          <div class="row" style="width:99%;margin-left:1em;justify-content:space-between;">
            <ul>
                <li>Home: Entra en el home publico</li>
                <li>Home administrativo: Entrar en el dashboard del administrador</li>
                <li>Usuarios: Control de usuarios</li>
                <li>Eventos: Gestion de eventos</li>
                <li>Guia de estilo: No forma parte de la aplicación pero si parte del proyecto.</li>
            </ul>
          </div>
          <h5 style="margin-left:1em;">Usuarios</h5>
          <div class="row" style="width:99%;margin-left:1em;justify-content:space-between;">
            <ul>
                <li>Clientes: Listado de clientes</li>
                <li>Solicitudes: Listados de solicitudes enviadas por el cliente</li>
            </ul>
          </div>
          <h5 style="margin-left:1em;">Eventos</h5>
          <div class="row" style="width:99%;margin-left:1em;justify-content:space-between;">
            <ul>
                <li>Ver eventos: Listado de eventos</li>
                <li>Añadir evento: Formulario de añadir eventos</li>
            </ul>
          </div>
    </div>
</div>
@stop