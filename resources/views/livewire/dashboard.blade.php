<?php

use App\Models\ListeningParty;
use Livewire\Volt\Component;

new class extends Component
{
    public function with()
    {
        return [
            "listening_parties" => ListeningParty::all(),
        ];
    }
}; ?>

<div>
    Hello World!
</div>
