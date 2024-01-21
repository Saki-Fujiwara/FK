<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paquestion;
use App\Models\Pacomment;

class PaController extends Controller
{
    public function index(Paquestion $paquestion)
    {
        //ログインしてる人のみの投稿絞り込み
        return view('past/index')->with(['paquestions' => $paquestion->get()]);
    }
    public function show(Paquestion $paquestion) {
        return view("past.detail")->with(["paquestion" => $paquestion]);
    }
    
    
    public function store(Request $request, Pacomment $pacomment,Paquestion $paquestion){
        
   
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

    public function store(Paquestion $paquestion, Request $request)
    {
        $input = $request['paquestion'];
        $paquestion->fill($input)->save();
        return redirect('/past/' . $paquestion->id);
    }

    public function edit(Post $post)
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
