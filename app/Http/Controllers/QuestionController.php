<?php

namespace App\Http\Controllers;

use App\Question;
use App\Answer;
use Illuminate\Http\Request;
use DB;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataSoal = Question::all();
        return view('dataSoal', compact('dataSoal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addQuestion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tempQ = DB::table('questions')->get();
        $countQuestion = count($tempQ);
        $tempID = 0;

        foreach ($tempQ as $row){
            $tempID = $row->question_id+1;
        }
//        for ($i = 0; $i < $countQuestion; $i++){
//            $tempID = $tempQ->question_id+1;
//        }

        if ($request->get('type') == 'trueFalse'){
            $question = new Question([
                'question_id' => $tempID,
                'question' => $request->get('question'),
                'type' => $request->get('type'),
                'difficulties' => $request->get('difficulties'),
                'grade' => $request->get('grade'),
                'case_type' => 0,
                'quiz_id' => $request->get('quiz_id'),
            ]);
            $answer = new Answer([
                'answer' => $request->get('answerTF'),
                'question_id' => $tempID,
                'status' => 0,
            ]);
            $answer->save();
        }
        elseif ($request->get('type') == 'pilBer'){
            $question = new Question([
                'question_id' => $tempID,
                'question' => $request->get('question'),
                'type' => $request->get('type'),
                'difficulties' => $request->get('difficulties'),
                'grade' => $request->get('grade'),
                'case_type' => 0,
                'quiz_id' => $request->get('quiz_id'),
            ]);

            $tempAnswer = $request->input('answer');
            $tempStatus = $request->input('statusArr');
            $c = count($tempStatus);
            for ($i = 0; $i < $c; $i++){
                if ($tempStatus[$i] == '1'){
                    $answer = new Answer([
                        'answer' => $tempAnswer[$i],
                        'question_id' => $tempID,
                        'status' => 1,
                    ]);
                }
                else{
                    $answer = new Answer([
                        'answer' => $tempAnswer[$i],
                        'question_id' => $tempID,
                        'status' => 0,
                    ]);
                }
                $answer->save();
            }
        }
        elseif ($request->get('type') == 'essay'){
            $question = new Question([
                'question_id' => $tempID,
                'question' => $request->get('question'),
                'type' => $request->get('type'),
                'difficulties' => $request->get('difficulties'),
                'grade' => $request->get('grade'),
                'case_type' => $request->get('case_type'),
                'quiz_id' => $request->get('quiz_id'),
            ]);
            $answer = new Answer([
                'answer' => $request->get('answerEssay'),
                'question_id' => $tempID,
                'status' => 1,
            ]);
            $answer->save();
        }
        $question->save();

        return redirect('/dataSoal');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question = Question::find($id);

        $question->delete();

        $answer = DB::table('answer')
            ->where("question_id", $id)
            ->delete();

        return redirect('/dataSoal');
    }
}
