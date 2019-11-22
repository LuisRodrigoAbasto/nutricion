<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dieta;
use App\DetalleOrdenAlimento;

class DietaController extends Controller
{
    public function index()
    {
        $data=Dieta::all();
        return $data;
    }
    public function store(Request $request)
    {
          
        if (!$request->ajax()) return redirect('/');
        DB::beginTransaction();
        try{        
            $table= new Alimento();
            $table->id_usuario=auth()->id;
            $table->fecha_inicio=$request->fecha_inicio;
            $table->fecha_final=$request->fecha_final;
            $table->meta=$request->meta;
            $table->peso=$request->peso;
            $table->tiempo=$request->tiempo;
            $table->tipo=$request->$request->tipo;
            $table->estado=1;
            $table->save();
            $detalles = $request->data;//Array de detalles
            //Recorro todos los elementos
            $i=0;
            foreach($detalles as $ep=>$det)
            {
            $detalle= new DetalleOrdenAlimento();
            $detalle->cantidad=$request->cantidad;
            $detalle->porcion=$request->porcion;
            $detalle->estado=1;
            $detalle->save();
            }
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
            $table->id_usuario=auth()->id;
            $table->fecha_inicio=$request->fecha_inicio;
            $table->fecha_final=$request->fecha_final;
            $table->meta=$request->meta;
            $table->peso=$request->peso;
            $table->tiempo=$request->tiempo;
            $table->tipo=$request->$request->tipo;
            $table->estado=1;
            $table->save();
            $detalles = $request->data;//Array de detalles
            //Recorro todos los elementos
            $i=0;
            foreach($detalles as $ep=>$det)
            {
            $detalle= new DetalleOrdenAlimento();
            $detalle->cantidad=$request->cantidad;
            $detalle->porcion=$request->porcion;
            $detalle->estado=1;
            $detalle->save();
            }
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
