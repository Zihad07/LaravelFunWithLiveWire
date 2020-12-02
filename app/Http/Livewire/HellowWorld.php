<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Contact;

class HellowWorld extends Component
{
    public $names = ['jelly', 'chiko', 'addam'];
    public $contacts;

    protected $listeners = ['foo' => '$refresh'];




    public function mount()
    {
        $this->contacts = Contact::all();
        // dd($this->contacts);
    }

    // public function mount($name) {
    //     $this->name = $name;
    // }

    // public function hydrate() {
    //     $this->name = 'hyrdrate@';
    // }

    public function updatedName()
    {
        $this->name = \strtoupper($this->name);
    }

    public function remove($name)
    {
        Contact::whereName($name)->first()->delete();
        $this->mount();
    }

    public function render()
    {
        return view('livewire.hellow-world');
    }
}
