<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Models\Wishlist;

class Wishlistshow extends Component
{

    public function remowewishlist(int $wishlistId) {
        Wishlist::where('user_id', auth()->user()->id)->where('id', $wishlistId)->delete();
        $this->dispatchBrowserEvent('message', [
            'text' => 'Wishlist item Removed successfully',
            'type' => 'success',
            'status' => 200
        ]);
    }

    public function render()
    {
        $wishlist = Wishlist::where('user_id', auth()->user()->id)->get();

        return view('livewire.frontend.wishlistshow', [
            'wishlist' => $wishlist,
        ]);
    }
}
