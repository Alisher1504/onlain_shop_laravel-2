<?php

namespace App\Http\Livewire\Frontend\Card;

use App\Models\Card;
use Livewire\Component;

class ShowCard extends Component
{

    public $card;

    public function render() {
        $this->card = Card::where('user_id', auth()->user()->id)->get();
        return view('livewire.frontend.card.show-card', [
            'card' => $this->card,
        ]);

    }

}
