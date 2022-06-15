@extends('admin.layouts.layout')
@section('content')
<div class="content-wrapper">
    
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Clientes</h4>

        <!-- Basic Bootstrap Table -->
        <div class="card">
          <h5 class="card-header">Solicitudes</h5>
          @if (session('request_accept'))
            <div class="alertAdmin" >
              {!! session('request_accept') !!}
            </div>
          @endif
          <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                  <tr>
                    <th>Perfil</th>
                    <th>Nombre</th>
                    <th>Usuario</th>
                    <th>Email</th>
                    <th colspan="2" style="">Acciones</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach($customers as $customer)
                    @if ($customer->customer->status == "pending")
                        <tr>
                            <td><img src="../../images/users/{{$customer->image}}" alt="user_profile" class="w-px-40 h-auto rounded-circle"></td>
                            <td>{{$customer->name}}</td>
                            <td>{{$customer->user}}</td>
                            <td>{{$customer->email}}</td>
                            <td style="width:2em;">
                                <form action="{{ url('admin/solicitudes') }}" method="post" enctype="multipart/form-data" >
                                    @csrf 
                                    <input type="hidden" name="user_id" value="{{ $customer->id }}">
                                    <input type="hidden" name="status" value="accepted">
                                    <button type="submit" style="border:0px;background-color:white;"><i style="color:rgb(0, 255, 34);cursor: pointer;" class="trash-icon tf-icons bx bx-check"></i></button>
                                </form>
                            </td>
                            <td style="width:3em;margin-right:1em;">
                                <form action="{{ url('admin/solicitudes') }}" method="post" enctype="multipart/form-data" >
                                    @csrf 
                                    <input type="hidden" name="user_id" value="{{ $customer->id }}">
                                    <input type="hidden" name="status" value="canceled">
                                    <button type="submit" style="border:0px;background-color:white;"><i style="color:red;cursor: pointer;" class="trash-icon tf-icons bx bx-trash"></i></button>
                                </form>	
                            </td>
                        </tr>
                    @endif
                    @endforeach
                </tbody>
              </table>
          </div>
        </div>
    </div>
</div>
@stop