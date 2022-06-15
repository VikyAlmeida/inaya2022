@extends('admin.layouts.layout')
@section('content')
<div class="content-wrapper">
    
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Zona publica</h4>

        <!-- Basic Bootstrap Table -->
        <div class="card" style="padding:1em;">
            <h1 class="card-header" style="color:#0d47a1">ICONOS</h1>
            <h2 style="margin-left:1em;">SE HAN USADO (PULSAR EL ICONO PARA VER MAS INFORMACION):</h2>
            <div class="row" style="width:99%;margin-left:1em;justify-content:space-between; text-align:center;">
                <div class="col-md-4">
                    <i class="menu-icon tf-icons bx bxs-plus-square" data-bs-toggle="modal" data-bs-target="#exampleModal1" ></i> 
                </div>
            
                <div class="col-md-4">
                    <i class="menu-icon tf-icons bx bxs-trash"style="color:red;font-size:20px;"data-bs-toggle="modal" data-bs-target="#exampleModal2"></i>
                </div>
                
                <div class="col-md-4">
                    <i class="menu-icon tf-icons bx bxs-edit"style="color:orange;font-size:20px;" data-bs-toggle="modal" data-bs-target="#exampleModal3"></i>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Iconos</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <h6>Colores</h6>
                  <div class="row"style="width:99%;margin-left:1em;justify-content:space-between; text-align:center;margin-bottom:1em;">
                    <div class="col-6" style="color:#efefef;background-color:#333">LETRA:#efefef</div>
                    <div class="col-6" style="color:white;background-color:#000">FONDO:#000000</div>
                  </div>
                  <h6>Fuente</h6>
                  <div class="row"style="width:99%;margin-left:1em;justify-content:space-between; text-align:center;">
                    <textarea name="" id="" cols="3" rows="1"><i class="menu-icon tf-icons bx bxs-plus-square"></i> </textarea>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Iconos</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <h6>Colores</h6>
                    <div class="row"style="width:99%;margin-left:1em;justify-content:space-between; text-align:center;margin-bottom:1em;">
                      <div class="col-6" style="color:red;background-color:rgb(255, 255, 255)">LETRA: red</div>
                      <div class="col-6" style="color:black;background-color:transparent">FONDO:transparent</div>
                    </div>
                    <h6>Fuente</h6>
                    <div class="row"style="width:99%;margin-left:1em;justify-content:space-between; text-align:center;">
                      <textarea name="" id="" cols="3" rows="2"> <i class="menu-icon tf-icons bx bxs-trash"style="color:red;font-size:20px;"></i></textarea>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Iconos</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <h6>Colores</h6>
                    <div class="row"style="width:99%;margin-left:1em;justify-content:space-between; text-align:center;margin-bottom:1em;">
                      <div class="col-6" style="color:orange;background-color:rgb(255, 255, 255)">LETRA: orange</div>
                      <div class="col-6" style="color:black;background-color:transparent">FONDO:transparent</div>
                    </div>
                    <h6>Fuente</h6>
                    <div class="row"style="width:99%;margin-left:1em;justify-content:space-between; text-align:center;">
                      <textarea name="" id="" cols="3" rows="2"><i class="menu-icon tf-icons bx bxs-edit"style="color:orange;font-size:20px;"></i></textarea>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop