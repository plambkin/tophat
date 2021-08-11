<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SecsToDelete extends Component
{
    public $secsToDelete=180;


    public function secsToDelete()
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
        return view('livewire.secs-to-delete',[
            'secsToDelete'=>$this->secsToDelete,
        ]);
    }
}


