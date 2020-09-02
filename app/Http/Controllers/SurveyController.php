<?php

namespace App\Http\Controllers;

use App\Questionnaire;

use Session;

use App\Survey;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class SurveyController extends Controller
{
    //
    public function show(Questionnaire $questionnaire, $slug)
    {
        $user_id = auth()->user()->id;
        $hasAnswer = Survey::where(['user_id'=>$user_id, 'questionnaire_id'=>$questionnaire->id])->first();

        if($hasAnswer){

            Session::flash('Votado');
            return redirect('/opinion');
        }

        $questionnaire->load('questions.answers');

        return view('respuestas.show', compact('questionnaire'));
    }

    public function store(Questionnaire $questionnaire)
    {
        $req = request()->validate([
            'responses.*.question_id' => 'required',
            'responses.*.answer_id' => 'required',
            'survey.name' => 'required',
            'survey.email' => 'required|email'
        ]);

       
        $user = ['user_id' => Auth::user()->id];
        $data = array_merge($req['survey'],$user);

        $survey = $questionnaire->surveys()->create($data);
        $survey->responses()->createMany($req['responses']);
        
        Session::flash('Encuesta');

        return redirect('/opinion');
    }
}
