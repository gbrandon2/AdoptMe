<?php

namespace App\Http\Controllers;

use App\Accesory;
use App\Pet;
Use App\Event;
Use App\Answer; 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{   
     
    public function  index() {
       
      if(Auth::check()){
        return view('app');
      }else {
          return view('home');
      }
    }
    public function upload(){
        return view('upload');
    }
   
    public function user(){
        $user=Auth::user();
        if(Auth::check()){
        $pets=DB::table('pets')->where('email_master','like',$user->email)
        ->orderBy('id', 'DESC')->limit(4)->get();
        $accesori=DB::table('accesories')->where('email','like','algo')
                                        ->where('posttype','=',2)->orderBy('id', 'DESC')->limit(4)->get();
        $service=DB::table('accesories')->where('email','like','algo')
                                        ->where('posttype','==',1)->orderBy('id', 'DESC')->limit(4)->get();
                                    }else{
                                        $pets=DB::table('pets')->where('email_master','like','algo')
                                        ->orderBy('id', 'DESC')->limit(4)->get();
                                        $accesori=DB::table('accesories')->where('email','like','algo')
                                                                        ->where('posttype','=',2)->orderBy('id', 'DESC')->limit(4)->get();
                                        $service=DB::table('accesories')->where('email','like','algo')
                                                                        ->where('posttype','==',1)->orderBy('id', 'DESC')->limit(4)->get();
                                        }
        return view('user1',['pets'=>$pets,'accesories'=>$accesori,'services'=>$service,'user'=>$user]);
    }
    public function storePet(Request $request){
        $pet=new Pet;

   
        $pet->titulo=$request->input("tit");
        $pet->especie=$request->especie; 
        if(Auth::check()){
            $pet->email_master=Auth::user()->email;
        $pet->email_nue=Auth::user()->email;}
            else{
                $pet->email_master="algo";
        $pet->email_nue="algo";
            }
           
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
      return back();

    }
    public function storeAcc(Request $r){
        $acc=new Accesory;
    
        if(Auth::check()){
            $acc->email=Auth::user()->email;}
            else{
                $acc->email="algo";
            }
        $acc->barrio=$r->input("barrio");
        $acc->precio=$r->input("precio");
        $acc->descripcion=$r->input("descrip");
        $acc->titul=$r->input("titulo");
        $acc->posttype=2;
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
        return back();
    }
    public function storeServ(Request $r){
        $acc=new Accesory;
        if(Auth::check()){
        $acc->email=Auth::user()->email;}
        else{
            $acc->email="algo";
        }
        $acc->barrio=$r->input("lugar");
        $acc->precio=$r->input("preci");
        $acc->descripcion=$r->input("descri");
        $acc->titul=$r->input("titul");
        $acc->posttype=1;
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
        return back();
    }


public function storeEv(Request $r){
    $acc=new Event;
    if(Auth::check()){
    $acc->emailEvt=Auth::user()->email;}else
    {
    $acc->emailEvt="algo";}

    $acc->dirEvt=$r->input("DirEvt");
    $time = $r->input("date");
    

    $acc->descripcionEvt=$r->input("descEvt");
    $acc->TitulEvt=$r->input("titulEvt");
   
    $acc->evtDate=$time;
    if($r->hasFile('imEvt')){
        $file=$r->file('imEvt');
        $extension=$file->getClientOriginalExtension();
        $filename=time().'.'.$extension;
        $file->move('Imagenes',$filename);
        $acc->imagEvt=$filename;
    }else{
        $acc->imagEvt="nofunion";
    }
    $acc->save();
    return back();
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

public function searchAcc(Request $request )
{
    if($request->has('search')){
        $acc=DB::table('accesories')->where('descripcion','like','%'.$request->get('search').'%')
                                    ->where('posttype','=',2)
                                    ->orWhere('titul','like','%'.$request->get('search').'%')
                                     ->paginate(5)->appends('search',$request->get('search'));
        return view("accesory")->with(['acc'=>$acc]);
    }
    else{
        $acc=DB::table('accesories')->where('posttype',2) ->paginate(5);
        return view("accesory")->with(['acc'=>$acc]);
    }
}
public function searchEv(Request $request){
    if($request->has('search')){
        $evt=DB::table('events')->where('descripcion','like','%'.$request->get('search').'%') 
                                ->orWhere('titul','like','%'.$request->get('search').'%')
                                ->paginate(5)->appends('search',$request->get('search'));
                                return view("event")->with(['evt'=>$evt]);

    }else{
        $evt=DB::table('events')->paginate(5);
        return view("event")->with(['evt'=>$evt]);
    }
}
public function evtInf(Request $request){
    if($request->has('id')){
  
        $ev=DB::table('events')->find($request->get('id'));
      
        
        $evt=DB::table('events')->where('id','<>',$request->get('id'))
                                
                        ->orderBy('id', 'DESC')->limit(4)->get();

        return view('evtInfo',['ev'=>$ev,'evt'=>$evt]);
    }
}
public function accInf(Request $request){

    if($request->has('id')){
  
        $acce=DB::table('accesories')->find($request->get('id'));
      
        
        $acc=DB::table('accesories')->where('id','<>',$request->get('id'))
                                ->where('posttype',2)
                                ->orderBy('id', 'DESC')->limit(4)->get();

        return view('accInfo',['acce'=>$acce,'acc'=>$acc]);
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
    
        $ans->email_user=Auth::user()->email;;
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
              ->update(['email_nue' => Auth::user()->email]);
            } catch (\Illuminate\Database\QueryException $ex) {
   

                return back()->with('Error','Respuestas no  enviadas');
            }
            return back()->with('success','Se ha acaeptado correctamente enviadas');
}
}
