<?php

namespace App\Http\Controllers;

use App\Accesory;
use App\Pet;
Use App\Event;
Use App\Answer; 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;


class PostController extends Controller
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
        $acc->posttype=1;
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
    public function storeServ(Request $r){
        $acc=new Accesory;
        $acc->email="algo";
        $acc->barrio=$r->input("lugar");
        $acc->precio=$r->input("preci");
        $acc->descripcion=$r->input("descri");
        $acc->titul=$r->input("titul");
        $acc->posttype=2;
        if($r->hasFile('im')){
            $file=$r->file('im');
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


public function storeEv(Request $r){
    $acc=new Event;
    $acc->emailEvt="algo";
    $acc->dirEvt=$r->input("DirEvt");
    $time = strtotime($r->input("date"));


    $acc->descripcionEvt=$r->input("descEvt");
    $acc->TitulEvt=$r->input("titulEvt");

    $acc->evtDate=$time;
    if($r->hasFile('im')){
        $file=$r->file('imEvt');
        $extension=$file->getClientOriginalExtension();
        $filename=time().'.'.$extension;
        $file->move('Imagenes',$filename);
        $acc->imagEvt=$filename;
    }else{
        $acc->imagEvt="nofunion";
    }
    $acc->save();
    return redirect('/');
}
public function petInfo(Request $request ){
    if($request->has('id')){
  
        $pet=DB::table('pets')->find($request->get('id'));
      
        
        $pets=DB::table('pets')->where('id','<>',$request->get('id'))
                                    ->orderBy('id', 'DESC')->limit(4)->get();
                        
        $emails=DB::table('answers')->where('idPet',$request->get('id'))->get();
        return view('petInfo',['pet'=>$pet,'pets'=>$pets,'emails'=>$emails]);
    }
}
public function searchPets(Request $request){

   
    $gato="";
    $perro="";
    $otro="";
    if($request->has('especie') || $request->has('search')){
        if($request->has('especie')){
          

            $pets=DB::table('pets')->
            whereColumn([
                ['email_nue', '=', 'email_master'],
        ])
        ->where('especie',$request->get('especie'))->paginate(5)->appends('especie',$request->get('especie'));
            switch($request->get('especie')){
                case "Gato":
                   
                    $gato="checked";
                    $perro="";
                    $otro="";
                break;
                case "Perro":
                    
                    $perro="checked";
                    $gato="";
                    $otro="";
                break;
                case "otro":
                    echo "<script>  console.log('ayuda')</script>";
                    $otro="checked";
                    $gato="";
                    $perro="";
                break;
            }
        }
        if($request->has('search')){
            $pets= DB::table('pets')->
                                         whereColumn([
                                                    ['email_nue', '=', 'email_master'],
                                            ])
                            ->where('description','like','%'.$request->get('search').'%')
                            ->orWhere('titulo','like','%'.$request->get('search').'%')
                            ->paginate(5)->appends('search',$request->get('search'));
        }}else{
            $pets=DB::table('pets')->whereColumn([
                ['email_nue', '=', 'email_master'],
            ])->paginate(5);
        }

    
       
        echo "<script>  console.log('$gato')</script>";
    return view('search',['pets'=>$pets,'gato'=>$gato,'perro'=>$perro ,'otro'=>$otro]);
}
public function saveSurvey(Request $request){
      
    $ans=new Answer; 
    try {
        // Validate the value...
       
        $ans->respuesta1=$request->get('pregunta1');
        $ans->respuesta2=$request->get('pregunta2');
        $ans->respuesta3=$request->get('pregunta3');
        $ans->respuesta4=$request->get('pregunta4');
        $ans->respuesta5=$request->get('pregunta5');
        $ans->respuesta6=$request->get('pregunta6');
          $ans->respuesta7=$request->get('pregunta7');
        $pos =  substr(URL::full(), strpos(URL::full(), "y")+2, strlen ( URL::full() ));  
        $ans->idPEt=$pos;
        $ans->email_user="otro";
        $ans->save();
    } catch (\Illuminate\Database\QueryException $ex) {
   

        return back()->with('Error','Respuestas no  enviadas');
    }
    return back()->with('success','Respuestas enviadas');
   
    
}
public function newOwner($id,$emailn){
    try {
   DB::table('pets')
              ->where('id', $id)
              ->update(['email_nue' => $emailn]);
            } catch (\Illuminate\Database\QueryException $ex) {
   

                return back()->with('Error','Respuestas no  enviadas');
            }
            return back()->with('success','Se ha acaeptado correctamente enviadas');
}
}
