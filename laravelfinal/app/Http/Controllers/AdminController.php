<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use App\Articulo;
use Mail;
use Validator;
use Auth;
use DB;
use PDF;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['except' => 'createAdmin']);
    }
    private function isAdmin(){
        if (Auth::user()->role == 1) return true;
        else return false;
    }
    public function admin(){
        if ($this->isAdmin()){
            return View('admin.admin');
        } else{
            return redirect()->back();
        }
    }


 public function registrarUsuarios(){
        return view('registro');
    }
 public function guardarUsuario(Request $datos){
        $user= new User();
        $user->name=$datos->input('name');
        $user->email=$datos->input('email');
        $user->sexo=$datos->input('sexo');
        $user->uso=$datos->input('uso');
        $user->password=bcrypt($datos->input('password'));
        $user->save();

    
   
        return redirect('consultarUsuarios');
        // return redirect('consultarUsuarios');

    }
     public function registrarAdmin(){
        return view('registroadmin');
    }

     public function guardaradmin(Request $datos){
        $user= new User();
        $user->name=$datos->input('name');
        $user->email=$datos->input('email');
        $user->sexo=$datos->input('sexo');
        $user->password=bcrypt($datos->input('password'));
        $user->role=$datos->input('role');
        $user->save();

    
    Mail::send('admin.emails', ['user' => $user] ,function($message) use ($user) {
        $message->from('rfmendozam@gmail.com','Luxury watches');
        $message->to($user->email,$user->name)
        ->subject('Bienvenido al equipo');
    });
       
        return redirect('consultarUsuarios');
        // return redirect('consultarUsuarios');

    }
public function consultarUsuarios(){
      $user=User::all();
        return view("consultarUsuarios",compact('user'));
    }
public function eliminarUsuario($id){
        $user=User::find($id);
        $user->delete();

        return redirect('consultarUsuarios');
    }

public function editarUsuarios($id){
            $user=User::find($id);
            return view('admin.editarUsuarios', compact('user'));
    }

public function actualizarUsuario(Request $datos, $id){
        $user=User::find($id);
        $user->name=$datos->input('name');
        $user->lastname=$datos->input('lastname');
        $user->email=$datos->input('email');
        $user->domicilio=$datos->input('domicilio');
        $user->birthday=$datos->input('birthday');
        $user->sexo=$datos->input('sexo');
        $user->password=bcrypt($datos->input('password'));
        $user->save();

        return Redirect('/consultarUsuarios');
    }

// public function PDFUsuario(){
//         $user=User::all();
//         $vista=view('admin.UsuariosPDF', compact('user'));
//         $dompdf=\App::make('dompdf.wrapper');
//         $dompdf->loadHTML($vista);
//         return $dompdf->stream('ListaUsuarios.pdf');
//     }


}
