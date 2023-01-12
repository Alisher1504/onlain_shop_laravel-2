<?php

namespace App\Http\Livewire\Frontend\Checkout;

use App\Models\Card;
use Livewire\Component;

class CheckoutShow extends Component
{
    public $cards, $totalProductAmout;

    public function totalproductAmout() {

        $this->cards = Card::where('user_id', auth()->user()->id)->get();
        foreach($this->cards as $item){
            $this->totalProductAmout += $item->product->selling_price * $item->quantity;
        }
        return $this->totalProductAmout;

    }

    public function render()
    {
        $this->totalProductAmout = $this->totalproductAmout();
        return view('livewire.frontend.checkout.checkout-show',[
            'totalProductAmout' => $this->totalProductAmout
        ]);
    }
}
