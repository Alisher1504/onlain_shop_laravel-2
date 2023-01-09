<?php

namespace App\Http\Livewire\Frontend\Card;

use App\Models\Card;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class CardCount extends Component
{

    protected $cardCount;

    protected $listeners = ['cardAddedUpdated' => 'checkCardCount'];

    public function checkCardCount() {

        if(Auth::check()) {
            return $this->cardCount = Card::where('user_id', auth()->user()->id)->count();
        } else {
            return $this->cartCount = 0;
        }

    }

    public function render()
    {
        $this->cardCount = $this->checkCardCount();
        return view('livewire.frontend.card.card-count', [
            'cardCount' => $this->cardCount
        ]);
    }
}
