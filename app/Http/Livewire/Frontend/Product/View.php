<?php

namespace App\Http\Livewire\Frontend\Product;

use App\Models\Card;
use Livewire\Component;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class View extends Component
{

    public $category, $product, $quantityCount = 1;


    public function decrementQuantity() {
        if($this->quantityCount > 1) {
            $this->quantityCount--;
        }
    }

    public function incrementQuantity() {
        if($this->quantityCount < 10) {
            $this->quantityCount++;
        }
    }


    public function addToWisherlist($productId) {
        
        if(Auth::check()) {
            
            if(Wishlist::where('user_id', auth()->user()->id)->where('product_id', $productId)->exists()){
                session()->flash('message', 'Alredy added');
                $this->dispatchBrowserEvent('message', [
                    'text' => 'Alredy added to wishlist',
                    'type' => 'warning',
                    'status' => 409
                ]);
                return false; 
            } else {
                Wishlist::create([
                    'user_id' => auth()->user()->id,
                    'product_id' => $productId
                ]);
                $this->emit('wishlistAddedUpdate');
                session()->flash('message', 'Wishlist add successfully');
                $this->dispatchBrowserEvent('message', [
                    'text' => 'Wishlist add successfully',
                    'type' => 'success',
                    'status' => 200
                ]);
            }

        } else {
            session()->flash('message', 'Please Login to Continue');
            $this->dispatchBrowserEvent('message', [
                'text' => 'Please Login to Continue',
                'type' => 'info',
                'status' => 401
            ]);
            return false;
        }

    }

    public function mount($category, $product) {
        $this->category = $category;
        $this->product = $product;
    }

    public function render()
    {
        return view('livewire.frontend.product.view', [
            'category' => $this->category,
            'product' => $this->product
        ]);
    }

    public function addToCard(int $productId) {

        if(Auth::check()) {
            
            if($this->product->where('id', $productId)->where('status', '0')->exists()){

                if($this->product->quantity > 0) {

                    if(Card::where('user_id', auth()->user()->id)->where('product_id',$productId)->exists()) {

                        $this->dispatchBrowserEvent('message', [
                            'text' => 'Product alredy added',
                            'type' => 'danger',
                            'status' => 200
                        ]);

                    } else {

                        if($this->product->quantity > $this->quantityCount) {
                        
                            Card::create([
                                'user_id' => auth()->user()->id,
                                'product_id' => $productId,
                                'quantity' => $this->quantityCount
                            ]);
                            $this->dispatchBrowserEvent('message', [
                                'text' => 'Product add to card',
                                'type' => 'success',
                                'status' => 200
                            ]);
                            
                        } else {
                            $this->dispatchBrowserEvent('message', [
                                'text' => 'only' . $this->product->quantity . ' Quantity Aviable' ,
                                'type' => 'warning',
                                'status' => 404
                            ]);
                        }

                    }
 
                } else {
                    $this->dispatchBrowserEvent('message', [
                        'text' => 'out of stock',
                        'type' => 'info',
                        'status' => 404
                    ]);
                }

            } else {
                $this->dispatchBrowserEvent('message', [
                    'text' => 'product does not exists',
                    'type' => 'info',
                    'status' => 404
                ]);
            }

        } else {
            $this->dispatchBrowserEvent('message', [
                'text' => 'Please Login to add to card',
                'type' => 'info',
                'status' => 401
            ]);
        }

    }


}