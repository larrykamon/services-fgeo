<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Expediente;
use App\Models\Involucrado;
use App\Models\Ofeindi;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class CursoController extends Controller
{
    public function index(){
        $cursos = Curso::orderBy('id','desc')->paginate();
        return view('cursos.index',compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }

    public function store(Request $request){

        $curso = new Curso();
        
        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;
        $curso->save();
        return redirect()->route('cursos.show',$curso);
    }

    public function show(Curso $curso){
        return view('cursos.show',compact('curso'));
    }

    public function edit(Curso $curso){
        return view('cursos.edit',compact('curso'));
    }

    public function update(Request $request, Curso $curso){
        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save();
        return redirect()->route('cursos.show',$curso);
    }

    public function alls(){
        return response()->json(Expediente::where('subprocuradurias_id', 15)->get(),200);
    }

    public function delitosByExpedientes($expedientes_id){
        return response()->json(Ofeindi::where('expedientes_id', $expedientes_id)->get(),200);
    }


}
