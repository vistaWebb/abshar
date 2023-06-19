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
    public function createTransaction($amount, $token, $gateway_name, $order)
    {
        Transaction::create([
            'order_id' => $order->id,
            'amount' => $amount,
            'token' => $token,
            'gateway_name' => $gateway_name,
        ]);

        alert()->success('با موفقیت انجام شد', ' تراکنش با موفقیت اضافه شد');
        return ['success' => 'success!'];
    }

    public function updateOrder($token, $refId)
    {
        try {
            DB::beginTransaction();

            $transaction = Transaction::where('token', $token)->firstOrFail();
            $transaction->update([
                'status' => 1,
                'ref_id' => $refId,
            ]);

            $order = Order::findOrFail($transaction->order_id);
            $order->update([
                'payment_status' => 1,
                'status' => 1,
            ]);

            DB::commit();
        } catch (Exception $ex) {
            DB::rollBack();
            return ['error' => $ex->getmessage()];
        }
        return ['success' => 'success!'];
    }
}
