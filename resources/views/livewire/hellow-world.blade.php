<div>


    @foreach($contacts as $contact)
        @livewire('say-hi', ['contact' => $contact], key($contact->name))
        <br>
        <button wire:click="remove('{{$contact->name}}')">Remove</button>
    @endforeach

    <hr>
    {{now()}}
    {{-- <button wire:click="$refresh">Refresh</button> --}}

    <button wire:click="$emit('refreshChildren')">Refresh Children</button>
</div>
