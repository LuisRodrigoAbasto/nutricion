<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dieta;

class OrdenAlimentoController extends Controller
{
    public function index()
    {
        $data=Dieta::join('usuarios','dietas.id_usuario','=',auth()->id)
        ->get();
        return $data;
    }
    public function store(Request $request)
    {
          
        if (!$request->ajax()) return redirect('/');
        DB::beginTransaction();
        try{        
            $table= new Alimento();
            $table->nombre=$request->nombre;
            $table->caloria=$request->caloria;
            $table->grasa=$request->grasa;
            $table->proteina=$request->proteina;
            $table->carbohidrato=$request->carbohidrato;
            $table->estado=1;
            $table->save();
        }
        catch (Exception $e){
            DB::rollBack();
        }
    }
    public function update(Request $request)
    {
        if (!$request->ajax()) return redirect('/');
        DB::beginTransaction();
        try{        
            $table= Alimento::findOrFail($request->id);
            $table->nombre=$request->nombre;
            $table->caloria=$request->caloria;
            $table->grasa=$request->grasa;
            $table->proteina=$request->proteina;
            $table->carbohidrato=$request->carbohidrato;
            $table->estado=1;
            $table->save();
        }
        catch (Exception $e){
            DB::rollBack();
        }
    }

    public function destroy($id)
    {
        if (!$request->ajax()) return redirect('/');
        DB::beginTransaction();
        try{        
            $table= Alimento::findOrFail($request->id);
            $table->estado=0;
            $table->save();
        }
        catch (Exception $e){
            DB::rollBack();
        }
    }
}
