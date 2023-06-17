<?php

namespace App\paymentGateway;

use App\Models\Order;
use App\Models\Product;
use App\Models\OrderItem;
use App\Models\Transaction;
use App\Models\ProductVariation;
use Illuminate\Support\Facades\DB;

class payment
{
    public function createOrder($f_name , $l_name ,$email , $phone , $category_id , $donation_id , $amount , $token , $gateway_name)
    {
        try
        {
            DB::beginTransaction();

            Order::create([
                'f_name' => $f_name,
                'l_name' => $l_name,
                'email' => $email,
                'phone' => $phone,
                'category_id' => $category_id,
                'donation_id' => $donation_id,
                'amount' => $amount,
                'gateway_name' => $gateway_name,
            ]);

            dd('ok');

            foreach (\Cart::getContent() as $item) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $item->associatedModel->id,
                    'price' => $item->price,
                    'quantity' => $item->quantity,
                    'subtotal' => $item->quantity * $item->price,
                ]);
            }

            Transaction::create([
                'user_id'=>auth()->id(),
                'order_id'=>$order->id,
                'amount'=>$amounts['paying_amount'],
                'token'=> $token ,
                'gateway_name' => $gateway_name
            ]);

            DB::commit();
        }catch(Exception $ex)
        {
            DB::rollBack();
            return ['error' => $ex->getmessage()];
        }
        return ['success' => 'success!'];

    }

    public function updateOrder($token , $refId)
    {
        try
        {
            DB::beginTransaction();

            $transaction = Transaction::where('token' , $token )->firstOrFail();
            $transaction->update([
                'status'=> 1,
                'ref_id' =>$refId
            ]);

            $order = Order::findOrFail($transaction->order_id);
            $order->update([
                'payment_status' => 1 ,
                'status' => 1
            ]);

            DB::commit();
        }catch(Exception $ex)
        {
            DB::rollBack();
            return ['error' => $ex->getmessage()];
        }
        return ['success' => 'success!'];
    }
}
