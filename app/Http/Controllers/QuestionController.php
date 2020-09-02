<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Question;

use App\Questionnaire;

class QuestionController extends Controller
{
    //
    public function create(Questionnaire $questionnaire)
    {
        return view('question.create', compact('questionnaire'));
    }

    public function store(Questionnaire $questionnaire)
    {
        $data = request()->validate([
            'question.question' => 'required',
            'answers.*.answer' => 'required'
        ]);

        $question = $questionnaire->questions()->create($data['question']);
        $question->answers()->createMany($data['answers']);

        return redirect('questionnaire/'.$questionnaire->id.'/questions');
    }

    public function destroy(Questionnaire $questionnaire, Question $question)
    {
        $question->answers()->delete();
        $question->delete();

        return redirect()->back();
    }

    public function edit(Questionnaire $questionnaire, Question $question)
    {
        $fullQuestion =  $question->load('answers');
        
       
        return view('question.edit', compact('fullQuestion'));
    }

    public function update(Request $questionnaire,$question)
    {
       
         $q = Question::with('answers')->findOrFail($question);
         foreach ( $q->answers as $key => $answer ){
             $answer->update(request()->get('answers')[$key]);
            }
            
        $q->update(request()->get('question'));
        return redirect()->back()->with('info', 'Datos actualizados con éxito');
        ;

    }

}
