<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quiz;
use Session;
use DB;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quiz = Quiz::all();
    	return view('quiz', compact('quiz'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createquiz');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('quiz')->insert([
            'title' => $request->input('title'),
            'duration' => $request->input('duration'),
        ]);
        return redirect('/quiz');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $quiz = DB::table('quiz')->where('quiz_id',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	    return view('editquiz',['quiz' => $quiz]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('quiz')->where('quiz_id', $id)->update([
            'title' => $request->title,
            'duration' => $request->duration
        ]);
        
	    return redirect('/quiz');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('quiz')->where('quiz_id',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/quiz');
    }
}
