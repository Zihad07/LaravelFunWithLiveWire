<div style="margin-bottom:2px;">
    {{-- <input type="text" wire:model="name"> --}}
    Hello {{ $contact->name }} {{ now()}}
    {{-- <button wire:click="$refresh">Rrefesh</button> --}}
    <button wire:click="emitFoo">Refesh parent</button>
</div>
