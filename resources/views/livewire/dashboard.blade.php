<?php

use App\Models\Episode;
use App\Models\ListeningParty;
use Livewire\Attributes\Validate;
use Livewire\Volt\Component;

new class extends Component
{
    #[Validate('required|string|max:255')]
    public string $name = '';

    #[Validate("required")]
    public $startTime;


    #[Validate("required|url")]
    public string $mediaUrl = '';

    public function createListeningParty()
    {
        $this->validate();

        $episode = Episode::create([
            "media_url" => $this->mediaUrl,

        ]);

        $listeningParty = ListeningParty::create([
            "episode_id" => $episode->id,
            "name" => $this->name,
            "start_time" => $this->startTime,
        ]);

        return redirect()->route("parties.show", $listeningParty);
    }

    public function with()
    {
        return [
            "listening_parties" => ListeningParty::all(),
        ];
    }
}; ?>

<div class="flex items-center justify-center min-h-screen bg-slate-50">
    <div class="max-w-lg w-full px-4">
        <form wire:submit="createListeningParty" class="space-y-6">
            <x-input wire:model="name" placeholder="Listening Party Name" />
            <x-input wire:model="mediaUrl" placeholder="Podcast Episode URL" description="Deirect Episode Link or YouTube Link, RSS Feeds will grab the latest episode" />

            <x-datetime-picker wire:model="startTime" placeholder="Listening Party Start Time" />

            <x-button type="submit" primary>Create Listening Party</x-button>
        </form>
    </div>
</div>
