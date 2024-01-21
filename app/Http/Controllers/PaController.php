<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paquestion;
use App\Models\Pacomment;

class PaController extends Controller
{
    public function show(Paquestion $paquestion) {
        return view("past.detail")->with(["paquestion" => $paquestion]);
    }
    
    public function comment(Request $request) {
        //dd($request->comment);
    }
    
    public function store(Request $request, Pacomment $pacomment,Paquestion $paquestion){
        
   
    $input = $request['comment'];
    $pacomment->paquestion_id=$paquestion->id;
    $pacomment->user_id=auth()->user()->id;
    $pacomment->fill($input)->save();
    return redirect("/paquestions/" . $paquestion->id);
    }
}
