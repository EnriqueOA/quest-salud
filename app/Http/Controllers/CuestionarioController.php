<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuestionario;

class CuestionarioController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function guardar(Request $req)
    {
        $data = $req->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'correo' => 'required|email',
            'fechanac' => 'required',
            'edad' => 'numeric|required',
            'question1' => 'numeric|required',
            'question2' => 'numeric|required',
            'question3' => 'numeric|required',
            'question4' => 'numeric|required',
            'question5' => 'numeric|required',
            'question6' => 'numeric|required',
            'question7' => 'numeric|required',
            'question8' => 'numeric|required'
        ]);

        $cuestionario = new Cuestionario();
        $cuestionario->nombres = $data['nombres'];
        $cuestionario->apellidos = $data['apellidos'];
        $cuestionario->correo = $data['correo'];
        $cuestionario->fechanac = $data['fechanac'];
        $cuestionario->edad = $data['edad'];
        $cuestionario->p1 = $data['question1'];
        $cuestionario->p2 = $data['question2'];
        $cuestionario->p3 = $data['question3'];
        $cuestionario->p4 = $data['question4'];
        $cuestionario->p5 = $data['question5'];
        $cuestionario->p6 = $data['question6'];
        $cuestionario->p7 = $data['question7'];
        $cuestionario->p8 = $data['question8'];
        $cuestionario->save();
        return redirect()->route('cuestionario.resultados');
    }

    public function resultados()
    {
        $numPreguntas = 8;
        $numValores = 6;
        $results = [];
        for ($i = 1; $i <= $numPreguntas; $i++)
        {
            $resPregunta = [];
            for ($j = 1; $j <= $numValores; $j++)
            {
                $resPregunta[] =  Cuestionario::where('p'.$i, $j)->count();
            }
            $results[] = $resPregunta;
        }
        return view('resultados', compact('results'));
    }
}
