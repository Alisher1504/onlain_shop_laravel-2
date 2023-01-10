<?php

namespace App\Http\Livewire\Frontend\Card;

use App\Models\Card;
use Livewire\Component;

class ShowCard extends Component
{

    public $card;

    public function removeCardItem($cardId) {

        $cardItemData = Card::where('user_id', auth()->user()->id)->where('id', $cardId)->first();
        if($cardItemData) {

            $cardItemData->delete();
            $this->emit('cardAddedUpdated');
            $this->dispatchBrowserEvent('message', [
                'text' => 'card Removed successfully',
                'type' => 'success',
                'status' => 200
            ]);

        } else {
            $this->dispatchBrowserEvent('message', [
                'text' => 'none card',
                'type' => 'error',
                'status' => 500
            ]);
        }

    }


    public function render() {
        $this->card = Card::where('user_id', auth()->user()->id)->get();
        return view('livewire.frontend.card.show-card', [
            'card' => $this->card,
        ]);

    }

}
