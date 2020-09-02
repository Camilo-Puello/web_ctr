<?php

namespace App\Http\Controllers;

use App\Question;
use App\Questionnaire;
use Illuminate\Http\Request;

class QuestionnaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $encuestas_count = Questionnaire::count();
        $questionnaire = Questionnaire::paginate(5);
        return view('encuestas.index', compact('questionnaire', 'encuestas_count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('encuestas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data = request()->validate([
            'tittle' => 'required',
            'purpose' => 'required'
        ]);

        $questionnaire = auth()->user()->question()->create($data);

        return redirect('/questionnaire');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Questionnaire  $questionnaire
     * @return \Illuminate\Http\Response
     */
    public function show(Questionnaire $questionnaire)
    {
        //
        $questionnaire = Questionnaire::all();
        $questionnaire->load('questions.answers');

        return view('opinion', compact('questionnaire'));

    }

    public function Question(Questionnaire $questionnaire)
    {
        //
        $encuesta = Questionnaire::find($questionnaire);
        $encuesta->load('questions.answers.responses');
        
        return view('encuestas.show', compact('encuesta'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Questionnaire  $questionnaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Questionnaire $questionnaire)
    {
        //
        $questionnaire = Questionnaire::find($questionnaire->id);

        return view('encuestas.edit', compact('questionnaire'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Questionnaire  $questionnaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Questionnaire $questionnaire)
    {
        //

        $data = request()->validate([
            'tittle' => 'required',
            'purpose' => 'required'
        ]);

        $questionnaire = Questionnaire::findOrFail($questionnaire->id);

        $questionnaire->tittle = request('tittle');
        $questionnaire->purpose = request('purpose');

        $questionnaire->save();


        return redirect('/questionnaire');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Questionnaire  $questionnaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Questionnaire $questionnaire, Question $question)
    {
        //

        $questionnaire = Questionnaire::find($questionnaire->id);
        $questionnaire->load('questions.answers');
        
        $questionnaire->delete();

        return redirect()->back();
    }
}
