<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SayHi extends Component
{
    public $contact;
    protected $listeners = ['refreshChildren' => '$refresh'];

    public function emitFoo()
    {
        $this->emitUp('foo');
    }


    public function mount($contact)
    {
        $this->contact = $contact;
    }
    public function render()
    {
        return view('livewire.say-hi');
    }
}
