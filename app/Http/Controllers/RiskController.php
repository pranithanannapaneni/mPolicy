<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\StoreriskRequest;
use App\Http\Requests\UpdateriskRequest;
use App\Models\risk;
use Illuminate\Support\Facades\DB;

class RiskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Risk::all();
        return response()->json($comments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreriskRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id'=>'required|',
            'question1'=> 'required|boolean',
            'question2'=> 'required|boolean',
            'question3'=> 'required|boolean',
            'question4'=> 'required|boolean',
            'question5'=> 'required|boolean']);
         
         DB::table('risks')-> insert([
             'user_id'=>$request->get('user_id'),
             'question1'=>$t1 = $request->get('question1'),
             'question2'=>$t2 = $request->get('question2'),
             'question3'=>$t3 = $request->get('question3'),
             'question4'=>$t4 = $request->get('question4'),
             'question5'=>$t5 = $request->get('question5'),
             'score'=>$this->score($t1,$t2,$t3,$t4,$t5)

         ]) ;
         
         return response()->json('No Risk');
    }
    function score($a,$b,$c,$d,$e){
        $s = 0;
        
        if($a==true){
            $s = $s + 1;

        }
        if($b==true){
            $s = $s + 1;
            
        }
        if($c==true){
            $s = $s + 1;
            
        }
        if($d==true){
            $s = $s + 1;
            
        }
        if($e==true){
            $s = $s + 1;
        }
        return $s;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\risk  $risk
     * @return \Illuminate\Http\Response
     */
    public function show(risk $risk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\risk  $risk
     * @return \Illuminate\Http\Response
     */
    public function edit(risk $risk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateriskRequest  $request
     * @param  \App\Models\risk  $risk
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateriskRequest $request, risk $risk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\risk  $risk
     * @return \Illuminate\Http\Response
     */
    public function destroy(risk $risk)
    {
        //
    }
}
