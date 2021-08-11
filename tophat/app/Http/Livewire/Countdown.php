<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Countdown extends Component
{
    public $countdown=900;


    public function countdown()
    {


        /*        $answer = Answer::create([
                    'user_id' => auth()->id(),
                    'category_id' => $this->category,
                    'status_id' => 1,
                    'title' => $this->title,
                    'description' => $this->description,
                ]);*/


       // return redirect()->route('answer.index');
    }




    public function render()
    {
        return view('livewire.countdown',[
            'countdown'=>$this->countdown
        ]);
    }
}
