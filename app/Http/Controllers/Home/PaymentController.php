<?php

namespace App\Http\Controllers\Home;

use Exception;
use App\Models\Order;
use App\Models\Coupon;
use App\Models\Product;
use App\Models\Transaction;
use App\paymentGateway\Pay;
use Illuminate\Http\Request;
use App\Models\ProductVariation;
use App\PaymentGateway\Zarinpal;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PaymentController extends Controller
{
    // public function payment(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'amount' => 'required',
    //         'gateway_name' => 'required',
    //     ]);

    //     if ($validator->fails()) {
    //         // alert()->error('انتخاب آدرس تحویل سفارش الزامی می باشد', 'دقت کنید')->persistent('حله');
    //         return redirect()->back();
    //     }

    //     $checkCart = $this->checkCart();
    //     if (array_key_exists('error', $checkCart)) {
    //         alert()->error($checkCart['error'], 'دقت کنید');
    //         return redirect()->route('home.index');
    //     }

    //     $amounts = $this->getAmounts();
    //     if (array_key_exists('error', $amounts)) {
    //         alert()->error($amounts['error'], 'دقت کنید');
    //         return redirect()->route('home.index');
    //     }

    //     if($request->payment_method == 'pay') {
    //         $payGateway = new Pay();
    //         $payGatewayResult = $payGateway->send($amounts, $request->address_id);
    //         if (array_key_exists('error', $payGatewayResult)) {
    //             alert()->error($payGatewayResult['error'], 'دقت کنید');
    //             return redirect()->back();
    //         }else{
    //             return redirect()->to($payGatewayResult['success']);
    //         }
    //     }

    //     if($request->payment_method == 'zarinpal') {
    //         $zarinpalGateway = new Zarinpal();
    //         $zarinpalGatewayresult = $zarinpalGateway->send($amounts , 'تست' , $request->address_id);
    //         if (array_key_exists('error', $zarinpalGatewayresult)) {
    //             alert()->error($zarinpalGatewayresult['error'], 'دقت کنید');
    //             return redirect()->back();
    //         }else{
    //             // dd($zarinpalGatewayresult['success']);
    //             return redirect()->to($zarinpalGatewayresult['success']);
    //         }
    //     }

    //     alert()->error('درگاه انتخابی معتبر نمی باشد', 'دقت کنید');
    //     return redirect()->back();
    // }
    public function payment(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'amount' => 'required',
            'gateway_name' => 'required',
        ]);

        if ($validator->fails()) {
            alert()
                ->error('موارد ضروری را کامل نمایید ', 'دقت کنید')
                ->persistent('حله');
            return redirect()->back();
        }

        $order = Order::create([
            'f_name' => $request->f_name,
            'l_name' => $request->l_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'category_id' => $request->category_id,
            'donation_id' => $request->donation_id,
            'amount' => $request->amount,
            'gateway_name' => $request->gateway_name,
            'token' => $request->_token,
        ]);
        session()->put('amount', ['id' => $order->id,'token' => $order->token, 'amount' => $order->amount]);

        $amount=$request->amount;
        if ($request->gateway_name == 'melli') {
            $key = 'ODU0MDI2MjRkNThjZmE0Yjk4ZGEwMzYz';
            $MerchantId = '755';
            $TerminalId = 'R4XOUVSM';
            $Amount = $request->amount; //Rials
            $OrderId = rand(1, 999999);
            $LocalDateTime = date('m/d/Y g:i:s a');
            $ReturnUrl = route('home.payment.verify');
            $SignData = $this->encrypt_pkcs7("$TerminalId;$OrderId;$Amount", "$key");
            $data = ['TerminalId' => $TerminalId, 'MerchantId' => $MerchantId, 'Amount' => $Amount, 'SignData' => $SignData, 'ReturnUrl' => $ReturnUrl, 'LocalDateTime' => $LocalDateTime, 'OrderId' => $OrderId];
            $str_data = json_encode($data);
            $res = $this->CallAPI('https://sadad.shaparak.ir/vpg/api/v0/Request/PaymentRequest', $str_data);
            $arrres = json_decode($res);

            if ($arrres->ResCode == 0) {
                $Token = $arrres->Token;
                $url = "https://sadad.shaparak.ir/VPG/Purchase?Token=$Token";
                return redirect()->to($url);
            } else {
                die($arrres->Description);
            }
        }
        if ($request->gateway_name == 'mellat') {
        }
        if ($request->gateway_name == 'saman') {
        }
        if ($request->gateway_name == 'parsian') {
        }

        if ($request->gateway_name == 'pay') {
            $payGateway = new Pay();
            $payGatewayResult = $payGateway->send($amount, $request->address_id);
            if (array_key_exists('error', $payGatewayResult)) {
                alert()->error($payGatewayResult['error'], 'دقت کنید');
                return redirect()->back();
            } else {
                return redirect()->to($payGatewayResult['success']);
            }
        }

        if ($request->gateway_name == 'zarinpal') {
            $zarinpalGateway = new Zarinpal();
            $zarinpalGatewayresult = $zarinpalGateway->send($request->amount, 'تست', $order);
            if (array_key_exists('error', $zarinpalGatewayresult)) {
                alert()->error($zarinpalGatewayresult['error'], 'دقت کنید');
                return redirect()->back();
            } else {
                alert()->success($zarinpalGatewayresult['success'], 'دقت کنید');
                return redirect()->to($zarinpalGatewayresult['success']);
            }
        }

        alert()->error('درگاه انتخابی معتبر نمی باشد', 'دقت کنید');
        return redirect()->back();
    }

    public function paymentVerify(Request $request)
    {
        $amount = session()->get('amount.amount');

        if ($request->gatewayName == 'melli') {
            $key = '1234567890123456789012345678901234567890';
            $OrderId = $request->OrderId;
            $Token = $request->token;
            $ResCode = $request->ResCode;
            if ($ResCode == 0) {
                $verifyData = ['Token' => $Token, 'SignData' => $this->encrypt_pkcs7($Token, $key)];
                $str_data = json_encode($verifyData);
                $res = $this->CallAPI('https://sadad.shaparak.ir/vpg/api/v0/Advice/Verify', $str_data);
                $arrres = json_decode($res);
            }
            if ($arrres->ResCode != -1 && $ResCode == 0) {
                //Save $arrres->RetrivalRefNo,$arrres->SystemTraceNo,$arrres->OrderId to DataBase
                echo 'شماره سفارش:' . $OrderId . '<br>' . 'شماره پیگیری : ' . $arrres->SystemTraceNo . '<br>' . 'شماره مرجع:' . $arrres->RetrivalRefNo . '<br> اطلاعات بالا را جهت پیگیری های بعدی یادداشت نمایید.' . '<br>';
            } else {
                echo 'تراکنش نا موفق بود در صورت کسر مبلغ از حساب شما حداکثر پس از 72 ساعت مبلغ به حسابتان برمی گردد.';
            }
        }

        if ($request->gatewayName == 'pay') {
            $payGateway = new Pay();
            $payGatewayResult = $payGateway->verify($request->token, $request->status);
            if (array_key_exists('error', $payGatewayResult)) {
                alert()->error($payGatewayResult['error'], 'دقت کنید');
                return redirect()->back();
            } else {
                alert()->success($payGatewayResult['success'], 'دقت کنید');
                return redirect()->route('home.index');
            }
        }

        if ($request->gatewayName == 'zarinpal') {
            $zarinpalGateway = new Zarinpal();
            $zarinpalGatewayResult = $zarinpalGateway->verify($request->Authority, $amount);
            if (array_key_exists('error', $zarinpalGatewayResult)) {
                alert()->error($zarinpalGatewayResult['error'], 'دقت کنید');
                return redirect()->back();
            } else {
                alert()->success($zarinpalGatewayResult['success'], 'دقت کنید');
                return redirect()->route('home.index');
            }
        }

        alert()->error('مسیر بازگشت از درگاه انتخابی معتبر نمی باشد', 'دقت کنید');
        return redirect()->route('checkout.index');
    }
}
