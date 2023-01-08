<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Models\Wishlist;

class Wishlistshow extends Component
{
    public function render()
    {
        $wishlist = Wishlist::where('user_id', auth()->user()->id)->get();

        return view('livewire.frontend.wishlistshow', [
            'wishlist' => $wishlist,
        ]);
    }
}
