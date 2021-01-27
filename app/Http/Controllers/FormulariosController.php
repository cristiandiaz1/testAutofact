<?php

namespace App\Http\Controllers;

use App\Formulario;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Laracasts\Flash\Flash;

class FormulariosController extends Controller
{
    public function getFormulario(){
        return view('formulario');
    }

    public function postFormulario(Request $request){
        Log::info('Llegue');
        Log::info($request->all());
        $user = Auth::user();
        $principioMes = Carbon::now()->startOfMonth();
        $terminoMes = Carbon::now()->endOfMonth();
        $formularios = Formulario::where('id_user',$user->id)->whereBetween('created_at',[$principioMes,$terminoMes])->get();
        if($formularios->isEmpty()){
            $formulario = new Formulario([
                'id_user' => $user->id,
                'respuesta1' => $request->pregunta1,
                'respuesta2' => $request->pregunta2,
                'respuesta3' => $request->pregunta3,
            ]);
            $formulario->save();
            \flash('Formulario guardado con exito')->success();
        }else{
            \flash('El usuario ya tuvo un formulario este mes')->warning();
        }
        Log::info($principioMes);
//        $formulario = Formulario::where()

        return view('home');
    }
}
