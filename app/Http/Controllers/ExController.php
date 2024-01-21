<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exquestion;
use App\Models\Excomment;
use Auth;
class ExController extends Controller
{
    public function index(Exquestion $exquestion)
    {
        //$user = Auth::user();
        //$query = Paquestion::query();
        //$query->where('user_id','=',$user);
        //$paquestion=$query->get();
        
        return view('expectation/index')->with(['exquestions'=>$exquestion->get()]);
    }

    public function show(Exquestion $exquestion) {
        return view("expectation.show")->with(["exquestion" => $exquestion]);
    }
    
    
    public function comment(Request $request, Excomment $excomment,Exquestion $exquestion){
        
   
    $input = $request['comment'];
    $excomment->paquestion_id=$exquestion->id;
    $excomment->user_id=auth()->user()->id;
    $excomment->fill($input)->save();
    return redirect("/exquestions/" . $exquestion->id);

    }

    

    
    public function create(Exquestion $exquestion)
    {
        return view('expectation/create');
    }

    public function store(Request $request, Exquestion $exquestion)
    {
        $input = $request['exquestion'];
        $exquestion->fill($input)->save();
        return redirect('/expectation/' . $exquestion->id);
    }
    
    public function edit(Exquestion $exquestion)
    {
        return view('expectation/edit')->with(['exquestion' => $exquestion]);
    }

    public function update(Request $request, Exquestion $exquestion)
    {
        $input_exquestion = $request['exquestion'];
        $exquestion->fill($input_exquestion)->save();

        return redirect('/expectation/' . $exquestion->id);
    }
    
}