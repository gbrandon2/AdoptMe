<?php

namespace App\Http\Controllers;

use App\Accesory;
use App\Pet;
use Illuminate\Http\Request;

class UploadController extends Controller
{   
     
    public function  index() {
        return view('upload');
    }
    public function storePet(Request $request){
        $pet=new Pet;
        $pet->email_master="algo";
        $pet->titulo=$request->input("tit");
        $pet->especie=$request->especie;
        $pet->email_nue="algo";
        if($request->hasFile('img')){
            $file=$request->file('img');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('Imagenes',$filename);
            $pet->imagen=$filename;
        }else{
            $pet->imagen="nofunion";
        }
        $pet->edad=$request->input("edad");
        $pet->peso=$request->input("peso");
        $pet->description=$request->input("descrip");
        $pet->direccion=$request->input("lugar");
      $pet->save();
      return redirect('/');

    }
    public function storeAcc(Request $r){
        $acc=new Accesory;
        $acc->email="algo";
        $acc->barrio=$r->input("barrio");
        $acc->precio=$r->input("precio");
        $acc->descripcion=$r->input("descrip");
        $acc->titul=$r->input("titulo");
        if($r->hasFile('ima')){
            $file=$r->file('ima');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('Imagenes',$filename);
            $acc->imag=$filename;
        }else{
            $acc->imag="nofunion";
        }
        $acc->save();
        return redirect('/');
    }
}
