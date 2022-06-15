<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function request(Request $request){
      $this->validate($request,[
          'name' => ['required','min:6'],
          'email' => ['required'],
          'password' => ['required'],
          'user' => ['required']
      ],
      [
          "name.required" => "El nombre es obligatorio",
          "email.required" => "El email es obligatorio",
          "password.required" => "La contraseña es obligatoria",
          "user.required" => "El usuario es obligatorio"
      ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->user = $request->user;
        $user->image = "user-default.png";
        $user->type = "customer";
        $user->save();
        $customer = new Customer();
        $customer->user_id = $user->id;
        $customer->status = "pending";
        $customer->save();
        $flash = "<script>
        Swal.fire(
          'Su solicitud se ha realizado con exito!',
          'Tu solicitud esta pendiente a la aprobación del administrador,<br> le llegara un correo con las instruciones',
          'success'
        )
      </script>";
        return redirect('/')->with('custom_create',$flash);
    }
}
