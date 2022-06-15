@extends("user.layouts.layout")
@section('slogan')
<div class="section type-1" style="margin-top:20%;">
    <form action="{{ url('profile/edit') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-5" style="text-align:center;">
                <img src="{{ $user->foto }}" alt="imagen perfil" width="200"><br>
                <label style="margin-top:5%;">¿Desea poner imagen por defecto?<input type="checkbox" name="default_image" id="" class="form-control" style="width:20px"></label>
                <input type="file" name="foto" id="" class="form-control" style="margin-left:30%;margin-top:5%;width:50%">
            </div>
            <div class="col-md-7" style="border-left:1px solid #fff">
                <div class="row" style="padding:1em;justify-content:center;margin:0 auto;">
                    <input type="text" name="name" value="{{ $user->name }}" class="form-control" style="width:30%">
                    @error('name')
                        <p style="margin-top:0.5em;">{{ $message }}</p>
                    @enderror
                </div>
                <div class="row"  style="padding:1em;justify-content:center;margin:0 auto;">
                    <input type="text" name="email" value="{{ $user->email }}" class="form-control" style="width:30%">
                    @error('email')
                        <p style="margin-top:0.5em;">{{ $message }}</p>
                    @enderror
                </div>
                <div class="row"  style="padding:1em;justify-content:center;margin:0 auto;">
                    <input type="text" name="user" value="{{ $user->user }}" class="form-control" style="width:30%">
                    @error('user')
                        <p style="margin-top:0.5em;">{{ $message }}</p>
                    @enderror
                </div>
                <div class="row"  style="padding-top:1em;margin:0 auto;">
                    <div class="col-md-6">
                        <input type="text" name="password" placeholder="Escriba su contraseña" class="form-control" style="width:62%">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="password2" placeholder="Repita su contraseña" class="form-control" style="width:62%">
                    </div>
                </div>
                <div class="row" style="padding-top:1em;margin:0 auto;margin-left:1.3em;">
                    <input type="submit" value="Editar" class="btn btn-default">
                </div>
            </div>
        </div>
    </form>
</div>
@stop
@section('contact')

@stop
@push('scripts')
@endpush