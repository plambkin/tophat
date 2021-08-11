<?php

namespace App\Http\Livewire;

use Livewire\Component;
use WithAuthRedirects;

class QuestionAnswer extends Component
{

    public $answer;

    protected $rules = [
        'answer' => 'required|min:4',
    ];

    public function questionAnswer()
    {
        if (auth()->guest()) {
            abort(Response::HTTP_FORBIDDEN);
        }

        $this->validate();

/*        $answer = Answer::create([
            'user_id' => auth()->id(),
            'category_id' => $this->category,
            'status_id' => 1,
            'title' => $this->title,
            'description' => $this->description,
        ]);*/


        session()->flash('success_message', 'Answer was added successfully!');

        $this->reset();

        return redirect()->route('answer.index');
    }


        public function render()
    {
        return view('livewire.question-answer');
    }
}









/*public function render()
{
    return view('livewire.create-idea', [
        'categories' => Category::all(),
    ]);
}*/
