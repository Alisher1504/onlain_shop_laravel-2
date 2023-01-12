<?php

namespace App\Http\Livewire\Frontend\Checkout;

use App\Models\Card;
use App\Models\Order;
use Livewire\Component;
use App\Models\Orderitems;
use Illuminate\Support\Str;

class CheckoutShow extends Component
{
    public $cards, $totalProductAmout = 0;

    public $email, $fullname, $phone, $pincode, $address, $payment_mode = NULL, $payment_id = NULL;

    public function rules(){
        return [
            'fullname' => 'required|string|max:121',
            'email' => 'required|email|max:121',
            'phone' => 'required|string|max:20|min:5',
            'pincode' => 'required|string|max:6|min:6',
            'address' => 'required|string|max:500',
        ];
    }

    public function placeOrder() {

        $this->validate();
        $order = Order::create([
            'user_id' => auth()->user()->id,
            'tracking_no' => 'funda-'.Str::random(10),
            'fullname' => $this->fullname,
            'email' => $this->email,
            'phone' => $this->phone,
            'pincode' => $this->pincode,
            'address' => $this->address,
            'status_message' => 'in progress',
            'payment_mode' => $this->payment_mode,
            'payment_id' => $this->payment_id,
        ]);

        foreach($this->cards as $item) {

            $orderItems = Orderitems::create([
                'order_id' => $order->id,
                'product_id' => $item->product_id,
                'product_color_id' => $item->product_color_id,
                'quantity' => $item->quantity,
                'price' => $item->product->selling_price,
            ]);

        }

    }

    public function codOrder() {
        $this->payment_mode = 'Cash on Delivery';

        $placeOrder = $this->placeOrder();

        if($placeOrder) {

            Card::where('user_id', auth()->user()->id)->delete();

            $this->dispatchBrowserEvent('message', [
                'text' => 'Order placed successfully',
                'type' => 'success',
                'status' => 200
            ]);
        } else {
            $this->dispatchBrowserEvent('message', [
                'text' => 'somtsing were wrong',
                'type' => 'error',
                'status' => 500 
            ]);
        }

    }

    public function totalproductAmout() {

        $this->cards = Card::where('user_id', auth()->user()->id)->get();
        foreach($this->cards as $item){
            $this->totalProductAmout += $item->product->selling_price * $item->quantity;
        }
        return $this->totalProductAmout;

    }

    public function render()
    {
        $this->fullname = auth()->user()->name;
        $this->email = auth()->user()->email;
        $this->totalProductAmout = $this->totalproductAmout();
        return view('livewire.frontend.checkout.checkout-show',[
            'totalProductAmout' => $this->totalProductAmout
        ]);
    }
}
