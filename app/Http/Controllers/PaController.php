<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paquestion;
use App\Models\Pacomment;
use Auth;
class PaController extends Controller
{
    public function index(Paquestion $paquestion)
    {
        //$user = Auth::user();
        //$query = Paquestion::query();
        //$query->where('user_id','=',$user);
        //$paquestion=$query->get();
        
        return view('past/index')->with(['paquestions'=>$paquestion->get()]);
    }

    public function show(Paquestion $paquestion) {
        return view("past.show")->with(["paquestion" => $paquestion]);
    }
    
    
    public function comment(Request $request, Pacomment $pacomment,Paquestion $paquestion){
        
   
    $input = $request['comment'];
    $pacomment->paquestion_id=$paquestion->id;
    $pacomment->user_id=auth()->user()->id;
    $pacomment->fill($input)->save();
    return redirect("/paquestions/" . $paquestion->id);

    }

    

    
    public function create(Paquestion $paquestion)
    {
        return view('past/create');
    }

    public function store(Request $request, Paquestion $paquestion)
    {
        $input = $request['paquestion'];
        $paquestion->fill($input)->save();
        return redirect('/past/' . $paquestion->id);
    }
    
    public function edit(Paquestion $paquestion)
    {
        return view('past/edit')->with(['paquestion' => $paquestion]);
    }

    public function update(Request $request, Paquestion $paquestion)
    {
        $input_paquestion = $request['paquestion'];
        $paquestion->fill($input_paquestion)->save();

        return redirect('/past/' . $paquestion->id);
    }
    
}